<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'user_id' => 1,
                'created_at' => '2017-04-19 12:27:04',
                'updated_at' => '2017-04-19 12:27:04',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'user_id' => 2,
                'created_at' => '2017-04-19 12:28:04',
                'updated_at' => '2017-04-19 12:28:04',
            ),
        ));
        
        
    }
}