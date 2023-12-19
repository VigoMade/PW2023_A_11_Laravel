<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class tampilFilmController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('Costumer.dashboard', compact('movies'));
    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            $transaksis = Transaksi::where('id_user', $id)->get();
            return view('Costumer.tiketTransaksi', compact('user', 'transaksis'));
        } else {
            return redirect()->route('Costumer.dashboard')->with('error', 'User not found');
        }
    }
}
