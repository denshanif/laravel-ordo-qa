<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::insert([
            ['name' => 'Hyundai', 'type' => 'Sedan', 'price' => 10000, 'prod_date' => '2020-01-01'],
            ['name' => 'Kia', 'type' => 'SUV', 'price' => 40000, 'prod_date' => '2023-02-02'],
            ['name' => 'Wuling', 'type' => 'Sedan', 'price' => 20000, 'prod_date' => '2021-03-03'],
            ['name' => 'Mazda', 'type' => 'Sedan', 'price' => 30000, 'prod_date' => '2022-04-04'],
            ['name' => 'Mitsubishi', 'type' => 'Sedan', 'price' => 50000, 'prod_date' => '2020-05-05'],
        ]);
    }
}
