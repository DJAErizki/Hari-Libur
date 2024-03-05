<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function coach(){return view("coach");}
    public function welcome(){return view("welcome");}
}
