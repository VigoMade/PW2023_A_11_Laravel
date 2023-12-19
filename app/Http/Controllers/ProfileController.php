<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function index()
     {
          $user = Auth::user();
          return view('CostumerProfile.profile', compact('user'));
     }

     public function edit($id)
     {
          $user = User::find($id);
          return view('CostumerProfile.editProfile', compact('user'));
     }

     public function update(Request $request, $id)
     {
          $movie = User::find($id);

          $this->validate($request, [
               'nama' => 'required',
               'username' => 'required',
               'tanggalLahir' => 'required',
               'email' => 'required',
               'noTelp' => 'required',
          ]);

          $input = $request->all();
          if ($image = $request->file('imgProfile')) {
               $destinationPath = 'img/';
               $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
               $image->move($destinationPath, $profileImage);
               $input['imgProfile'] = "$profileImage";
          } else {
               unset($input['imgProfile']);
          }

          $movie->update($input);
          return redirect()->route('CostumerProfile.index')
               ->with('success', 'Profile updated successfully');
     }
}
