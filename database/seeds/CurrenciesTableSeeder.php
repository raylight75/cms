<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currencies')->delete();
        
        \DB::table('currencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'usd',
                'rate' => 1.0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'eur',
                'rate' => 0.88100000000000001,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'bgn',
                'rate' => 1.724,
            ),
        ));
        
        
    }
}