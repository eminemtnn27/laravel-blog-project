<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$slug=Str::slug('Laravel 5 Framework','-');
        $pages=['Hakkımızda','Kariyer','Misyonumuz','Vizyonumuz'];
        $count=0;
        foreach($pages as $page) {
            $count++;
        DB::table('pages')->insert([
         'title'=>$page,
         'slug'=>Str::slug($page),
         'image'=>'https://lorempixel.com/800/400/cats/?51239',
         'content'=> 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem vLorem
         Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem vLorem
         Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem vLorem
         Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem vLorem
         Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem vLorem
         Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem vLorem',
         'order'=>$count,
         'created_at'=>now(),
         'updated_at'=>now()

           ]);
    }
    }}
