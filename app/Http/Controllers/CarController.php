<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $cars = DB::table('cars')->where('type', 'SUV')->get();

        return view('cars', ['cars' => $cars]);
    }
    public function store()
    {
        DB::table('cars')->insert([
            ['name' => 'BMW', 'type' => 'Sedan', 'price' => 10000, 'prod_date' => '2020-01-01'],
            ['name' => 'Jeep', 'type' => 'SUV', 'price' => 40000, 'prod_year' => '2023-02-02'],
            ['name' => 'Toyota', 'type' => 'Sedan', 'price' => 20000, 'prod_year' => '2021-03-03'],
            ['name' => 'Nissan', 'type' => 'Sedan', 'price' => 30000, 'prod_year' => '2022-04-04'],
            ['name' => 'Mercedes', 'type' => 'Sedan', 'price' => 50000, 'prod_year' => '2020-05-05'],
            ['name' => 'Ford', 'type' => 'SUV', 'price' => 60000, 'prod_year' => '2022-06-06'],
        ]);

        return redirect('/cars')->with('success', 'Data inserted successfully.');
    }
}
