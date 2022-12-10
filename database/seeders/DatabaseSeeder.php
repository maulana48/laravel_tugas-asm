<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post\{ Category, Post };
use App\Models\{ Product, User };

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  Product::factory(10)->create();

        User::factory(6)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Desain',
            'slug' => 'desain'
        ]);
        Category::create([
            'name' => 'Security',
            'slug' => 'security'
        ]);
        Category::create([
            'name' => 'Networking',
            'slug' => 'networking'
        ]);
        Category::create([
            'name' => 'Random',
            'slug' => 'random'
        ]);

        Product::create([
            'nama' => 'Sepatu',
            'harga' => 12000,
            'foto' => '/img/product/shoe.jpg',
            'diskon' => 40,
        ]);
        Product::create([
            'nama' => 'Tas',
            'harga' => 30000,
            'foto' => '/img/product/bag.jpg',
            'diskon' => 10,
        ]);
        Product::create([
            'nama' => 'Tas1',
            'harga' => 32000,
            'foto' => '/img/product/bag1.jpg',
            'diskon' => 30,
        ]);
        Product::create([
            'nama' => 'Kacamata',
            'harga' => 15000,
            'foto' => '/img/product/glass.jpg',
            'diskon' => 0,
        ]);
        Product::create([
            'nama' => 'Tas2',
            'harga' => 32000,
            'foto' => '/img/product/bag2.jpg',
            'diskon' => 0,
        ]);
    }
}
