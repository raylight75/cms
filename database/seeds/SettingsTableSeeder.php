<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'EShop eCommerce CMS',
                'keyword' => 'CMS, eCommerce, Bootstrap,Template, Theme, Responsive, Fluid, Retina',
                'description' => 'EShop eCommerce CMS',
            ),
        ));
        
        
    }
}