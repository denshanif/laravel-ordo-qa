<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function hello()
    {
        return 'hello world';
    }

    public function perkalian($angka)
    {
        return $angka * 2;
    }

    public function tambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        return $angka1 + $angka2;
    }
}
