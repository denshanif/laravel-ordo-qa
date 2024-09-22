<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacture;

class ManufactureController extends Controller
{
    public function index()
    {
        $manufactures = Manufacture::where('address', 'Japan')->first();

        $manufactures->car;

        return view('manufactures', ['manufactures' => $manufactures]);
    }

    public function store()
    {
        Manufacture::insert([
            ['car_id' => 2, 'name' => 'BMW', 'address' => 'Germany'],
            ['car_id' => 3, 'name' => 'Jeep', 'address' => 'USA'],
            ['car_id' => 4, 'name' => 'Toyota', 'address' => 'Japan'],
            ['car_id' => 5, 'name' => 'Nissan', 'address' => 'Japan'],
            ['car_id' => 6, 'name' => 'Mercedes', 'address' => 'Germany'],
            ['car_id' => 7, 'name' => 'Ford', 'address' => 'USA'],
            ['car_id' => 1, 'name' => 'Isuzu', 'address' => 'Japan'],
        ]);

        return redirect('/manufactures')->with('success', 'Data inserted successfully.');
    }
}
