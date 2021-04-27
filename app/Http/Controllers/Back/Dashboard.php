<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class Dashboard extends Controller
{
    public function index(){
        $admin=Admin::all();
        return view('back.dashboard',compact('admin'));
    }
}
