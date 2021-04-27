<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailBoxController extends Controller
{
    public function gelenKutusu()
    {
        
        $client = \Webklex\IMAP\Facades\Client::make([
            'host'          => 'smtp.gmail.com',
            'port'          => 587,
            'encryption'    => 'tls',
            'validate_cert' => true,
            'username'      => 'eminemetin999@gmail.com',
            'password'      => 'siorkqccyheexnmz',
            'protocol'      => 'imap'          
        ]);
        $client->connect();
        $folders = $client->getFolders();
        
        foreach($folders as $folder){            $messages = $folder->search()->since(\Carbon\Carbon::now()->subDays(14))->get();
            
            foreach ($messages as $message) {
               $id =   $message->getUid();
               $mailler = MailBoxModel::where('getUid',$id)->first();
               @$getUid = $mailler->getUid;
               if ($id == $getUid) {
                 $mailler = MailBoxModel::where('type','Gelen')->where('is_delete',0)->get();
               }               else {
                  $mailler = MailBoxModel::create([
                     'getUid' => $id,
                     'is_read' => 0,
                     'type' => "Gelen",
                     'getSubject' => $message->getSubject(),                     'getFrom' => $message->getFrom()[0]->mail,
                     'getAttachments' => $message->getAttachments()->count(),                     'getDate' => $message->getDate(),                     'getHtmlBody' =>  $message->getHtmlBody(),                 ]);
               }              
            }            return view('mailbox.gelen-kutusu',compact('mailler','okunmayanMesaj'));          
        }    }}
