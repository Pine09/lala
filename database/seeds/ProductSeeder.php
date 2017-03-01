<?php

use Illuminate\Database\Seeder;
use App\product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new product();
        $products->product_name='Potato';
        $products->category_id='1';
        $products->qty='10';
        $products->price='100000';
        $products->image='test';
        $products->description='delicious potato';
        $products->save();

        $products = new product();
        $products->product_name='French Fries';
         $products->category_id='1';
        $products->qty='10';
        $products->price='45.000';
        $products->description='super french fries';
        $products->image='test';
        $products->save();
    }
}
