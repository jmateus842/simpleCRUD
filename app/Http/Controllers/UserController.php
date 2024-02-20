<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; //for the unique rules in the name and email

class UserController extends Controller
{
    public function login(Request $request)
    {
        $IncomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if(auth()->attempt(['name' => $IncomingFields['loginname'], 'password' => $IncomingFields['loginpassword']])){
            $request->session()->regenerate();
        }
        return redirect('/home');
    }
    public function logout()
    {
        @auth() -> logout();
        return redirect('/home');
    }

    public function register(Request $request){
        $incomingFields = $request->validate([
            'name'=> ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'password'=> 'required'
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/home');
    }
}

