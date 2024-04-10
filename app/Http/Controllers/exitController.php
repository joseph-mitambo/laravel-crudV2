<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exitController extends Controller
{
    public function exit(){
        return view("home");
    }
}
