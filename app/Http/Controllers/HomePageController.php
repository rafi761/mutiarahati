<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;

class HomePageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sanggar Inklusi Mutiara Hati',
            'penguruses' => Pengurus::all()
        ];
        return view('pages/homepage', $data);
    }
}
