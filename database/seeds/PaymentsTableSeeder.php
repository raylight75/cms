<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'method' => 'Visa',
                'img' => 'visa.jpg',
            ),
            1 => 
            array (
                'id' => 2,
                'method' => 'MasterCard',
                'img' => 'master_card.jpg',
            ),
            2 => 
            array (
                'id' => 3,
                'method' => 'PayPal',
                'img' => 'paypal.jpg',
            ),
        ));
        
        
    }
}