<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'brand_id' => 1,
                'brand' => 'Gucci',
            ),
            1 => 
            array (
                'brand_id' => 2,
                'brand' => 'Dior',
            ),
            2 => 
            array (
                'brand_id' => 3,
                'brand' => 'Moschino',
            ),
            3 => 
            array (
                'brand_id' => 4,
                'brand' => 'Pepe',
            ),
            4 => 
            array (
                'brand_id' => 5,
                'brand' => 'CK',
            ),
            5 => 
            array (
                'brand_id' => 6,
                'brand' => 'DKNY',
            ),
            6 => 
            array (
                'brand_id' => 7,
                'brand' => 'Fendi',
            ),
        ));
        
        
    }
}