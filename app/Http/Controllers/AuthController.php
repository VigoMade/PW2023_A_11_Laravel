<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // validate data 
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        return view('Costumer.landingPage');
    }

    public function register_view()
    {
        return view('registrasi');
    }

    public function register(Request $request)
    {
        // validate 
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'gender' => 'required',
            'tanggalLahir' => 'required',
            'email' => 'required|unique:users|email',
            //nanti untuk password tinggal menambahkan |confirmed jika ingin ada confirmasi password
            'password' => 'required',
            'noTelp' => 'required',
        ]);

        // save in users table 
        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'gender' => $request->gender,
            'tanggalLahir' => $request->tanggalLahir,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'noTelp' => $request->noTelp,
        ]);

        return Redirect::to('login');
    }
    // public function home(){
    //     return view('homePage');
    // }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('');
    }
}
