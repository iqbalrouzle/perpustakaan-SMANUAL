<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function viewLogin(Request $request)
    {
        return view('signin');
    }

    public function showSignup(Request $request)
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | min:6'
        ]);

        if ($validator->fails()) {
            return redirect()->route('view.signup')->with('error', 'Gunakan email yang valid dan panjang password minimal 6 karakter!');
        }

        $is_email_exists = User::where('email', $request->email)->first();
        if ($is_email_exists) {
            return redirect()->route('view.signup')->with('error', 'Email sudah terdaftar!');
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->peran = 'user';

        try {
            $user->save();
            return redirect()->route('view.siswa');
        } catch (\Throwable $th) {
            return back()->withInput($request->only('email', 'remember'))->with('error', 'Gagal Register');
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'Gunakan email yang valid dan panjang password minimal 6 karakter!');
        }

        $user = User::where('email', $request->email)->first();

        if (!Hash::check($request->password, $user->password)) {
            return back()->withInput($request->only('email'))->with('error', 'Password Anda salah!');
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) && $user->peran == 'admin') {
            $request->session()->regenerate();
            return redirect()->route('view.dashboard2.admin');
        } else if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) && $user->peran == 'user') {
            $request->session()->regenerate();
            return redirect()->route('view.dashboard2.user');
        }

        return back()->withInput($request->only('email', 'remember'))->with('error', 'Anda belum terdaftar di Perpustakaan!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login')->with('success', 'Logout berhasil! Sampai jumpa di lain waktu👋😁👋');
    }

    public function dashboardAdmin(Request $request)
    {
        $user = $request->user();
        return view('admin.dashboard', compact('user'));
    }

    public function dashboardUser(Request $request)
    {
        $user = $request->user();
        return view('user.dashboard', compact('user'));
    }
}