<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'cat_id' => 1,
                'cat' => 'Men',
                'parent_id' => 0,
                'm_img' => 'f213f-breadcrumb_bg2.jpg',
                'f_img' => '',
            ),
            1 => 
            array (
                'cat_id' => 2,
                'cat' => 'Women',
                'parent_id' => 0,
                'm_img' => 'b1d40-breadcrumb_bg1.jpg',
                'f_img' => '',
            ),
            2 => 
            array (
                'cat_id' => 3,
                'cat' => 'Sweaters',
                'parent_id' => 1,
                'm_img' => '',
                'f_img' => '29012-banner24.jpg',
            ),
            3 => 
            array (
                'cat_id' => 5,
                'cat' => 'Shirts',
                'parent_id' => 1,
                'm_img' => '',
                'f_img' => '8513d-plaid-shirt-1.jpg',
            ),
            4 => 
            array (
                'cat_id' => 6,
                'cat' => 'Jeans',
                'parent_id' => 1,
                'm_img' => '',
                'f_img' => '75807-jeans.jpg',
            ),
            5 => 
            array (
                'cat_id' => 7,
                'cat' => 'Blazers',
                'parent_id' => 1,
                'm_img' => '',
                'f_img' => '416f4-banner33.jpg',
            ),
            6 => 
            array (
                'cat_id' => 8,
                'cat' => 'Outwear',
                'parent_id' => 1,
                'm_img' => '',
                'f_img' => 'a2e9f-outwear.jpg',
            ),
            7 => 
            array (
                'cat_id' => 9,
                'cat' => 'Jackets',
                'parent_id' => 1,
                'm_img' => '',
                'f_img' => 'a24f7-jacket.jpg',
            ),
            8 => 
            array (
                'cat_id' => 10,
                'cat' => 'Wrap',
                'parent_id' => 2,
                'm_img' => '',
                'f_img' => 'a7d88-banner21.jpg',
            ),
            9 => 
            array (
                'cat_id' => 11,
                'cat' => 'Mini',
                'parent_id' => 2,
                'm_img' => '',
                'f_img' => '8f375-banner06092014_1.jpg',
            ),
            10 => 
            array (
                'cat_id' => 12,
                'cat' => 'Denim',
                'parent_id' => 2,
                'm_img' => '',
                'f_img' => 'bbef6-armani-jeans-women-banner.jpg',
            ),
            11 => 
            array (
                'cat_id' => 13,
                'cat' => 'Pants',
                'parent_id' => 2,
                'm_img' => '',
                'f_img' => 'e7532-banner_reverse.jpg',
            ),
            12 => 
            array (
                'cat_id' => 14,
                'cat' => 'Casual',
                'parent_id' => 2,
                'm_img' => '',
                'f_img' => '44d33-permanent_seo_banner_women.jpg',
            ),
            13 => 
            array (
                'cat_id' => 15,
                'cat' => 'Tops',
                'parent_id' => 2,
                'm_img' => '',
                'f_img' => '86648-20150901_en_subcategorypage_women_topbanner6.jpg',
            ),
        ));
        
        
    }
}