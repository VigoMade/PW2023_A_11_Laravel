<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginAdminController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('AdminIndex');
        } else {
            return view('Admin/loginAdmin');
        }
    }

    public function actionLogin(Request $request)
    {

        $data = Admin::where('email', $request->email)->first();
        if (!$data) {
            Session::flash('error', 'Email atau Password salah');
            return redirect('loginAdmin');
        }
        if ($data->password == $request->password) {

            if ($data->active) {
                return redirect('AdminIndex');
            }
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('loginAdmin');
        }
    }



    public function actionLogout()
    {
        //buat hapus session yg aktif
        //trus balik ke form login

        Auth::logout();
        return redirect('loginAdmin');
    }
}
