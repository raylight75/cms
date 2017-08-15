<?php

use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_status')->delete();
        
        \DB::table('order_status')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 'canceled',
            ),
            1 => 
            array (
                'id' => 2,
                'status' => 'complete',
            ),
            2 => 
            array (
                'id' => 3,
                'status' => 'expired',
            ),
            3 => 
            array (
                'id' => 4,
                'status' => 'failed',
            ),
            4 => 
            array (
                'id' => 5,
                'status' => 'pending',
            ),
            5 => 
            array (
                'id' => 6,
                'status' => 'refunded',
            ),
            6 => 
            array (
                'id' => 7,
                'status' => 'shipped',
            ),
            7 => 
            array (
                'id' => 8,
                'status' => 'denied',
            ),
        ));
        
        
    }
}