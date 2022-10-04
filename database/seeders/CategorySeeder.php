<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Shart',
            'is_active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'unit' => '50',
            'price' => '500'
        ]);

        Category::create([
            'name' => 'Pant',
            'is_active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'unit' => '40',
            'price' => '800'
        ]);

        Category::create([
            'name' => 'Polo Tshart',
            'is_active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'unit' => '30',
            'price' => '400'
        ]);

        Category::create([
            'name' => 'Polo Shart',
            'is_active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'unit' => '39',
            'price' => '500'
        ]);

        // Category::create([
        //     'name' => 'Women',
        //     'is_active' => true
        // ]);
    }
}
