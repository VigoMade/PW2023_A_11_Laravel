<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        // validate data 
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // login code 
        
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }

        return redirect('login')->withError('Login details are not valid');

    }

    public function register_view()
    {
        return view('registrasi');
    }

    public function register(Request $request){
        // validate 
        $request->validate([
            'nama'=>'required',
            'username'=>'required',
            'gender'=>'required',
            'tanggalLahir'=>'required',
            'email' => 'required|unique:users|email',
            //nanti untuk password tinggal menambahkan |confirmed jika ingin ada confirmasi password
            'password'=>'required',
            'noTelp'=>'required',
        ]);

        // save in users table 
        User::create([
            'nama'=>$request->name,
            'username'=>$request->username,
            'gender'=>$request->gender,
            'tanggalLahir'=>$request->tanggalLahir,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'noTelp'=>$request->noTelp,
        ]);

        // login user here 
        
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }

        return redirect('register')->withError('Error');

    }

    public function home(){
        return view('home');
    }

     public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('');
    }

    
}
