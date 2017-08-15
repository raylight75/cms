<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'country' => 'Bulgaria',
                'city' => 'V.Tarnovo',
                'postcode' => 5689,
                'name' => 'Ivan Ivanov',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'ul.Skopie 56',
                'phone' => '0897544213',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'country' => 'Bulgaria',
                'city' => 'Sofia',
                'postcode' => 4000,
                'name' => 'Ivan Ivanov',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'ul Mih.Georgiev 48',
                'phone' => '0898654413',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'country' => 'Bulgaria',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ivan Ivanov',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'bul Hristo Botev 92B',
                'phone' => '0898894213',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'country' => 'Bulgaria',
                'city' => 'Varna',
                'postcode' => 3000,
                'name' => 'Ivan Ivanov',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'bul P.Iavorov 9',
                'phone' => '0898894213',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'country' => 'Australia',
                'city' => 'Sidney',
                'postcode' => 5006,
                'name' => 'Ivan Ivanov',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'Novel Str 34',
                'phone' => '0877542389',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'country' => 'Germany',
                'city' => 'Berlin',
                'postcode' => 3478,
                'name' => 'Ivan Ivanov',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'ChemnitzerStr 54',
                'phone' => '0877653389',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'postcode' => 45690,
                'name' => 'Ana',
                'email' => 'raylight75@gmail.com',
                'adress' => 'Hungaroring Str 56',
                'phone' => '9745765690',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 4,
                'country' => 'Hungary',
                'city' => 'Budapest',
                'postcode' => 45690,
                'name' => 'Ana',
                'email' => 'raylight75@gmail.com',
                'adress' => 'Hungaroring Str 56',
                'phone' => '9745765690',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 4,
                'country' => 'Australia',
                'city' => 'Sidney',
                'postcode' => 5212,
                'name' => 'Ana',
                'email' => 'raylight75@gmail.com',
                'adress' => 'Hover Street 78',
                'phone' => '0898734173',
            ),
            9 => 
            array (
                'id' => 11,
                'user_id' => 4,
                'country' => 'Australia',
                'city' => 'Kanbera',
                'postcode' => 4004,
                'name' => 'Ana',
                'email' => 'tihomir@designconnected.com',
                'adress' => 'London Str 79',
                'phone' => '0898894213',
            ),
            10 => 
            array (
                'id' => 12,
                'user_id' => 4,
                'country' => 'Bulgaria',
                'city' => 'Ruse',
                'postcode' => 4556,
                'name' => 'Ana',
                'email' => 'raylight75@gmail.com',
                'adress' => 'Buzludja 45',
                'phone' => '0898894213',
            ),
            11 => 
            array (
                'id' => 17,
                'user_id' => 2,
                'country' => 'Bulgaria',
                'city' => 'Blagoevgrad',
                'postcode' => 3005,
                'name' => 'Ivan',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'Gorni Dabnik 45',
                'phone' => '0877542389',
            ),
            12 => 
            array (
                'id' => 20,
                'user_id' => 2,
                'country' => 'Bulgaria',
                'city' => 'Haskovo',
                'postcode' => 4008,
                'name' => 'Ivan',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'Georgi Georgiev 12',
                'phone' => '0898894213',
            ),
            13 => 
            array (
                'id' => 21,
                'user_id' => 4,
                'country' => 'Bulgaria',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ana',
                'email' => 'ana.blajeva@abv.bg',
                'adress' => 'skopie 45',
                'phone' => '124587',
            ),
            14 => 
            array (
                'id' => 22,
                'user_id' => 4,
                'country' => 'Austria',
                'city' => 'Viena',
                'postcode' => 4003,
                'name' => 'Ana',
                'email' => 'tomas@archimation.com',
                'adress' => 'Wierbrudden Strase 45',
                'phone' => '0567124678',
            ),
            15 => 
            array (
                'id' => 23,
                'user_id' => 4,
                'country' => 'Bulgaria',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ana',
                'email' => 'ana.blajeva@abv.bg',
                'adress' => 'skopie45',
                'phone' => '0898457832',
            ),
            16 => 
            array (
                'id' => 24,
                'user_id' => 4,
                'country' => 'Bulgaria',
                'city' => 'Sofia',
                'postcode' => 4003,
                'name' => 'Ana',
                'email' => 'ana.blajeva@abv.bg',
                'adress' => 'Wierbrudden Strase 45',
                'phone' => '0898457832',
            ),
            17 => 
            array (
                'id' => 28,
                'user_id' => 4,
                'country' => 'Belgium',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ana',
                'email' => 'ana.blajeva@abv.bg',
                'adress' => 'bul Hristo Botev 92B',
                'phone' => '0567124678',
            ),
            18 => 
            array (
                'id' => 32,
                'user_id' => 4,
                'country' => 'Andorra',
                'city' => 'Sofia',
                'postcode' => 5000,
                'name' => 'Ana',
                'email' => 'ana.blajeva@abv.bg',
                'adress' => 'skopie45',
                'phone' => '0898457832',
            ),
            19 => 
            array (
                'id' => 33,
                'user_id' => 2,
                'country' => 'Germany',
                'city' => 'Berlin',
                'postcode' => 8009,
                'name' => 'Ivan',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'Wierbrudden Strase 45',
                'phone' => '0898457832',
            ),
            20 => 
            array (
                'id' => 34,
                'user_id' => 2,
                'country' => 'Andorra',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ivan',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'bul Hristo Botev 92B',
                'phone' => '0898457832',
            ),
            21 => 
            array (
                'id' => 35,
                'user_id' => 4,
                'country' => 'Belgium',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ana',
                'email' => 'ana.blajeva@abv.bg',
                'adress' => 'bul Hristo Botev 92B',
                'phone' => '0898457832',
            ),
            22 => 
            array (
                'id' => 36,
                'user_id' => 4,
                'country' => 'Bulgaria',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ana',
                'email' => 'ana.blajeva@abv.bg',
                'adress' => 'bul Hristo Botev 92B',
                'phone' => '0898457832',
            ),
            23 => 
            array (
                'id' => 37,
                'user_id' => 2,
                'country' => 'Czech Republic',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ivan',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'bul Hristo Botev 92B',
                'phone' => '0567124678',
            ),
            24 => 
            array (
                'id' => 38,
                'user_id' => 4,
                'country' => 'Germany',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ana',
                'email' => 'ana.blajeva@abv.bg',
                'adress' => 'bul Hristo Botev 92B',
                'phone' => '0567124678',
            ),
            25 => 
            array (
                'id' => 39,
                'user_id' => 2,
                'country' => 'Czech Republic',
                'city' => 'Plovdiv',
                'postcode' => 4004,
                'name' => 'Ivan',
                'email' => 'tblajev@yahoo.com',
                'adress' => 'bul Hristo Botev 92B',
                'phone' => '0567124678',
            ),
            26 => 
            array (
                'id' => 40,
                'user_id' => 36,
                'country' => 'Bangladesh',
                'city' => 'Chittagong',
                'postcode' => 1234,
                'name' => 'demo',
                'email' => 'demo@demo.com',
                'adress' => 'kndkjga',
                'phone' => '2345678',
            ),
            27 => 
            array (
                'id' => 41,
                'user_id' => 36,
                'country' => 'Andorra',
                'city' => 'demo',
                'postcode' => 60000,
                'name' => 'demo',
                'email' => 'demo@demo.com',
                'adress' => 'demo demo ',
                'phone' => '9876543210',
            ),
            28 => 
            array (
                'id' => 42,
                'user_id' => 43,
                'country' => 'Andorra',
                'city' => 'Plovdiv',
                'postcode' => 4000,
                'name' => 'Belon Manoukian',
                'email' => 'belon@madzn.com',
                'adress' => '4 Detelin Voivoda Street',
                'phone' => '0886117519',
            ),
            29 => 
            array (
                'id' => 43,
                'user_id' => 36,
                'country' => 'Andorra',
                'city' => 'sdfsdf',
                'postcode' => 234324,
                'name' => 'demo',
                'email' => 'demo@demo.com',
                'adress' => 'sfsdf',
                'phone' => '234234',
            ),
            30 => 
            array (
                'id' => 44,
                'user_id' => 36,
                'country' => 'Albania',
                'city' => 'sadsad',
                'postcode' => 432423,
                'name' => 'demo',
                'email' => 'demo@demo.com',
                'adress' => 'street',
                'phone' => '235435',
            ),
            31 => 
            array (
                'id' => 45,
                'user_id' => 36,
                'country' => 'Afghanistan',
                'city' => '12121',
                'postcode' => 12121,
                'name' => 'demo',
                'email' => 'demo@demo.com',
                'adress' => '2121212212121',
                'phone' => '121212121',
            ),
            32 => 
            array (
                'id' => 46,
                'user_id' => 36,
                'country' => 'Andorra',
                'city' => 'caratinga',
                'postcode' => 35300108,
                'name' => 'demo',
                'email' => 'demo@demo.com',
                'adress' => 'Emilia mota,10, apto 101',
                'phone' => '+553199721985',
            ),
            33 => 
            array (
                'id' => 47,
                'user_id' => 36,
                'country' => 'France',
                'city' => 'vbcbc',
                'postcode' => 66000,
                'name' => 'demo',
                'email' => 'demo@demo.com',
                'adress' => 'ggghgh',
                'phone' => '0000000066161',
            ),
            34 => 
            array (
                'id' => 48,
                'user_id' => 36,
                'country' => 'Afghanistan',
                'city' => 'ASDF',
                'postcode' => 345345,
                'name' => 'demo',
                'email' => 'demo@demo.com',
                'adress' => 'ASDF 3',
                'phone' => '3434634634634643',
            ),
        ));
        
        
    }
}