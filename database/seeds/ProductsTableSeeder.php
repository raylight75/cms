<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'CK-Blue-Schoolboy-Blazer',
                'name' => 'CK Blue Schoolboy Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'ed60e-mpd000c.jpg',
                'b_img' => 'df7b4-mpd000t.jpg',
                'c_img' => '09a16-mpd000t_6.jpg',
                'brand_id' => 5,
                'cat_id' => 7,
                'parent_id' => 1,
                'quantity' => 8,
                'price' => 25.0,
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'Dior-Blue-Peacoat-Trench',
                'name' => 'Dior Blue Peacoat Trench',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '0c88d-mtk009a.jpg',
                'b_img' => '1d3f9-mtk009b.jpg',
                'c_img' => '604e7-mtk009t.jpg',
                'brand_id' => 2,
                'cat_id' => 3,
                'parent_id' => 1,
                'quantity' => 5,
                'price' => 15.0,
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'Fendi-Waxed-Blue-Jacket',
                'name' => 'Fendi Waxed Blue Jacket',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '51c1b-pmo000a.jpg',
                'b_img' => 'c10d9-pmo000b.jpg',
                'c_img' => 'bdb32-pmo000c.jpg',
                'brand_id' => 7,
                'cat_id' => 9,
                'parent_id' => 1,
                'quantity' => 3,
                'price' => 80.0,
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'Gucci-Red-Neck-Sweater',
                'name' => 'Gucci Red Neck Sweater',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '8d383-mtk006a.jpg',
                'b_img' => '07e30-mtk006b.jpg',
                'c_img' => '9cbb3-mtk006t.jpg',
                'brand_id' => 1,
                'cat_id' => 3,
                'parent_id' => 1,
                'quantity' => 5,
                'price' => 12.0,
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'Pepe-Jeans-Outwear-Jeans',
                'name' => 'Pepe Jeans Outwear Jeans',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif; font-size: 10px;">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</span></p>
