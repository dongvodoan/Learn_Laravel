<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(){
    	return view('auth.login');
    }

    public function check(Request $request) {
    	$username = $request->name;
    	$password = md5($request->password);

    	$user = DB::Table('users')->select('name', 'password')->where('name', '=', $username)->where('password', '=', $password)->get();
    	if(!empty($user)){
    		session_start();
    		$_SESSION['username']=$username;
    	return redirect (route('departments.index'));
    	}
 	else {
 		return view('auth.login');
 	}   	
    }

    public function logout() {
    	session_start();
    	session_destroy();
    	return redirect (route('departments.index'));
    }
}
