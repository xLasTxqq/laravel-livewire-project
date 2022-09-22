<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::insertOrIgnore([
            'name' => Str::random(16),
            'email' => 'admin@admin',
            'password' => Hash::make('admin'),
        ]);
        $categoryId=Category::latest('id')->first()->id??1;
        for($i=$categoryId;$i<$categoryId+10;$i++)
        Category::create([
            'name' => 'category'.$i,
        ]);
        $carId=Car::latest('id')->first()->id??1;
        for($i=$carId;$i<$carId+100;$i++)
        Car::create([
            'name' => 'kamaz'.$i,
            'description' => Str::random(32).' '.Str::random(32),
            'image' => 'kamaz2.png',
            'id_category' => random_int(1,$categoryId+10),
            'model'=>Str::random(16),
            'wheels'=>Str::random(8),
            'power'=>Str::random(8),
            'engine'=>Str::random(8),
            'transmission'=>Str::random(8),
            'tires'=>Str::random(8),
            'tank'=>Str::random(8),
        ]);
    }
}
