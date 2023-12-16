<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class tampilFilmController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('Costumer.dashboard', compact('movies'));
    }
}
