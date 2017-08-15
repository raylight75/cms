<?php

use Illuminate\Database\Seeder;

class ShippingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shippings')->delete();
        
        \DB::table('shippings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'method' => 'United States Postal Service',
                'img' => 'standart_post.jpg',
                'rate' => 15,
            ),
            1 => 
            array (
                'id' => 2,
                'method' => 'UPS',
                'img' => 'excluseve_post.jpg',
                'rate' => 20,
            ),
            2 => 
            array (
                'id' => 3,
                'method' => 'DHL',
                'img' => 'vip_post.jpg',
                'rate' => 10,
            ),
            3 => 
            array (
                'id' => 4,
                'method' => 'FedEx',
                'img' => 'premium_post.jpg',
                'rate' => 35,
            ),
        ));
        
        
    }
}