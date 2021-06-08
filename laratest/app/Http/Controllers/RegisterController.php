<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('registration');
    }

    public function regCheck(Request $req){
        return redirect('login');
    }
}
