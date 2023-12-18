<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function profile_view(){
        // Mendapatkan data user yang sedang login
        $user = Auth::user(); 
        // Mengirim data user ke view profile.blade.php
         return view('Costumer.profile', compact('user'));
    }
}
