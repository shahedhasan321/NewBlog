<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ShowProfileController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function index(){
        $post=DB::table('post')->get();
        return view('home',compact('post'));
    }
}
