<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sample(){
    	$users = User::all();

    	return view('sample-view', ['users' => $users]);
    }
    public function store(Request $request){
    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();
    	return view('sample-view', ['users' => User::all()]);
    }
}
