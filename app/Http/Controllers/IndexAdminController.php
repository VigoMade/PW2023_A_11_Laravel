<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class IndexAdminController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::paginate(5);
        $totalBayar = $transaksis->sum('totBayar');

        $totalTransaksis = Transaksi::count();
        $totalUsers = User::count();

        return view('AdminIndex.indexPageAdmin', compact('transaksis', 'totalBayar', 'totalTransaksis', 'totalUsers'));
    }
}
