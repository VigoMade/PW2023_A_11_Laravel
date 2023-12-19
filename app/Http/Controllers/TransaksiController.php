<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Transaksi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function seatBioskop_view($movieId){
        $movieFind = Movie::find($movieId);
        $user = Auth::user(); 

         return view('seatBioskop', compact('movieFind', 'user'));
    }

     public function store(Request $request)
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

        return redirect()->route('Admin.index');
    }
}
