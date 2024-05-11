<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $name = 'Evelin';
        $posts = Post::all();
        return view('welcome', compact('name'));
    }
    public function page1(){
        return view('page1');
    }
    public function page2(){
        return view('page2');
    }
}
