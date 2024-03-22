<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function coach(){return view("coach");}
    public function welcome(){return view("welcome");}
    public function about(){return view("about");}
    public function profnaz(){return view("profnaz");}
}
