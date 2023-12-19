<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Transaksi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function seatBioskop_view($movieId)
    {
        $movieFind = Movie::find($movieId);
        $user = Auth::user();

        return view('seatBioskop', compact('movieFind', 'user'));
    }

    public function store(Request $request, $movieId)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'id_movie' => 'required',
            'seat' => 'required',
            'totalSeat' => 'required',
            'totBayar' => 'required',
        ]);

        Transaksi::create([
            'id_user' => $request->id_user,
            'id_movie' => $request->id_movie,
            'seat' => $request->seat,
            'totalSeat' => $request->totalSeat,
            'totBayar' => $request->totBayar,
        ]);

        $movieFind = Movie::find($movieId);


        return redirect()->route('show_transaksi2', ['movie' => $movieId]);
    }

    public function show_transaksi2($movieId)
    {
        $movieFind = Movie::find($movieId);
        $user = Auth::user();

        $transaksi = Transaksi::where('id_user', $user->id)
            ->where('id_movie', $movieFind->id)
            ->latest('created_at')
            ->first();

        return view('transaksi2', compact('movieFind', 'user', 'transaksi'));
    }

    public function show($id)
    {
    }
}
