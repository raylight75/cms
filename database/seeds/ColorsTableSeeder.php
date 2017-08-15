<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('colors')->delete();
        
        \DB::table('colors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'color_id' => 1,
                'color' => 'red',
                'web' => '#dc4343',
            ),
            1 => 
            array (
                'id' => 2,
                'color_id' => 2,
                'color' => 'blue',
                'web' => '#61acf2',
            ),
            2 => 
            array (
                'id' => 3,
                'color_id' => 3,
                'color' => 'green',
                'web' => '#63c85b',
            ),
            3 => 
            array (
                'id' => 4,
                'color_id' => 4,
                'color' => 'black',
                'web' => '#000000',
            ),
            4 => 
            array (
                'id' => 5,
                'color_id' => 5,
                'color' => 'brown',
                'web' => '#c98d4c',
            ),
            5 => 
            array (
                'id' => 6,
                'color_id' => 6,
                'color' => 'violet',
                'web' => '#b771db',
            ),
            6 => 
            array (
                'id' => 7,
                'color_id' => 7,
                'color' => 'white',
                'web' => '#d3d3d3',
            ),
        ));
        
        
    }
}