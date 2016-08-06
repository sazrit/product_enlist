<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new ProductCategory();
        $category1->id = 1;
        $category1->name = 'ram';
        $category1->description="sdsdsdsdsdsdsdadasda";
        $category1->save(); 
    }
}
