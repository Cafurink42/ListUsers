<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserWelcome extends Controller
{
    public function index(){
        return view ('welcome');
    }
}
