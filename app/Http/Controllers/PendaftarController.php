<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftarController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pendaftaran Anak'
        ];
        return view('pendaftaran/create', $data);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'ttl' => 'required',
            'namaortu' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'jnsdifabel' => 'required',
        ]);

        Pendaftar::create($validatedData);
        session()->flash('success', 'Pendaftaran Berhasil, silahkan tunggu untuk dikonfirmasi');
        return redirect('/pendaftaran/create');
    }
}
