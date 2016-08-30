<?php

use Illuminate\Database\Seeder;
use App\userType;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userType1 = new userType();
        $userType1->id = 0;
        $userType1->name = 'common';
        $userType1->save();

        $userType2 = new userType();
        $userType2->id = 1;
        $userType2->name = 'admin';
        $userType2->save();
    }
}
