<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'order_date' => '2015-08-16 23:31:23',
                'status' => '6',
                'product_id' => 4,
                'size' => 'XL',
                'img' => '8d383-mtk006a.jpg',
                'color' => 'red',
                'quantity' => 2,
                'amount' => 24,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'order_date' => '2015-08-16 23:32:59',
                'status' => '7',
                'product_id' => 4,
                'size' => 'XL',
                'img' => '8d383-mtk006a.jpg',
                'color' => 'red',
                'quantity' => 1,
                'amount' => 12,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'order_date' => '2015-08-16 23:40:55',
                'status' => '2',
                'product_id' => 16,
                'size' => 'XXL',
                'img' => 'ebd78-pmtk004a.jpg',
                'color' => 'white',
                'quantity' => 3,
                'amount' => 36,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'order_date' => '2015-08-16 23:52:50',
                'status' => '2',
                'product_id' => 16,
                'size' => 'XL',
                'img' => 'ebd78-pmtk004a.jpg',
                'color' => 'white',
                'quantity' => 2,
                'amount' => 24,
            ),
        ));
        
        
    }
}