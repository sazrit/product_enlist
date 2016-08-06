<?php

use Illuminate\Database\Seeder;
use App\UserInformation;

class UserInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info1 = new UserInformation();
        $info1->id = 1;
        $info1->name = 'Iftifar Taz';
        $info1->user_id = 1;
        $info1->save(); 
    }
}
 