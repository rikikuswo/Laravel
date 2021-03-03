<?php

namespace App\Http\Controllers;

use App\Models\Auth as ModelsAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class Auth extends Controller
{
    public function index()
    {
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Anda belum login, silahkan login terlebih dahulu');
        } else {
            $response = Http::get('https://api.kawalcorona.com/indonesia');
            $data = $response->json();
            return view('dashboard', compact('data'));
        }
    }
    public function login()
    {
        return view('login.login');
    }
    public function loginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = ModelsAuth::where('email', $email)->first();
        if ($data) { //apakah email tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('login', TRUE);

                return redirect('/');
            } else {
                return redirect('login')->with('alert', 'Email atau Password anda salah!');
            }
        } else {
            return redirect('login')->with('alert', 'Email atau Password anda salah!');
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('login')->with('alert', 'Anda telah logout');
    }
    public function register(Request $request)
    {
        return view('login.register');
    }
    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $data =  new ModelsAuth();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success', 'Anda berhasil register');
    }
}
