<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Liquor', 'slug' => 'liquor', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gifts', 'slug' => 'gifts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Food & drinks', 'slug' => 'food-drinks', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Courier Services', 'slug' => 'courier-services', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
