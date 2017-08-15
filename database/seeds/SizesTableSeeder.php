<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sizes')->delete();
        
        \DB::table('sizes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'size_id' => 1,
                'size' => 'S',
            ),
            1 => 
            array (
                'id' => 2,
                'size_id' => 2,
                'size' => 'XS',
            ),
            2 => 
            array (
                'id' => 3,
                'size_id' => 3,
                'size' => 'M',
            ),
            3 => 
            array (
                'id' => 4,
                'size_id' => 4,
                'size' => 'L',
            ),
            4 => 
            array (
                'id' => 5,
                'size_id' => 5,
                'size' => 'XL',
            ),
            5 => 
            array (
                'id' => 6,
                'size_id' => 6,
                'size' => 'XXL',
            ),
            6 => 
            array (
                'id' => 7,
                'size_id' => 7,
                'size' => 'XXXL',
            ),
        ));
        
        
    }
}