<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'avatar' => 'ui-zac.jpg',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$uU40Ek8/y9dr8G6cSaQGJe7Z2nGWNHasYIV3A7uCxpPr0THk/st.S',
                'is_activated' => 1,
                'remember_token' => 'OUSFxtY2hVHQTP1TANliPyIvnkiQs6lV0g7guwCyIccCokoeRK22ARtMTVhP',
                'created_at' => '2016-01-03 10:48:36',
                'updated_at' => '2017-04-19 13:04:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'demo',
                'avatar' => '',
                'email' => 'demo@demo.com',
                'password' => '$2y$10$SSgEhKjbbQhnfBeQS7B7jeZw/nmyhr7SOI6xVnuOnpZ7dgYSKcRxi',
                'is_activated' => 1,
                'remember_token' => 'zURoFs5lDGb2UYSvUM9ZYN8vBj9hCjmrEWLpfLwuLglMkqRHmlcz0c7cQG0b',
                'created_at' => '2017-01-18 10:05:32',
                'updated_at' => '2017-03-26 17:23:50',
            ),
        ));
        
        
    }
}