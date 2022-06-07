<?php

namespace Database\Seeders;

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
        $data = [
            array(
                'name' => 'Breakfast',
                'description' => 'Available time 6:30AM-9PM',
                'image' => 'breakfast.png',
                'slug' => 'breakfast'
            ),
            array(
                'name' => 'Lunch',
                'description' => 'Available time 9PM-6PM',
                'image' => 'lunch.png',
                'slug' => 'lunch'
            ),
            array(
                'name' => 'Dinner',
                'description' => 'Available time 6:30AM-9PM',
                'image' => 'dinner.png',
                'slug' => 'dinner'
            )
        ];
        DB::table('categories')->insert($data);
    }
}
