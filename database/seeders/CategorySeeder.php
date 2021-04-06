<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        Category::create([
            'name' => 'Law'
        ]);
        Category::create([
            'name' => 'Safety'
        ]);
        Category::create([
            'name' => 'Social'
        ]);
        Category::create([
            'name' => 'Family'
        ]);
        Category::create([
            'name' => 'Food'
        ]);
        Category::create([
            'name' => 'Shops'
        ]);
        Category::create([
            'name' => 'Murderer'
        ]);
        Category::create([
            'name' => 'Thief'
        ]);
        Category::create([
            'name' => 'Rape'
        ]);

    }
}
