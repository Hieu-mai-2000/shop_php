<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    	if (Auth::check())
		{
		    // The user is logged in...
		    return redirect()->to('home');				
		}

    	return view('login');
    }

    public function authenticated(Request $request){
    	$name =  $request->name;
    	$password = $request->password;
    	$remember = $request->rememberMe;
    	if (Auth::attempt(['name' => $name, 'password' => $password], $remember))
		{
		    return redirect()->to('home');
		}
		else{
			echo 'xay ra loi';
		}
    }
}
