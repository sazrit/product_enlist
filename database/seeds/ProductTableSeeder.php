<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = new Product();
        $product1->id = 1;
        $product1->name = 'ggg';
        $product1->user_id = 1;
        $product1->category_id=1;
        $product1->save(); 
    }
}
