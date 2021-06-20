<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Validator;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function verify(UserRequest $req){
       
        $result = DB::table('users')
                        ->where('username', $req->username)
                        ->where('password', $req->password)
                        ->get();

        if(count($result) > 0){
            $req->session()->put('uname', $req->username);
            //set session or cookie
            return redirect('/home');
        }else{
            
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
            //return view('login.index');
        }
        
    }

}
