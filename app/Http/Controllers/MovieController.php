<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::latest()->paginate(3);
        return view('Admin.daftarFilm', compact('movies'));
    }


    public function create()
    {
        return view('Admin.createMovie');
    }


    public function show_transaksi($movieId)
    {
        $movieFind = Movie::find($movieId);
        // $movies_with_same_title = Movie::where('namaFilm', $movieFind->namaFilm)
        //                               ->where('id', '!=', $movieId)
        //                               ->get();
        $movies = Movie::all();
        return view('transaksi1', compact('movieFind', 'movies'));
    }



    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namaFilm' => 'required',
            'genre' => 'required',
            'imageMovie' =>
            'required|image|mimes:jpeg,jpg,gif,svg|max:2048',
            'jamTayang' => 'required',
            'jamAkhir' => 'required',
            'tanggalTayang' => 'required',
            'tanggalAkhir' => 'required',
            'harga' => 'required',
            'sinopsis' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('imageMovie')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['imageMovie'] = "$profileImage";
        }

        Movie::create([
            'namaFilm' => $request->namaFilm,
            'genre' => $request->genre,
            'imageMovie' => $input['imageMovie'],
            'jamTayang' => $request->jamTayang,
            'jamAkhir' => $request->jamAkhir,
            'tanggalTayang' => $request->tanggalTayang,
            'tanggalAkhir' => $request->tanggalAkhir,
            'harga' => $request->harga,
            'sinopsis' => $request->sinopsis,
        ]);

        try {
            return redirect()->route('Admin.index');
        } catch (\Exception $e) {
            return redirect()->route('Admin.index');
        }
    }

    /**
     * edit
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('Admin.editMovie', compact('movie'));
    }

    /**
     * update
     *
     * @param mixed $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        $this->validate($request, [
            'namaFilm' => 'required',
            'genre' => 'required',
            'jamTayang' => 'required',
            'jamAkhir' => 'required',
            'tanggalTayang' => 'required',
            'tanggalAkhir' => 'required',
            'harga' => 'required',
            'sinopsis' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('imageMovie')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['imageMovie'] = "$profileImage";
        } else {
            unset($input['imageMovie']);
        }

        $movie->update($input);
        return redirect()->route('Admin.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect()->route('Admin.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
