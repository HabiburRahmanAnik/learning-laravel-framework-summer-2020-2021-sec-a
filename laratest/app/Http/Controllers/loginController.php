<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller {
    public function index() {
        return view( 'login' );
    }

    public function verify( Request $req ) {
        if ( $req->name == $req->password ) {
            return redirect( '/home' );
        } else {
            echo "invalid user";
        }
    }
}
