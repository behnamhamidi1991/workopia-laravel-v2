<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
       return view('user.login');
    }


    public function create() {
        return view('user.register');
    }
}