',
                'a_img' => 'f0a95-mpd000a.jpg',
                'b_img' => '87131-mpd000b.jpg',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 8,
                'parent_id' => 1,
                'quantity' => 23,
                'price' => 19.0,
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'DKNY-Brown-Line-Jeans',
                'name' => 'DKNY Brown Line Jeans',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '94efc-mpd012a.jpg',
                'b_img' => '35a3f-mpd012b.jpg',
                'c_img' => 'aa423-mpd012t.jpg',
                'brand_id' => 6,
                'cat_id' => 6,
                'parent_id' => 1,
                'quantity' => 45,
                'price' => 7.0,
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'Moschino-Violet-Shirt ',
                'name' => 'Moschino Violet Shirt ',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'd4bfb-mtk000a.jpg',
                'b_img' => '0dfc6-mtk000b.jpg',
                'c_img' => '52d0c-mtk000t.jpg',
                'brand_id' => 3,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 67,
                'price' => 6.0,
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'Pepe-Jeans-Blue-Retro',
                'name' => 'Pepe Jeans Blue Retro',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'e11b9-mpd006a.jpg',
                'b_img' => '01bc5-mpd006b.jpg',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 6,
                'parent_id' => 1,
                'quantity' => 32,
                'price' => 37.0,
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'Gucci-Brown-Jeans',
                'name' => 'Gucci Brown Jeans',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '9e254-mpd003a.jpg',
                'b_img' => '80540-mpd003b.jpg',
                'c_img' => 'c4a7d-mpd003t.jpg',
                'brand_id' => 1,
                'cat_id' => 6,
                'parent_id' => 1,
                'quantity' => 31,
                'price' => 32.0,
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 'Dior-Brown-Mens-Shirt',
                'name' => 'Dior Brown Mens Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '543ea-mtk004a.jpg',
                'b_img' => '97d6f-mtk004t.jpg',
                'c_img' => '',
                'brand_id' => 2,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 78,
                'price' => 5.0,
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => 'Fendi-White-Jacket',
                'name' => 'Fendi White Jacket',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'c6b37-pmtk001c.jpg',
                'b_img' => '04ec4-pmtk001t.jpg',
                'c_img' => '',
                'brand_id' => 7,
                'cat_id' => 9,
                'parent_id' => 1,
                'quantity' => 1,
                'price' => 99.0,
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => 'Dior-Black-Long-Blazer',
                'name' => 'Dior Black Long Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'dd8f7-pmo001a.jpg',
                'b_img' => 'd071b-pmo001b.jpg',
                'c_img' => 'd4450-pmo001t.jpg',
                'brand_id' => 2,
                'cat_id' => 7,
                'parent_id' => 1,
                'quantity' => 3,
                'price' => 89.0,
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => 'CK-Shell-Black-Blazer',
                'name' => 'CK Shell Black Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '3a815-pmo002a.jpg',
                'b_img' => '6cb7c-pmo002b.jpg',
                'c_img' => '3e659-pmo002t.jpg',
                'brand_id' => 5,
                'cat_id' => 7,
                'parent_id' => 1,
                'quantity' => 4,
                'price' => 94.0,
            ),
            13 => 
            array (
                'id' => 14,
                'slug' => 'Fendi-Brown-Skinny-Jeans',
                'name' => 'Fendi Brown Skinny Jeans',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '56245-pmp002a.jpg',
                'b_img' => '1f543-pmp002b.jpg',
                'c_img' => '892a5-pmp002t.jpg',
                'brand_id' => 7,
                'cat_id' => 6,
                'parent_id' => 1,
                'quantity' => 42,
                'price' => 54.0,
            ),
            14 => 
            array (
                'id' => 15,
                'slug' => 'DKNY-Black-Neck-Sweater',
                'name' => 'DKNY Black Neck Sweater',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '10551-pmtk006a.jpg',
                'b_img' => '594d8-pmtk006t.jpg',
                'c_img' => '',
                'brand_id' => 6,
                'cat_id' => 3,
                'parent_id' => 1,
                'quantity' => 32,
                'price' => 23.0,
            ),
            15 => 
            array (
                'id' => 16,
                'slug' => 'Moschino-White-Hoodie',
                'name' => 'Moschino White Hoodie',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'ebd78-pmtk004a.jpg',
                'b_img' => '74d1c-pmtk004b.jpg',
                'c_img' => '405b7-pmtk004t.jpg',
                'brand_id' => 3,
                'cat_id' => 3,
                'parent_id' => 1,
                'quantity' => 34,
                'price' => 12.0,
            ),
            16 => 
            array (
                'id' => 17,
                'slug' => 'Pepe-Jeans-Stripe-Shirt',
                'name' => 'Pepe Jeans Stripe Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '57e1d-pmtk001a.jpg',
                'b_img' => '41715-pmtk001b.jpg',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 73,
                'price' => 10.0,
            ),
            17 => 
            array (
                'id' => 18,
                'slug' => 'Fendi-Blue-Neck-Shirt',
                'name' => 'Fendi Blue Neck Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'be78d-pms004a.jpg',
                'b_img' => 'ee0c7-pms004b.jpg',
                'c_img' => 'e84e4-pms004t.jpg',
                'brand_id' => 7,
                'cat_id' => 8,
                'parent_id' => 1,
                'quantity' => 18,
                'price' => 32.0,
            ),
            18 => 
            array (
                'id' => 19,
                'slug' => 'Gucci-White-Sleeve-Shirt',
                'name' => 'Gucci White Sleeve Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '04776-pms000a.jpg',
                'b_img' => 'ef015-pms000b.jpg',
                'c_img' => 'bd7a2-pms000t.jpg',
                'brand_id' => 1,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 3,
                'price' => 32.0,
            ),
            19 => 
            array (
                'id' => 20,
                'slug' => 'CK-White-Heisen-Sweater',
                'name' => 'CK White Heisen Sweater',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'b2890-pmtk000a.jpg',
                'b_img' => 'd513f-pmtk000t.jpg',
                'c_img' => '',
                'brand_id' => 5,
                'cat_id' => 3,
                'parent_id' => 1,
                'quantity' => 32,
                'price' => 23.0,
            ),
            20 => 
            array (
                'id' => 21,
                'slug' => 'DKNY-Red-Neck-Shirt',
                'name' => 'DKNY Red Neck Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'ea72e-mpd006t.jpg',
                'b_img' => '02090-pms003a.jpg',
                'c_img' => '',
                'brand_id' => 6,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 72,
                'price' => 19.0,
            ),
            21 => 
            array (
                'id' => 22,
                'slug' => 'Fendi-Navy-Front-Jacket',
                'name' => 'Fendi Navy Front Jacket',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'd52bb-pmtk005b.jpg',
                'b_img' => '93d69-pmtk005t.jpg',
                'c_img' => '',
                'brand_id' => 7,
                'cat_id' => 9,
                'parent_id' => 1,
                'quantity' => 66,
                'price' => 21.0,
            ),
            22 => 
            array (
                'id' => 23,
                'slug' => 'Moschino-Shell-Viol-Shirt',
                'name' => 'Moschino Shell Viol Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'ee72c-1.jpg',
                'b_img' => 'a35ee-1_2.jpg',
                'c_img' => '',
                'brand_id' => 3,
                'cat_id' => 8,
                'parent_id' => 1,
                'quantity' => 28,
                'price' => 9.0,
            ),
            23 => 
            array (
                'id' => 24,
                'slug' => 'Pepe-Jeans-Blue-Shirt',
                'name' => 'Pepe Jeans Blue Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '1d60f-2.jpg',
                'b_img' => '43f35-2_2.jpg',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 8,
                'parent_id' => 1,
                'quantity' => 68,
                'price' => 27.0,
            ),
            24 => 
            array (
                'id' => 25,
                'slug' => 'Moschino-White-Jacket',
                'name' => 'Moschino White Jacket',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '1ddb2-9.jpg',
                'b_img' => '88519-9_2.jpg',
                'c_img' => '',
                'brand_id' => 3,
                'cat_id' => 3,
                'parent_id' => 1,
                'quantity' => 30,
                'price' => 23.0,
            ),
            25 => 
            array (
                'id' => 26,
                'slug' => 'Gucci-Fine-Sweaters',
                'name' => 'Gucci Fine Sweaters',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '6201a-8.jpg',
                'b_img' => '646e6-8_2.jpg',
                'c_img' => '',
                'brand_id' => 1,
                'cat_id' => 3,
                'parent_id' => 1,
                'quantity' => 34,
                'price' => 16.0,
            ),
            26 => 
            array (
                'id' => 27,
                'slug' => 'Fendi-Black-Stripe-Shirt',
                'name' => 'Fendi Black Stripe Shirt',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'a_img' => '9fee1-7_2.jpg',
                'b_img' => '5a8ba-7.jpg',
                'c_img' => '',
                'brand_id' => 7,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 23,
                'price' => 19.0,
            ),
            27 => 
            array (
                'id' => 28,
                'slug' => 'CK-Blue-Nautical-Shirt',
                'name' => 'CK Blue Nautical Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '68d00-4.jpg',
                'b_img' => '093a2-4_2.jpg',
                'c_img' => '',
                'brand_id' => 5,
                'cat_id' => 6,
                'parent_id' => 1,
                'quantity' => 67,
                'price' => 37.0,
            ),
            28 => 
            array (
                'id' => 29,
                'slug' => 'Dior-White-Shirt',
                'name' => 'Dior White Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '727db-5.jpg',
                'b_img' => '36cb0-5_2.jpg',
                'c_img' => '',
                'brand_id' => 2,
                'cat_id' => 8,
                'parent_id' => 1,
                'quantity' => 21,
                'price' => 22.0,
            ),
            29 => 
            array (
                'id' => 30,
                'slug' => 'DKNY-Blue-Sleeve-Shirt ',
                'name' => 'DKNY Blue Sleeve Shirt ',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '2bf67-6.jpg',
                'b_img' => '97b6b-6_2.jpg',
                'c_img' => '',
                'brand_id' => 6,
                'cat_id' => 8,
                'parent_id' => 1,
                'quantity' => 6,
                'price' => 27.0,
            ),
            30 => 
            array (
                'id' => 31,
                'slug' => 'CK-Jeans-Mid-Wash',
                'name' => 'CK Jeans Mid Wash',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'de5e1-image1.jpg',
                'b_img' => '277fa-image2.jpg',
                'c_img' => 'b9e23-image3.jpg',
                'brand_id' => 5,
                'cat_id' => 6,
                'parent_id' => 1,
                'quantity' => 76,
                'price' => 35.0,
            ),
            31 => 
            array (
                'id' => 32,
                'slug' => 'DKNY-White-Lapell-Blazer',
                'name' => 'DKNY White Lapell Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '11f4f-image1xxl.jpg',
                'b_img' => 'ae5f0-image2xxl.jpg',
                'c_img' => '70794-image4xxl.jpg',
                'brand_id' => 6,
                'cat_id' => 7,
                'parent_id' => 1,
                'quantity' => 41,
                'price' => 56.0,
            ),
            32 => 
            array (
                'id' => 36,
                'slug' => 'Moschino-Red-Jacket',
                'name' => 'Moschino Red Jacket',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.&gt;</p>
',
                'a_img' => '481c6-m0.jpg',
                'b_img' => '5ca87-m1.jpg',
                'c_img' => 'd394f-m2.jpg',
                'brand_id' => 3,
                'cat_id' => 9,
                'parent_id' => 1,
                'quantity' => 60,
                'price' => 31.0,
            ),
            33 => 
            array (
                'id' => 37,
                'slug' => 'CK-Violet-Jacket-Arc',
                'name' => 'CK Violet Jacket Arc',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '429a3-image1xxl-3-.jpg',
                'b_img' => '48fc8-image2xxl-3-.jpg',
                'c_img' => '',
                'brand_id' => 5,
                'cat_id' => 8,
                'parent_id' => 1,
                'quantity' => 32,
                'price' => 101.0,
            ),
            34 => 
            array (
                'id' => 38,
                'slug' => 'Fendi-Blue-Jacket ',
                'name' => 'Fendi Blue Jacket ',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'edcd0-image1xxl-5-.jpg',
                'b_img' => '62db1-image2xxl-5-.jpg',
                'c_img' => '1a69c-image3xxl-4-.jpg',
                'brand_id' => 7,
                'cat_id' => 9,
                'parent_id' => 1,
                'quantity' => 41,
                'price' => 38.0,
            ),
            35 => 
            array (
                'id' => 39,
                'slug' => 'Pepe-Jeans-Violet-Blazer',
                'name' => 'Pepe Jeans Violet Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'be3aa-image11.jpg',
                'b_img' => 'ba959-image4xxl-1-.jpg',
                'c_img' => 'ccb74-image2xxl-7-.jpg',
                'brand_id' => 4,
                'cat_id' => 7,
                'parent_id' => 1,
                'quantity' => 2,
                'price' => 108.0,
            ),
            36 => 
            array (
                'id' => 40,
                'slug' => 'Pepe-Jeans-Vintage-1969',
                'name' => 'Pepe Jeans Vintage 1969',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '742e0-image1xxl-7-.jpg',
                'b_img' => 'a8337-image2xxl-8-.jpg',
                'c_img' => 'cf60e-image4xxl-2-.jpg',
                'brand_id' => 4,
                'cat_id' => 6,
                'parent_id' => 1,
                'quantity' => 55,
                'price' => 34.0,
            ),
            37 => 
            array (
                'id' => 41,
                'slug' => 'Moschino-Blue-Sweater',
                'name' => 'Moschin Blue Sweater',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '086c2-a1.jpg',
                'b_img' => '929fb-a2.jpg',
                'c_img' => 'c5e8e-a3.jpg',
                'brand_id' => 3,
                'cat_id' => 3,
                'parent_id' => 1,
                'quantity' => 11,
                'price' => 11.0,
            ),
            38 => 
            array (
                'id' => 42,
                'slug' => 'Fendi-Tuxedo-Blazer',
                'name' => 'Fendi Tuxedo Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '729d0-b1.jpg',
                'b_img' => 'dae7a-b3.jpg',
                'c_img' => 'cd9f8-b2.jpg',
                'brand_id' => 7,
                'cat_id' => 7,
                'parent_id' => 1,
                'quantity' => 1,
                'price' => 103.0,
            ),
            39 => 
            array (
                'id' => 43,
                'slug' => 'CK-Violet-Blazer',
                'name' => 'CK Violet Blazer',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '0455e-c1.jpg',
                'b_img' => '94765-c3.jpg',
                'c_img' => 'c3d77-c2.jpg',
                'brand_id' => 5,
                'cat_id' => 7,
                'parent_id' => 1,
                'quantity' => 5,
                'price' => 108.0,
            ),
            40 => 
            array (
                'id' => 44,
                'slug' => 'Dior-Black-Shirt-Stripe',
                'name' => 'Dior Black Shirt Stripe',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => '39915-v1.jpg',
                'b_img' => '9b7f8-v2.jpg',
                'c_img' => '1f9e4-v3.jpg',
                'brand_id' => 2,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 53,
                'price' => 6.0,
            ),
            41 => 
            array (
                'id' => 45,
                'slug' => 'Fendi-Red-T-Shirt',
                'name' => 'Fendi Red T-Shirt',
                'description' => '<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
',
                'a_img' => 'c2ae6-n1.jpg',
                'b_img' => 'c5a0d-n2.jpg',
                'c_img' => '08ec9-n3.jpg',
                'brand_id' => 7,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 64,
                'price' => 5.0,
            ),
            42 => 
            array (
                'id' => 46,
                'slug' => 'DKNY-Black-Jacket',
                'name' => 'DKNY Black Jacket',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
',
                'a_img' => '7039c-image1xxl-6-.jpg',
                'b_img' => 'c3329-image4xxl-3-.jpg',
                'c_img' => '',
                'brand_id' => 6,
                'cat_id' => 9,
                'parent_id' => 1,
                'quantity' => 23,
                'price' => 85.0,
            ),
            43 => 
            array (
                'id' => 47,
                'slug' => 'Dior-Blue-Women-Wrap',
                'name' => 'Dior Blue Women Wrap',
                'description' => '<p>
Nice blue stylish wrap from famous brand Dior</p>
',
                'a_img' => '3c47b-pwt001a_1.jpg',
                'b_img' => '5f9ad-pwt001b.jpg',
                'c_img' => 'd808a-pwt001t.jpg',
                'brand_id' => 5,
                'cat_id' => 10,
                'parent_id' => 2,
                'quantity' => 11,
                'price' => 89.0,
            ),
            44 => 
            array (
                'id' => 48,
                'slug' => 'CK-Nice-Women-Blue-Wrap',
                'name' => 'CK Nice Women Blue Wrap',
                'description' => '<p>
K Nice Women Blue Wrap.&nbsp;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
',
                'a_img' => '53b38-wsd013a.jpg',
                'b_img' => '9d808-wsd013b.jpg',
                'c_img' => '6a8b5-wsd013t.jpg',
                'brand_id' => 5,
                'cat_id' => 10,
                'parent_id' => 2,
                'quantity' => 5,
                'price' => 43.0,
            ),
            45 => 
            array (
                'id' => 49,
                'slug' => 'CK-Wrap-Women-Blue ',
                'name' => 'CK Wrap Women Blue ',
                'description' => '<p>
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
',
                'a_img' => 'df290-wbk003a.jpg',
                'b_img' => '18b18-wbk003b.jpg',
                'c_img' => 'be567-wbk003t.jpg',
                'brand_id' => 5,
                'cat_id' => 10,
                'parent_id' => 2,
                'quantity' => 6,
                'price' => 32.0,
            ),
            46 => 
            array (
                'id' => 50,
                'slug' => 'CK-Women-Wrap',
                'name' => 'CK Women Wrap',
                'description' => '<p>
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
',
                'a_img' => '942b2-pwd000a.jpg',
                'b_img' => '31ccc-pwd000b.jpg',
                'c_img' => '840c9-pwd000t.jpg',
                'brand_id' => 5,
                'cat_id' => 10,
                'parent_id' => 2,
                'quantity' => 23,
                'price' => 78.0,
            ),
            47 => 
            array (
                'id' => 51,
                'slug' => 'CL-Light-Blue-Wrap',
                'name' => 'CL Light Blue Wrap',
                'description' => '<p>
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
',
                'a_img' => '0bc05-pwt000a.jpg',
                'b_img' => 'e4bc3-pwt000b.jpg',
                'c_img' => 'b9cf1-pwt000t.jpg',
                'brand_id' => 5,
                'cat_id' => 10,
                'parent_id' => 2,
                'quantity' => 3,
                'price' => 39.0,
            ),
            48 => 
            array (
                'id' => 52,
                'slug' => 'CK-Wrap-Blue-Jeans',
                'name' => 'CK Wrap Blue Jeans',
                'description' => '<p>
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
',
                'a_img' => 'e8086-wpd005a.jpg',
                'b_img' => 'c5317-wpd005b.jpg',
                'c_img' => '',
                'brand_id' => 5,
                'cat_id' => 10,
                'parent_id' => 2,
                'quantity' => 45,
                'price' => 30.0,
            ),
            49 => 
            array (
                'id' => 53,
                'slug' => 'CK-Blue-Wrap-Shirt',
                'name' => 'CK Blue Wrap Shirt',
                'description' => '<p>
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
',
                'a_img' => '0c2d2-wbk012c-royal-blue.jpg',
                'b_img' => 'c6269-wbk012d-pink.jpg',
                'c_img' => '',
                'brand_id' => 5,
                'cat_id' => 10,
                'parent_id' => 2,
                'quantity' => 21,
                'price' => 56.0,
            ),
            50 => 
            array (
                'id' => 54,
                'slug' => 'Dior-White-Mini',
                'name' => 'Dior White Mini',
            'description' => '<p style="box-sizing: border-box; margin: 0px 0px 20px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">
Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</p>
',
                'a_img' => '35f37-wsd008a.jpg',
                'b_img' => 'c45b2-wsd008b.jpg',
                'c_img' => '2282b-wsd008t.jpg',
                'brand_id' => 2,
                'cat_id' => 11,
                'parent_id' => 2,
                'quantity' => 20,
                'price' => 34.0,
            ),
            51 => 
            array (
                'id' => 55,
                'slug' => 'DKNY-Black-Mini',
                'name' => 'DKNY Black Mini',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
',
                'a_img' => 'a88c7-pwd001a.jpg',
                'b_img' => 'd10c8-pwd001b.jpg',
                'c_img' => '78a4b-pwd001t.jpg',
                'brand_id' => 6,
                'cat_id' => 11,
                'parent_id' => 2,
                'quantity' => 4,
                'price' => 67.0,
            ),
            52 => 
            array (
                'id' => 56,
                'slug' => 'Gucci-White-Mini',
                'name' => 'Gucci White Mini',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.</span></p>
',
                'a_img' => 'a1fe9-pwd002a.jpg',
                'b_img' => '7e425-pwd002b.jpg',
                'c_img' => '2defc-pwd002t.jpg',
                'brand_id' => 1,
                'cat_id' => 11,
                'parent_id' => 2,
                'quantity' => 13,
                'price' => 22.0,
            ),
            53 => 
            array (
                'id' => 57,
                'slug' => 'Fendi-Brown-Mini',
                'name' => 'Fendi Brown Mini',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.</span></p>
',
                'a_img' => '27081-pwt004a.jpg',
                'b_img' => '01f42-pwt004b.jpg',
                'c_img' => '3f214-pwt004t.jpg',
                'brand_id' => 7,
                'cat_id' => 11,
                'parent_id' => 2,
                'quantity' => 19,
                'price' => 14.0,
            ),
            54 => 
            array (
                'id' => 58,
                'slug' => 'Pepe-Jeans-Black-Mini',
                'name' => 'Pepe Jeans Black Mini',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.</span></p>
',
                'a_img' => 'e93d3-pwt003a.jpg',
                'b_img' => '9002f-pwt003t.jpg',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 11,
                'parent_id' => 2,
                'quantity' => 34,
                'price' => 12.0,
            ),
            55 => 
            array (
                'id' => 59,
                'slug' => 'Moschino-Brown-Mini',
                'name' => 'Moschino Brown Mini',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.</span></p>
',
                'a_img' => '0122b-wsd000t.jpg',
                'b_img' => '9e31b-wsd000a.jpg',
                'c_img' => '64625-wsd000b.jpg',
                'brand_id' => 3,
                'cat_id' => 11,
                'parent_id' => 2,
                'quantity' => 29,
                'price' => 21.0,
            ),
            56 => 
            array (
                'id' => 62,
                'slug' => 'CK-White-Pleated-Top',
                'name' => 'CK White Pleated Top',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px; line-height: 22px;">Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral.</span></p>
',
                'a_img' => '53103-11000876_4923878_480.jpg',
                'b_img' => '6df9e-11000876_4923882_480.jpg',
                'c_img' => '25079-11000876_4923876_480.jpg',
                'brand_id' => 5,
                'cat_id' => 15,
                'parent_id' => 2,
                'quantity' => 42,
                'price' => 23.0,
            ),
            57 => 
            array (
                'id' => 63,
                'slug' => 'Dior-Brown-Tops',
                'name' => 'Dior Brown Tops',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px; line-height: 22px;">Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral.</span></p>
',
                'a_img' => '832bd-11087120_5289707_480.jpg',
                'b_img' => '554fe-11087120_5289711_480.jpg',
                'c_img' => 'd44ce-11087120_5289701_480.jpg',
                'brand_id' => 2,
                'cat_id' => 15,
                'parent_id' => 2,
                'quantity' => 32,
                'price' => 45.0,
            ),
            58 => 
            array (
                'id' => 64,
                'slug' => 'Gucci-Black-Top',
                'name' => 'Gucci Black Top',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px; line-height: 22px;">Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral</span></p>
',
                'a_img' => '2b287-image2xxl-1-.jpg',
                'b_img' => '40749-image3xxl.jpg',
                'c_img' => '78689-image4xxl-1-.jpg',
                'brand_id' => 1,
                'cat_id' => 15,
                'parent_id' => 2,
                'quantity' => 3,
                'price' => 27.0,
            ),
            59 => 
            array (
                'id' => 65,
                'slug' => 'Moschino-Red-Top',
                'name' => 'Moschino Red Top',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</span></p>
',
                'a_img' => 'bc43c-image1xxl.jpg',
                'b_img' => '967a0-image2xxl.jpg',
                'c_img' => '21951-image4xxl.jpg',
                'brand_id' => 3,
                'cat_id' => 15,
                'parent_id' => 2,
                'quantity' => 6,
                'price' => 34.0,
            ),
            60 => 
            array (
                'id' => 66,
                'slug' => 'DKNY-Black-Crop-Top',
                'name' => 'DKNY Black Crop Top',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</span></p>
',
                'a_img' => 'ee456-image1xxl-1-.jpg',
                'b_img' => '294b5-image2xxl-2-.jpg',
                'c_img' => '4a8a8-image4xxl-2-.jpg',
                'brand_id' => 6,
                'cat_id' => 15,
                'parent_id' => 2,
                'quantity' => 18,
                'price' => 20.0,
            ),
            61 => 
            array (
                'id' => 67,
                'slug' => 'Pepe-Jeans-Mini',
                'name' => 'Pepe Jeans Mini',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'a_img' => '6e71c-image1xxl-2-.jpg',
                'b_img' => '759f6-image2xxl-3-.jpg',
                'c_img' => '0a402-image4xxl-3-.jpg',
                'brand_id' => 4,
                'cat_id' => 11,
                'parent_id' => 2,
                'quantity' => 8,
                'price' => 16.0,
            ),
            62 => 
            array (
                'id' => 68,
                'slug' => 'Fendi-Red-Top',
                'name' => 'Fendi Red Top',
                'description' => 'Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.
',
                'a_img' => '547c8-image1xxl-4-.jpg',
                'b_img' => 'd3fdb-image2xxl-4-.jpg',
                'c_img' => 'ec72c-image4xxl-5-.jpg',
                'brand_id' => 7,
                'cat_id' => 15,
                'parent_id' => 2,
                'quantity' => 2,
                'price' => 12.0,
            ),
            63 => 
            array (
                'id' => 69,
                'slug' => 'CK-Graphic-Top',
                'name' => 'CK Graphic Top',
                'description' => '<p>
<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque.</span></p>',
                'a_img' => '5ded8-image1xxl-5-.jpg',
                'b_img' => '372d5-image2xxl-5-.jpg',
                'c_img' => '74840-image4xxl-6-.jpg',
                'brand_id' => 5,
                'cat_id' => 15,
                'parent_id' => 2,
                'quantity' => 8,
                'price' => 9.0,
            ),
            64 => 
            array (
                'id' => 70,
                'slug' => 'Pepe-Green-Shirt',
                'name' => 'Pepe Green Shirt',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt rhoncus malesuada. Cras consequat pharetra accumsan. Vivamus condimentum nibh sapien, eget lobortis libero feugiat ultricies. Curabitur ac libero tempus, congue magna sit amet, hendrerit tellus. Curabitur laoreet mattis maximus. In egestas ex in neque molestie, at lobortis odio luctus. Cras porta arcu vel mi commodo sodales. Mauris porttitor ante orci, id gravida lorem rhoncus nec. Praesent dapibus sapien a lacus egestas, vitae dapibus nibh dictum. Integer vel mauris diam. Mauris eleifend pulvinar augue. Mauris sollicitudin ligula id mattis condimentum. Duis ac tristique est. Integer facilisis, diam nec tempor congue, leo massa pulvinar purus, interdum laoreet nibh sem sed felis. Fusce tristique cursus urna a bibendum.',
                'a_img' => '2f92d-green.jpg',
                'b_img' => '',
                'c_img' => '',
                'brand_id' => 4,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 28,
                'price' => 7.0,
            ),
            65 => 
            array (
                'id' => 79,
                'slug' => 'Gucci-Black-Top',
                'name' => 'Gucci Black Top',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat faucibus sollicitudin. Sed nec fringilla nibh. Sed maximus finibus purus, eu volutpat arcu aliquet sit amet. Sed cursus ipsum sit amet elit sagittis, ac faucibus libero ultricies. In tempor velit vel dictum rhoncus. Morbi in ante commodo, condimentum felis in, lobortis ante. Praesent vitae magna ultricies, rutrum lorem et, iaculis nunc. Curabitur finibus neque neque, at consectetur tellus tristique ac. Praesent eu sollicitudin magna, in placerat nisi.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat faucibus sollicitudin. Sed nec fringilla nibh. Sed maximus finibus purus, eu volutpat arcu aliquet sit amet.',
                'a_img' => '6e71c-image1xxl-2-.jpg',
                'b_img' => '759f6-image2xxl-3-.jpg',
                'c_img' => '',
                'brand_id' => 1,
                'cat_id' => 15,
                'parent_id' => 2,
                'quantity' => 8,
                'price' => 11.0,
            ),
            66 => 
            array (
                'id' => 80,
                'slug' => 'DKNY-Green-Shirt',
                'name' => 'DKNY Green Shirt',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elementum nibh nulla, eget gravida libero venenatis ac. Praesent sit amet metus cursus, ultricies ligula ut, sollicitudin libero. Phasellus sagittis posuere nisl sit amet eleifend. Ut nec metus feugiat, mollis ante vel, auctor orci. Phasellus sit amet vestibulum tortor. Praesent dignissim magna ut arcu ornare, a fringilla ipsum ultrices. Integer eros dolor, volutpat eget orci viverra, suscipit rhoncus arcu. Phasellus bibendum non turpis nec cursus. Pellentesque fringilla venenatis justo, ac pretium enim malesuada sit amet.
Nulla semper metus sit amet suscipit pellentesque. Maecenas ultrices tempor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec feugiat sollicitudin nibh, vel sollicitudin nulla elementum quis.',
                'a_img' => '2bf67-6.jpg',
                'b_img' => '',
                'c_img' => '',
                'brand_id' => 6,
                'cat_id' => 5,
                'parent_id' => 1,
                'quantity' => 20,
                'price' => 25.0,
            ),
        ));
        
        
    }
}