<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(ProductCategoryTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(UserInformationTableSeeder::class);
         $this->call(AdminTableSeeder::class);
    }
}
