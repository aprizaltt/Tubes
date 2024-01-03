<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $nip = $request->input('nip');
        $pic = $request->input('pic');

        $user = User::where(['nip' => $nip, 'pic' => $pic])->first();
        if ($user !== null) {
            session(['is_login' => true, 'id' => $user->id, 'nama' => $user->nama, 'profile' => $user->profile_picture, 'fakultas' => $user->fakultas, 'role' => $user->role]);
            if ($user->role === 'dosen') {
                return redirect()->route('admin');
            }

            return redirect()->route('overview');
        }

        return redirect()->route('home')->with('');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }
}
