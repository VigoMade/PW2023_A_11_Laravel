<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Session;

class registerAdminController extends Controller
{
    public function register()
    {
        return view('Admin/registerAdmin');
    }

    public function actionRegister(Request $request)
    {
        $str = Str::random(100);
        $admin = Admin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'verify_key' => $str,
        ]);

        $details = [
            'username' => $request->username,
            'website' => 'Atma Cinema',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str
        ];

        Mail::to($request->email)->send(new MailSend($details));
        Session::flash('message', 'Link Verifikasi telah dikirim ke email anda. Silahkan Cek email anda untuk mengaktifkan akun');
        return redirect('registerAdmin');
    }

    public function verify($verify_key)
    {
        $keyCheck = Admin::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();
        if ($keyCheck) {
            $admin = Admin
                ::where('verify_key', $verify_key)
                ->update([
                    'active' => 1,
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);

            return "Verifikasi Berhasil. Akun Anda sudah aktif.";
        } else {
            return 'Keys tidak valid';
        }
    }
}
