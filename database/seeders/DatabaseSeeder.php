<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Product::factory(10)->create();

        \App\Models\Product::create([
            'nama' => 'Sepatu',
            'harga' => 12000,
            'foto' => '/img/product/shoe.jpg',
            'diskon' => 40,
        ]);
        \App\Models\Product::create([
            'nama' => 'Tas',
            'harga' => 30000,
            'foto' => '/img/product/bag.jpg',
            'diskon' => 10,
        ]);
        \App\Models\Product::create([
            'nama' => 'Tas1',
            'harga' => 32000,
            'foto' => '/img/product/bag1.jpg',
            'diskon' => 30,
        ]);
        \App\Models\Product::create([
            'nama' => 'Kacamata',
            'harga' => 15000,
            'foto' => '/img/product/glass.jpg',
            'diskon' => 0,
        ]);
        \App\Models\Product::create([
            'nama' => 'Tas2',
            'harga' => 32000,
            'foto' => '/img/product/bag2.jpg',
            'diskon' => 0,
        ]);
    }
}
