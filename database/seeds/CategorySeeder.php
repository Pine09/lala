<?php

use Illuminate\Database\Seeder;
use App\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = new category();
        $categories->category_name='food';
        $categories->save();
    }
}
