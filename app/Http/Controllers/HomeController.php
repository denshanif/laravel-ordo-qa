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
        $validatedData = $request->validate([
            'angka1' => ['required', 'numeric'],
            'angka2' => ['required', 'numeric'],
        ]);

        $angka1 = $validatedData['angka1'];
        $angka2 = $validatedData['angka2'];

        return view('tambah', compact('angka1', 'angka2'));
    }
}
