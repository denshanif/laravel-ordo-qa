<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();

        return view('features', ['features' => $features]);
    }

    public function store()
    {
        Feature::insert([
            ['name' => 'GPS'],
            ['name' => 'Bluetooth'],
            ['name' => 'Airbag'],
            ['name' => 'ABS'],
            ['name' => 'Line Keeping Assist'],
            ['name' => 'Tire Pressure Monitoring'],
        ]);

        return redirect('/features')->with('success', 'Data inserted successfully.');
    }
}
