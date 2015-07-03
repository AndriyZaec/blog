<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function contact(){
        $name='Andrew Zaec';
        return view('pages.contact')->with('name',$name);
    }
    public function about(){
        $name='Andrew Zaec';
        return view('pages.about')->with('name',$name);
    }
}
