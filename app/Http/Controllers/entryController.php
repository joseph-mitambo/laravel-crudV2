<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class entryController extends Controller
{
    public function create(){
        return view("home");
    }

    public function exit(){
        return view("home");
    }
}
