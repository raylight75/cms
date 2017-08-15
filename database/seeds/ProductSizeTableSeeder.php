<?php

use Illuminate\Database\Seeder;

class ProductSizeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_size')->delete();
        
        \DB::table('product_size')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 2,
                'size_id' => 3,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'size_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'size_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'size_id' => 6,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'size_id' => 7,
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 3,
                'size_id' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 3,
                'size_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 3,
                'size_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 4,
                'size_id' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 4,
                'size_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 2,
                'size_id' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 5,
                'size_id' => 6,
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 5,
                'size_id' => 7,
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 6,
                'size_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 6,
                'size_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 6,
                'size_id' => 5,
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 7,
                'size_id' => 4,
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 7,
                'size_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 7,
                'size_id' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 8,
                'size_id' => 4,
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 8,
                'size_id' => 6,
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 8,
                'size_id' => 7,
            ),
            22 => 
            array (
                'id' => 24,
                'product_id' => 10,
                'size_id' => 4,
            ),
            23 => 
            array (
                'id' => 25,
                'product_id' => 10,
                'size_id' => 1,
            ),
            24 => 
            array (
                'id' => 26,
                'product_id' => 10,
                'size_id' => 5,
            ),
            25 => 
            array (
                'id' => 27,
                'product_id' => 11,
                'size_id' => 6,
            ),
            26 => 
            array (
                'id' => 28,
                'product_id' => 12,
                'size_id' => 4,
            ),
            27 => 
            array (
                'id' => 29,
                'product_id' => 12,
                'size_id' => 6,
            ),
            28 => 
            array (
                'id' => 30,
                'product_id' => 13,
                'size_id' => 5,
            ),
            29 => 
            array (
                'id' => 31,
                'product_id' => 13,
                'size_id' => 6,
            ),
            30 => 
            array (
                'id' => 32,
                'product_id' => 15,
                'size_id' => 4,
            ),
            31 => 
            array (
                'id' => 33,
                'product_id' => 15,
                'size_id' => 2,
            ),
            32 => 
            array (
                'id' => 34,
                'product_id' => 16,
                'size_id' => 3,
            ),
            33 => 
            array (
                'id' => 35,
                'product_id' => 16,
                'size_id' => 5,
            ),
            34 => 
            array (
                'id' => 36,
                'product_id' => 16,
                'size_id' => 6,
            ),
            35 => 
            array (
                'id' => 37,
                'product_id' => 17,
                'size_id' => 4,
            ),
            36 => 
            array (
                'id' => 38,
                'product_id' => 18,
                'size_id' => 6,
            ),
            37 => 
            array (
                'id' => 39,
                'product_id' => 18,
                'size_id' => 7,
            ),
            38 => 
            array (
                'id' => 40,
                'product_id' => 19,
                'size_id' => 4,
            ),
            39 => 
            array (
                'id' => 41,
                'product_id' => 19,
                'size_id' => 3,
            ),
            40 => 
            array (
                'id' => 42,
                'product_id' => 19,
                'size_id' => 1,
            ),
            41 => 
            array (
                'id' => 43,
                'product_id' => 20,
                'size_id' => 3,
            ),
            42 => 
            array (
                'id' => 44,
                'product_id' => 20,
                'size_id' => 1,
            ),
            43 => 
            array (
                'id' => 45,
                'product_id' => 20,
                'size_id' => 6,
            ),
            44 => 
            array (
                'id' => 46,
                'product_id' => 21,
                'size_id' => 1,
            ),
            45 => 
            array (
                'id' => 47,
                'product_id' => 21,
                'size_id' => 2,
            ),
            46 => 
            array (
                'id' => 48,
                'product_id' => 22,
                'size_id' => 3,
            ),
            47 => 
            array (
                'id' => 49,
                'product_id' => 22,
                'size_id' => 2,
            ),
            48 => 
            array (
                'id' => 50,
                'product_id' => 22,
                'size_id' => 7,
            ),
            49 => 
            array (
                'id' => 51,
                'product_id' => 23,
                'size_id' => 4,
            ),
            50 => 
            array (
                'id' => 52,
                'product_id' => 23,
                'size_id' => 3,
            ),
            51 => 
            array (
                'id' => 53,
                'product_id' => 23,
                'size_id' => 2,
            ),
            52 => 
            array (
                'id' => 54,
                'product_id' => 24,
                'size_id' => 6,
            ),
            53 => 
            array (
                'id' => 55,
                'product_id' => 25,
                'size_id' => 6,
            ),
            54 => 
            array (
                'id' => 56,
                'product_id' => 26,
                'size_id' => 6,
            ),
            55 => 
            array (
                'id' => 57,
                'product_id' => 26,
                'size_id' => 7,
            ),
            56 => 
            array (
                'id' => 58,
                'product_id' => 27,
                'size_id' => 4,
            ),
            57 => 
            array (
                'id' => 59,
                'product_id' => 27,
                'size_id' => 5,
            ),
            58 => 
            array (
                'id' => 60,
                'product_id' => 27,
                'size_id' => 6,
            ),
            59 => 
            array (
                'id' => 61,
                'product_id' => 28,
                'size_id' => 4,
            ),
            60 => 
            array (
                'id' => 62,
                'product_id' => 29,
                'size_id' => 3,
            ),
            61 => 
            array (
                'id' => 63,
                'product_id' => 29,
                'size_id' => 2,
            ),
            62 => 
            array (
                'id' => 64,
                'product_id' => 30,
                'size_id' => 6,
            ),
            63 => 
            array (
                'id' => 65,
                'product_id' => 30,
                'size_id' => 7,
            ),
            64 => 
            array (
                'id' => 66,
                'product_id' => 31,
                'size_id' => 5,
            ),
            65 => 
            array (
                'id' => 67,
                'product_id' => 31,
                'size_id' => 6,
            ),
            66 => 
            array (
                'id' => 68,
                'product_id' => 32,
                'size_id' => 3,
            ),
            67 => 
            array (
                'id' => 69,
                'product_id' => 32,
                'size_id' => 5,
            ),
            68 => 
            array (
                'id' => 71,
                'product_id' => 36,
                'size_id' => 5,
            ),
            69 => 
            array (
                'id' => 72,
                'product_id' => 36,
                'size_id' => 6,
            ),
            70 => 
            array (
                'id' => 73,
                'product_id' => 36,
                'size_id' => 7,
            ),
            71 => 
            array (
                'id' => 74,
                'product_id' => 37,
                'size_id' => 4,
            ),
            72 => 
            array (
                'id' => 75,
                'product_id' => 37,
                'size_id' => 3,
            ),
            73 => 
            array (
                'id' => 76,
                'product_id' => 38,
                'size_id' => 5,
            ),
            74 => 
            array (
                'id' => 77,
                'product_id' => 38,
                'size_id' => 6,
            ),
            75 => 
            array (
                'id' => 79,
                'product_id' => 39,
                'size_id' => 5,
            ),
            76 => 
            array (
                'id' => 80,
                'product_id' => 40,
                'size_id' => 5,
            ),
            77 => 
            array (
                'id' => 81,
                'product_id' => 41,
                'size_id' => 4,
            ),
            78 => 
            array (
                'id' => 82,
                'product_id' => 41,
                'size_id' => 6,
            ),
            79 => 
            array (
                'id' => 83,
                'product_id' => 42,
                'size_id' => 6,
            ),
            80 => 
            array (
                'id' => 84,
                'product_id' => 43,
                'size_id' => 6,
            ),
            81 => 
            array (
                'id' => 85,
                'product_id' => 44,
                'size_id' => 6,
            ),
            82 => 
            array (
                'id' => 86,
                'product_id' => 44,
                'size_id' => 7,
            ),
            83 => 
            array (
                'id' => 87,
                'product_id' => 45,
                'size_id' => 4,
            ),
            84 => 
            array (
                'id' => 88,
                'product_id' => 45,
                'size_id' => 6,
            ),
            85 => 
            array (
                'id' => 89,
                'product_id' => 46,
                'size_id' => 3,
            ),
            86 => 
            array (
                'id' => 90,
                'product_id' => 46,
                'size_id' => 6,
            ),
            87 => 
            array (
                'id' => 91,
                'product_id' => 47,
                'size_id' => 3,
            ),
            88 => 
            array (
                'id' => 92,
                'product_id' => 47,
                'size_id' => 1,
            ),
            89 => 
            array (
                'id' => 93,
                'product_id' => 47,
                'size_id' => 6,
            ),
            90 => 
            array (
                'id' => 94,
                'product_id' => 48,
                'size_id' => 4,
            ),
            91 => 
            array (
                'id' => 95,
                'product_id' => 48,
                'size_id' => 3,
            ),
            92 => 
            array (
                'id' => 96,
                'product_id' => 48,
                'size_id' => 1,
            ),
            93 => 
            array (
                'id' => 97,
                'product_id' => 49,
                'size_id' => 3,
            ),
            94 => 
            array (
                'id' => 98,
                'product_id' => 49,
                'size_id' => 1,
            ),
            95 => 
            array (
                'id' => 99,
                'product_id' => 50,
                'size_id' => 1,
            ),
            96 => 
            array (
                'id' => 100,
                'product_id' => 51,
                'size_id' => 3,
            ),
            97 => 
            array (
                'id' => 101,
                'product_id' => 52,
                'size_id' => 4,
            ),
            98 => 
            array (
                'id' => 102,
                'product_id' => 52,
                'size_id' => 5,
            ),
            99 => 
            array (
                'id' => 103,
                'product_id' => 53,
                'size_id' => 3,
            ),
            100 => 
            array (
                'id' => 104,
                'product_id' => 54,
                'size_id' => 3,
            ),
            101 => 
            array (
                'id' => 105,
                'product_id' => 54,
                'size_id' => 1,
            ),
            102 => 
            array (
                'id' => 106,
                'product_id' => 54,
                'size_id' => 2,
            ),
            103 => 
            array (
                'id' => 107,
                'product_id' => 55,
                'size_id' => 5,
            ),
            104 => 
            array (
                'id' => 108,
                'product_id' => 56,
                'size_id' => 4,
            ),
            105 => 
            array (
                'id' => 109,
                'product_id' => 56,
                'size_id' => 3,
            ),
            106 => 
            array (
                'id' => 110,
                'product_id' => 56,
                'size_id' => 5,
            ),
            107 => 
            array (
                'id' => 111,
                'product_id' => 57,
                'size_id' => 3,
            ),
            108 => 
            array (
                'id' => 112,
                'product_id' => 57,
                'size_id' => 1,
            ),
            109 => 
            array (
                'id' => 113,
                'product_id' => 57,
                'size_id' => 6,
            ),
            110 => 
            array (
                'id' => 114,
                'product_id' => 58,
                'size_id' => 4,
            ),
            111 => 
            array (
                'id' => 115,
                'product_id' => 58,
                'size_id' => 3,
            ),
            112 => 
            array (
                'id' => 116,
                'product_id' => 58,
                'size_id' => 2,
            ),
            113 => 
            array (
                'id' => 117,
                'product_id' => 58,
                'size_id' => 6,
            ),
            114 => 
            array (
                'id' => 118,
                'product_id' => 59,
                'size_id' => 4,
            ),
            115 => 
            array (
                'id' => 119,
                'product_id' => 59,
                'size_id' => 3,
            ),
            116 => 
            array (
                'id' => 120,
                'product_id' => 59,
                'size_id' => 1,
            ),
            117 => 
            array (
                'id' => 121,
                'product_id' => 62,
                'size_id' => 3,
            ),
            118 => 
            array (
                'id' => 122,
                'product_id' => 62,
                'size_id' => 1,
            ),
            119 => 
            array (
                'id' => 123,
                'product_id' => 62,
                'size_id' => 5,
            ),
            120 => 
            array (
                'id' => 124,
                'product_id' => 63,
                'size_id' => 4,
            ),
            121 => 
            array (
                'id' => 125,
                'product_id' => 63,
                'size_id' => 1,
            ),
            122 => 
            array (
                'id' => 126,
                'product_id' => 63,
                'size_id' => 5,
            ),
            123 => 
            array (
                'id' => 127,
                'product_id' => 64,
                'size_id' => 4,
            ),
            124 => 
            array (
                'id' => 128,
                'product_id' => 64,
                'size_id' => 3,
            ),
            125 => 
            array (
                'id' => 129,
                'product_id' => 64,
                'size_id' => 1,
            ),
            126 => 
            array (
                'id' => 130,
                'product_id' => 64,
                'size_id' => 5,
            ),
            127 => 
            array (
                'id' => 131,
                'product_id' => 65,
                'size_id' => 4,
            ),
            128 => 
            array (
                'id' => 132,
                'product_id' => 65,
                'size_id' => 3,
            ),
            129 => 
            array (
                'id' => 133,
                'product_id' => 65,
                'size_id' => 2,
            ),
            130 => 
            array (
                'id' => 134,
                'product_id' => 66,
                'size_id' => 4,
            ),
            131 => 
            array (
                'id' => 135,
                'product_id' => 66,
                'size_id' => 3,
            ),
            132 => 
            array (
                'id' => 136,
                'product_id' => 66,
                'size_id' => 5,
            ),
            133 => 
            array (
                'id' => 140,
                'product_id' => 68,
                'size_id' => 3,
            ),
            134 => 
            array (
                'id' => 141,
                'product_id' => 68,
                'size_id' => 5,
            ),
            135 => 
            array (
                'id' => 142,
                'product_id' => 68,
                'size_id' => 2,
            ),
            136 => 
            array (
                'id' => 145,
                'product_id' => 70,
                'size_id' => 1,
            ),
            137 => 
            array (
                'id' => 146,
                'product_id' => 70,
                'size_id' => 5,
            ),
            138 => 
            array (
                'id' => 147,
                'product_id' => 70,
                'size_id' => 7,
            ),
            139 => 
            array (
                'id' => 161,
                'product_id' => 9,
                'size_id' => 4,
            ),
            140 => 
            array (
                'id' => 162,
                'product_id' => 9,
                'size_id' => 6,
            ),
            141 => 
            array (
                'id' => 163,
                'product_id' => 9,
                'size_id' => 7,
            ),
            142 => 
            array (
                'id' => 174,
                'product_id' => 80,
                'size_id' => 1,
            ),
            143 => 
            array (
                'id' => 175,
                'product_id' => 80,
                'size_id' => 4,
            ),
            144 => 
            array (
                'id' => 176,
                'product_id' => 80,
                'size_id' => 7,
            ),
            145 => 
            array (
                'id' => 177,
                'product_id' => 69,
                'size_id' => 3,
            ),
            146 => 
            array (
                'id' => 178,
                'product_id' => 69,
                'size_id' => 5,
            ),
            147 => 
            array (
                'id' => 179,
                'product_id' => 69,
                'size_id' => 6,
            ),
            148 => 
            array (
                'id' => 180,
                'product_id' => 67,
                'size_id' => 4,
            ),
            149 => 
            array (
                'id' => 181,
                'product_id' => 67,
                'size_id' => 1,
            ),
            150 => 
            array (
                'id' => 182,
                'product_id' => 67,
                'size_id' => 2,
            ),
            151 => 
            array (
                'id' => 189,
                'product_id' => 79,
                'size_id' => 1,
            ),
            152 => 
            array (
                'id' => 190,
                'product_id' => 79,
                'size_id' => 2,
            ),
        ));
        
        
    }
}