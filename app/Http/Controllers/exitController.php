<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitorscrud;

class exitController extends Controller
{
    public function exit(){
        return view("home");
    }
}
