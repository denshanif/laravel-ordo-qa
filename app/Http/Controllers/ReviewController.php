<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('value', 5)->first();

        $reviews->car;

        return view('reviews', ['reviews' => $reviews]);
    }

    public function store()
    {
        Review::insert([
            ['car_id' => 1, 'value' => 5, 'name' => 'John', 'review' => 'Great car!'],
            ['car_id' => 1, 'value' => 4, 'name' => 'Jane', 'review' => 'Good car!'],
            ['car_id' => 1, 'value' => 5, 'name' => 'Andrew', 'review' => 'Great car!'],
            ['car_id' => 5, 'value' => 3, 'name' => 'Bob', 'review' => 'Okay car!'],
            ['car_id' => 5, 'value' => 2, 'name' => 'Alice', 'review' => 'Bad car!'],
            ['car_id' => 6, 'value' => 4, 'name' => 'Charlie', 'review' => 'Good car!'],
            ['car_id' => 6, 'value' => 5, 'name' => 'David', 'review' => 'Great car!'],
            ['car_id' => 7, 'value' => 5, 'name' => 'Emily', 'review' => 'Great car!'],
            ['car_id' => 7, 'value' => 4, 'name' => 'Frank', 'review' => 'Good car!'],
        ]);

        return redirect('/reviews')->with('success', 'Data inserted successfully.');
    }
}
