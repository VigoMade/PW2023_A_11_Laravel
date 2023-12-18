<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class managemenUserController extends Controller
{
    public function index()
    {
        $user = User::latest()->paginate(5);

        return view('UserControl.userControl', compact('user'));
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('UserControl.index')
            ->with('success', 'User deleted successfully');
    }
}
