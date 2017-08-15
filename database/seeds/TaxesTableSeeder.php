<?php

use Illuminate\Database\Seeder;

class TaxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taxes')->delete();
        
        \DB::table('taxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '20%',
                'code' => 'TAB4680',
                'discount' => '20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'VAT',
                'code' => 'VAT',
                'discount' => '10',
            ),
        ));
        
        
    }
}