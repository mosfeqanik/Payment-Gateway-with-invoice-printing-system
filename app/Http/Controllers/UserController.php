<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.login');
    }
    public function registershow(){
        return view('user.registration');
    }
    public function register(){
        $this->validate(\request(),[
            'name'  => 'required|min:4',
            'address'  => 'required|min:4',
            'email'  => 'required|min:10',
            'password'  => 'required|min:8',
        ]);
        User::create([
            'name'      => \request('name'),
            'address'      => \request('address'),
            'email'     => \request('email'),
            'password'  => Hash::make(\request('password')),
        ]);
        return redirect()->route('login.show');
    }
    public function login(Request $request){
//        echo 'hi there';
//        dd($request);
        $this->validate(\request(),[
            'email'      =>  'required',
            'password'  =>  'required'
        ]);
        if (Auth::attempt(['email'=>\request('email'),'password'=>\request('password')]));
        return redirect()->route('dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('dashboard');
    }
}
