<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Register Page"
        ];
        return view('register/index', $data);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required|min:3'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        session()->flash('success', 'Registrasi Berhasil! Silahkan Login');
        return redirect('/login');
    }
}
