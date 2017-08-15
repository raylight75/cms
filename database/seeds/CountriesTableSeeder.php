<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'AD',
                'name' => 'Andorra',
                'vat' => 29.0,
                'images' => 'mobile_1.jpg',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'AE',
                'name' => 'United Arab Emirates',
                'vat' => 0.0,
                'images' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'AF',
                'name' => 'Afghanistan',
                'vat' => 0.0,
                'images' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'AG',
                'name' => 'Antigua and Barbuda',
                'vat' => 0.0,
                'images' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'AI',
                'name' => 'Anguilla',
                'vat' => 0.0,
                'images' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'AL',
                'name' => 'Albania',
                'vat' => 0.0,
                'images' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'AM',
                'name' => 'Armenia',
                'vat' => 0.0,
                'images' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'AO',
                'name' => 'Angola',
                'vat' => 0.0,
                'images' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'AQ',
                'name' => 'Antarctica',
                'vat' => 0.0,
                'images' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'AR',
                'name' => 'Argentina',
                'vat' => 0.0,
                'images' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'AS',
                'name' => 'American Samoa',
                'vat' => 0.0,
                'images' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'AT',
                'name' => 'Austria',
                'vat' => 0.20000000000000001,
                'images' => '',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'AU',
                'name' => 'Australia',
                'vat' => 0.0,
                'images' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'AW',
                'name' => 'Aruba',
                'vat' => 0.0,
                'images' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'AX',
                'name' => 'Aland',
                'vat' => 0.0,
                'images' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'AZ',
                'name' => 'Azerbaijan',
                'vat' => 0.0,
                'images' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'vat' => 0.0,
                'images' => '',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'BB',
                'name' => 'Barbados',
                'vat' => 0.0,
                'images' => '',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'BD',
                'name' => 'Bangladesh',
                'vat' => 0.0,
                'images' => '',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'BE',
                'name' => 'Belgium',
                'vat' => 0.20999999999999999,
                'images' => '',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'vat' => 0.0,
                'images' => '',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'BG',
                'name' => 'Bulgaria',
                'vat' => 0.20000000000000001,
                'images' => '',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'BH',
                'name' => 'Bahrain',
                'vat' => 0.0,
                'images' => '',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'BI',
                'name' => 'Burundi',
                'vat' => 0.0,
                'images' => '',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'BJ',
                'name' => 'Benin',
                'vat' => 0.0,
                'images' => '',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 'BL',
                'name' => 'Saint Barthelemy',
                'vat' => 0.0,
                'images' => '',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 'BM',
                'name' => 'Bermuda',
                'vat' => 0.0,
                'images' => '',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 'BN',
                'name' => 'Brunei',
                'vat' => 0.0,
                'images' => '',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 'BO',
                'name' => 'Bolivia',
                'vat' => 0.0,
                'images' => '',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 'BQ',
                'name' => 'Bonaire',
                'vat' => 0.0,
                'images' => '',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 'BR',
                'name' => 'Brazil',
                'vat' => 0.0,
                'images' => '',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 'BS',
                'name' => 'Bahamas',
                'vat' => 0.0,
                'images' => '',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 'BT',
                'name' => 'Bhutan',
                'vat' => 0.0,
                'images' => '',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 'BV',
                'name' => 'Bouvet Island',
                'vat' => 0.0,
                'images' => '',
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 'BW',
                'name' => 'Botswana',
                'vat' => 0.0,
                'images' => '',
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 'BY',
                'name' => 'Belarus',
                'vat' => 0.0,
                'images' => '',
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 'BZ',
                'name' => 'Belize',
                'vat' => 0.0,
                'images' => '',
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 'CA',
                'name' => 'Canada',
                'vat' => 0.0,
                'images' => '',
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 'CC',
                'name' => 'Cocos [Keeling] Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 'CD',
                'name' => 'Democratic Republic of the Congo',
                'vat' => 0.0,
                'images' => '',
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 'CF',
                'name' => 'Central African Republic',
                'vat' => 0.0,
                'images' => '',
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 'CG',
                'name' => 'Republic of the Congo',
                'vat' => 0.0,
                'images' => '',
            ),
            42 => 
            array (
                'id' => 43,
                'code' => 'CH',
                'name' => 'Switzerland',
                'vat' => 0.0,
                'images' => '',
            ),
            43 => 
            array (
                'id' => 44,
                'code' => 'CI',
                'name' => 'Ivory Coast',
                'vat' => 0.0,
                'images' => '',
            ),
            44 => 
            array (
                'id' => 45,
                'code' => 'CK',
                'name' => 'Cook Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            45 => 
            array (
                'id' => 46,
                'code' => 'CL',
                'name' => 'Chile',
                'vat' => 0.0,
                'images' => '',
            ),
            46 => 
            array (
                'id' => 47,
                'code' => 'CM',
                'name' => 'Cameroon',
                'vat' => 0.0,
                'images' => '',
            ),
            47 => 
            array (
                'id' => 48,
                'code' => 'CN',
                'name' => 'China',
                'vat' => 0.0,
                'images' => '',
            ),
            48 => 
            array (
                'id' => 49,
                'code' => 'CO',
                'name' => 'Colombia',
                'vat' => 0.0,
                'images' => '',
            ),
            49 => 
            array (
                'id' => 50,
                'code' => 'CR',
                'name' => 'Costa Rica',
                'vat' => 0.0,
                'images' => '',
            ),
            50 => 
            array (
                'id' => 51,
                'code' => 'CU',
                'name' => 'Cuba',
                'vat' => 0.0,
                'images' => '',
            ),
            51 => 
            array (
                'id' => 52,
                'code' => 'CV',
                'name' => 'Cape Verde',
                'vat' => 0.0,
                'images' => '',
            ),
            52 => 
            array (
                'id' => 53,
                'code' => 'CW',
                'name' => 'Curacao',
                'vat' => 0.0,
                'images' => '',
            ),
            53 => 
            array (
                'id' => 54,
                'code' => 'CX',
                'name' => 'Christmas Island',
                'vat' => 0.0,
                'images' => '',
            ),
            54 => 
            array (
                'id' => 55,
                'code' => 'CY',
                'name' => 'Cyprus',
                'vat' => 0.19,
                'images' => '',
            ),
            55 => 
            array (
                'id' => 56,
                'code' => 'CZ',
                'name' => 'Czech Republic',
                'vat' => 0.20999999999999999,
                'images' => '',
            ),
            56 => 
            array (
                'id' => 57,
                'code' => 'DE',
                'name' => 'Germany',
                'vat' => 0.19,
                'images' => '',
            ),
            57 => 
            array (
                'id' => 58,
                'code' => 'DJ',
                'name' => 'Djibouti',
                'vat' => 0.0,
                'images' => '',
            ),
            58 => 
            array (
                'id' => 59,
                'code' => 'DK',
                'name' => 'Denmark',
                'vat' => 0.25,
                'images' => '',
            ),
            59 => 
            array (
                'id' => 60,
                'code' => 'DM',
                'name' => 'Dominica',
                'vat' => 0.0,
                'images' => '',
            ),
            60 => 
            array (
                'id' => 61,
                'code' => 'DO',
                'name' => 'Dominican Republic',
                'vat' => 0.0,
                'images' => '',
            ),
            61 => 
            array (
                'id' => 62,
                'code' => 'DZ',
                'name' => 'Algeria',
                'vat' => 0.0,
                'images' => '',
            ),
            62 => 
            array (
                'id' => 63,
                'code' => 'EC',
                'name' => 'Ecuador',
                'vat' => 0.0,
                'images' => '',
            ),
            63 => 
            array (
                'id' => 64,
                'code' => 'EE',
                'name' => 'Estonia',
                'vat' => 0.20000000000000001,
                'images' => '',
            ),
            64 => 
            array (
                'id' => 65,
                'code' => 'EG',
                'name' => 'Egypt',
                'vat' => 0.0,
                'images' => '',
            ),
            65 => 
            array (
                'id' => 66,
                'code' => 'EH',
                'name' => 'Western Sahara',
                'vat' => 0.0,
                'images' => '',
            ),
            66 => 
            array (
                'id' => 67,
                'code' => 'ER',
                'name' => 'Eritrea',
                'vat' => 0.0,
                'images' => '',
            ),
            67 => 
            array (
                'id' => 68,
                'code' => 'ES',
                'name' => 'Spain',
                'vat' => 0.20999999999999999,
                'images' => '',
            ),
            68 => 
            array (
                'id' => 69,
                'code' => 'ET',
                'name' => 'Ethiopia',
                'vat' => 0.0,
                'images' => '',
            ),
            69 => 
            array (
                'id' => 70,
                'code' => 'FI',
                'name' => 'Finland',
                'vat' => 0.23999999999999999,
                'images' => '',
            ),
            70 => 
            array (
                'id' => 71,
                'code' => 'FJ',
                'name' => 'Fiji',
                'vat' => 0.0,
                'images' => '',
            ),
            71 => 
            array (
                'id' => 72,
                'code' => 'FK',
                'name' => 'Falkland Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            72 => 
            array (
                'id' => 73,
                'code' => 'FM',
                'name' => 'Micronesia',
                'vat' => 0.0,
                'images' => '',
            ),
            73 => 
            array (
                'id' => 74,
                'code' => 'FO',
                'name' => 'Faroe Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            74 => 
            array (
                'id' => 75,
                'code' => 'FR',
                'name' => 'France',
                'vat' => 0.20000000000000001,
                'images' => '',
            ),
            75 => 
            array (
                'id' => 76,
                'code' => 'GA',
                'name' => 'Gabon',
                'vat' => 0.0,
                'images' => '',
            ),
            76 => 
            array (
                'id' => 77,
                'code' => 'GB',
                'name' => 'United Kingdom',
                'vat' => 0.20000000000000001,
                'images' => '',
            ),
            77 => 
            array (
                'id' => 78,
                'code' => 'GD',
                'name' => 'Grenada',
                'vat' => 0.0,
                'images' => '',
            ),
            78 => 
            array (
                'id' => 79,
                'code' => 'GE',
                'name' => 'Georgia',
                'vat' => 0.0,
                'images' => '',
            ),
            79 => 
            array (
                'id' => 80,
                'code' => 'GF',
                'name' => 'French Guiana',
                'vat' => 0.0,
                'images' => '',
            ),
            80 => 
            array (
                'id' => 81,
                'code' => 'GG',
                'name' => 'Guernsey',
                'vat' => 0.0,
                'images' => '',
            ),
            81 => 
            array (
                'id' => 82,
                'code' => 'GH',
                'name' => 'Ghana',
                'vat' => 0.0,
                'images' => '',
            ),
            82 => 
            array (
                'id' => 83,
                'code' => 'GI',
                'name' => 'Gibraltar',
                'vat' => 0.0,
                'images' => '',
            ),
            83 => 
            array (
                'id' => 84,
                'code' => 'GL',
                'name' => 'Greenland',
                'vat' => 0.0,
                'images' => '',
            ),
            84 => 
            array (
                'id' => 85,
                'code' => 'GM',
                'name' => 'Gambia',
                'vat' => 0.0,
                'images' => '',
            ),
            85 => 
            array (
                'id' => 86,
                'code' => 'GN',
                'name' => 'Guinea',
                'vat' => 0.0,
                'images' => '',
            ),
            86 => 
            array (
                'id' => 87,
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'vat' => 0.0,
                'images' => '',
            ),
            87 => 
            array (
                'id' => 88,
                'code' => 'GQ',
                'name' => 'Equatorial Guinea',
                'vat' => 0.0,
                'images' => '',
            ),
            88 => 
            array (
                'id' => 89,
                'code' => 'GR',
                'name' => 'Greece',
                'vat' => 0.23000000000000001,
                'images' => '',
            ),
            89 => 
            array (
                'id' => 90,
                'code' => 'GS',
                'name' => 'South Georgia and the South Sandwich Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            90 => 
            array (
                'id' => 91,
                'code' => 'GT',
                'name' => 'Guatemala',
                'vat' => 0.0,
                'images' => '',
            ),
            91 => 
            array (
                'id' => 92,
                'code' => 'GU',
                'name' => 'Guam',
                'vat' => 0.0,
                'images' => '',
            ),
            92 => 
            array (
                'id' => 93,
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'vat' => 0.0,
                'images' => '',
            ),
            93 => 
            array (
                'id' => 94,
                'code' => 'GY',
                'name' => 'Guyana',
                'vat' => 0.0,
                'images' => '',
            ),
            94 => 
            array (
                'id' => 95,
                'code' => 'HK',
                'name' => 'Hong Kong',
                'vat' => 0.0,
                'images' => '',
            ),
            95 => 
            array (
                'id' => 96,
                'code' => 'HM',
                'name' => 'Heard Island and McDonald Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            96 => 
            array (
                'id' => 97,
                'code' => 'HN',
                'name' => 'Honduras',
                'vat' => 0.0,
                'images' => '',
            ),
            97 => 
            array (
                'id' => 98,
                'code' => 'HR',
                'name' => 'Croatia',
                'vat' => 0.25,
                'images' => '',
            ),
            98 => 
            array (
                'id' => 99,
                'code' => 'HT',
                'name' => 'Haiti',
                'vat' => 0.0,
                'images' => '',
            ),
            99 => 
            array (
                'id' => 100,
                'code' => 'HU',
                'name' => 'Hungary',
                'vat' => 0.27000000000000002,
                'images' => '',
            ),
            100 => 
            array (
                'id' => 101,
                'code' => 'ID',
                'name' => 'Indonesia',
                'vat' => 0.0,
                'images' => '',
            ),
            101 => 
            array (
                'id' => 102,
                'code' => 'IE',
                'name' => 'Ireland',
                'vat' => 0.23000000000000001,
                'images' => '',
            ),
            102 => 
            array (
                'id' => 103,
                'code' => 'IL',
                'name' => 'Israel',
                'vat' => 0.0,
                'images' => '',
            ),
            103 => 
            array (
                'id' => 104,
                'code' => 'IM',
                'name' => 'Isle of Man',
                'vat' => 0.0,
                'images' => '',
            ),
            104 => 
            array (
                'id' => 105,
                'code' => 'IN',
                'name' => 'India',
                'vat' => 0.0,
                'images' => '',
            ),
            105 => 
            array (
                'id' => 106,
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'vat' => 0.0,
                'images' => '',
            ),
            106 => 
            array (
                'id' => 107,
                'code' => 'IQ',
                'name' => 'Iraq',
                'vat' => 0.0,
                'images' => '',
            ),
            107 => 
            array (
                'id' => 108,
                'code' => 'IR',
                'name' => 'Iran',
                'vat' => 0.0,
                'images' => '',
            ),
            108 => 
            array (
                'id' => 109,
                'code' => 'IS',
                'name' => 'Iceland',
                'vat' => 0.0,
                'images' => '',
            ),
            109 => 
            array (
                'id' => 110,
                'code' => 'IT',
                'name' => 'Italy',
                'vat' => 0.22,
                'images' => '',
            ),
            110 => 
            array (
                'id' => 111,
                'code' => 'JE',
                'name' => 'Jersey',
                'vat' => 0.0,
                'images' => '',
            ),
            111 => 
            array (
                'id' => 112,
                'code' => 'JM',
                'name' => 'Jamaica',
                'vat' => 0.0,
                'images' => '',
            ),
            112 => 
            array (
                'id' => 113,
                'code' => 'JO',
                'name' => 'Jordan',
                'vat' => 0.0,
                'images' => '',
            ),
            113 => 
            array (
                'id' => 114,
                'code' => 'JP',
                'name' => 'Japan',
                'vat' => 0.0,
                'images' => '',
            ),
            114 => 
            array (
                'id' => 115,
                'code' => 'KE',
                'name' => 'Kenya',
                'vat' => 0.0,
                'images' => '',
            ),
            115 => 
            array (
                'id' => 116,
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
                'vat' => 0.0,
                'images' => '',
            ),
            116 => 
            array (
                'id' => 117,
                'code' => 'KH',
                'name' => 'Cambodia',
                'vat' => 0.0,
                'images' => '',
            ),
            117 => 
            array (
                'id' => 118,
                'code' => 'KI',
                'name' => 'Kiribati',
                'vat' => 0.0,
                'images' => '',
            ),
            118 => 
            array (
                'id' => 119,
                'code' => 'KM',
                'name' => 'Comoros',
                'vat' => 0.0,
                'images' => '',
            ),
            119 => 
            array (
                'id' => 120,
                'code' => 'KN',
                'name' => 'Saint Kitts and Nevis',
                'vat' => 0.0,
                'images' => '',
            ),
            120 => 
            array (
                'id' => 121,
                'code' => 'KP',
                'name' => 'North Korea',
                'vat' => 0.0,
                'images' => '',
            ),
            121 => 
            array (
                'id' => 122,
                'code' => 'KR',
                'name' => 'South Korea',
                'vat' => 0.0,
                'images' => '',
            ),
            122 => 
            array (
                'id' => 123,
                'code' => 'KW',
                'name' => 'Kuwait',
                'vat' => 0.0,
                'images' => '',
            ),
            123 => 
            array (
                'id' => 124,
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            124 => 
            array (
                'id' => 125,
                'code' => 'KZ',
                'name' => 'Kazakhstan',
                'vat' => 0.0,
                'images' => '',
            ),
            125 => 
            array (
                'id' => 126,
                'code' => 'LA',
                'name' => 'Laos',
                'vat' => 0.0,
                'images' => '',
            ),
            126 => 
            array (
                'id' => 127,
                'code' => 'LB',
                'name' => 'Lebanon',
                'vat' => 0.0,
                'images' => '',
            ),
            127 => 
            array (
                'id' => 128,
                'code' => 'LC',
                'name' => 'Saint Lucia',
                'vat' => 0.0,
                'images' => '',
            ),
            128 => 
            array (
                'id' => 129,
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'vat' => 0.0,
                'images' => '',
            ),
            129 => 
            array (
                'id' => 130,
                'code' => 'LK',
                'name' => 'Sri Lanka',
                'vat' => 0.0,
                'images' => '',
            ),
            130 => 
            array (
                'id' => 131,
                'code' => 'LR',
                'name' => 'Liberia',
                'vat' => 0.0,
                'images' => '',
            ),
            131 => 
            array (
                'id' => 132,
                'code' => 'LS',
                'name' => 'Lesotho',
                'vat' => 0.0,
                'images' => '',
            ),
            132 => 
            array (
                'id' => 133,
                'code' => 'LT',
                'name' => 'Lithuania',
                'vat' => 0.20999999999999999,
                'images' => '',
            ),
            133 => 
            array (
                'id' => 134,
                'code' => 'LU',
                'name' => 'Luxembourg',
                'vat' => 0.14999999999999999,
                'images' => '',
            ),
            134 => 
            array (
                'id' => 135,
                'code' => 'LV',
                'name' => 'Latvia',
                'vat' => 0.20999999999999999,
                'images' => '',
            ),
            135 => 
            array (
                'id' => 136,
                'code' => 'LY',
                'name' => 'Libya',
                'vat' => 0.0,
                'images' => '',
            ),
            136 => 
            array (
                'id' => 137,
                'code' => 'MA',
                'name' => 'Morocco',
                'vat' => 0.0,
                'images' => '',
            ),
            137 => 
            array (
                'id' => 138,
                'code' => 'MC',
                'name' => 'Monaco',
                'vat' => 0.0,
                'images' => '',
            ),
            138 => 
            array (
                'id' => 139,
                'code' => 'MD',
                'name' => 'Moldova',
                'vat' => 0.0,
                'images' => '',
            ),
            139 => 
            array (
                'id' => 140,
                'code' => 'ME',
                'name' => 'Montenegro',
                'vat' => 0.0,
                'images' => '',
            ),
            140 => 
            array (
                'id' => 141,
                'code' => 'MF',
                'name' => 'Saint Martin',
                'vat' => 0.0,
                'images' => '',
            ),
            141 => 
            array (
                'id' => 142,
                'code' => 'MG',
                'name' => 'Madagascar',
                'vat' => 0.0,
                'images' => '',
            ),
            142 => 
            array (
                'id' => 143,
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            143 => 
            array (
                'id' => 144,
                'code' => 'MK',
                'name' => 'Macedonia',
                'vat' => 0.0,
                'images' => '',
            ),
            144 => 
            array (
                'id' => 145,
                'code' => 'ML',
                'name' => 'Mali',
                'vat' => 0.0,
                'images' => '',
            ),
            145 => 
            array (
                'id' => 146,
                'code' => 'MM',
                'name' => 'Myanmar [Burma]',
                'vat' => 0.0,
                'images' => '',
            ),
            146 => 
            array (
                'id' => 147,
                'code' => 'MN',
                'name' => 'Mongolia',
                'vat' => 0.0,
                'images' => '',
            ),
            147 => 
            array (
                'id' => 148,
                'code' => 'MO',
                'name' => 'Macao',
                'vat' => 0.0,
                'images' => '',
            ),
            148 => 
            array (
                'id' => 149,
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            149 => 
            array (
                'id' => 150,
                'code' => 'MQ',
                'name' => 'Martinique',
                'vat' => 0.0,
                'images' => '',
            ),
            150 => 
            array (
                'id' => 151,
                'code' => 'MR',
                'name' => 'Mauritania',
                'vat' => 0.0,
                'images' => '',
            ),
            151 => 
            array (
                'id' => 152,
                'code' => 'MS',
                'name' => 'Montserrat',
                'vat' => 0.0,
                'images' => '',
            ),
            152 => 
            array (
                'id' => 153,
                'code' => 'MT',
                'name' => 'Malta',
                'vat' => 0.17999999999999999,
                'images' => '',
            ),
            153 => 
            array (
                'id' => 154,
                'code' => 'MU',
                'name' => 'Mauritius',
                'vat' => 0.0,
                'images' => '',
            ),
            154 => 
            array (
                'id' => 155,
                'code' => 'MV',
                'name' => 'Maldives',
                'vat' => 0.0,
                'images' => '',
            ),
            155 => 
            array (
                'id' => 156,
                'code' => 'MW',
                'name' => 'Malawi',
                'vat' => 0.0,
                'images' => '',
            ),
            156 => 
            array (
                'id' => 157,
                'code' => 'MX',
                'name' => 'Mexico',
                'vat' => 0.0,
                'images' => '',
            ),
            157 => 
            array (
                'id' => 158,
                'code' => 'MY',
                'name' => 'Malaysia',
                'vat' => 0.0,
                'images' => '',
            ),
            158 => 
            array (
                'id' => 159,
                'code' => 'MZ',
                'name' => 'Mozambique',
                'vat' => 0.0,
                'images' => '',
            ),
            159 => 
            array (
                'id' => 160,
                'code' => 'NA',
                'name' => 'Namibia',
                'vat' => 0.0,
                'images' => '',
            ),
            160 => 
            array (
                'id' => 161,
                'code' => 'NC',
                'name' => 'New Caledonia',
                'vat' => 0.0,
                'images' => '',
            ),
            161 => 
            array (
                'id' => 162,
                'code' => 'NE',
                'name' => 'Niger',
                'vat' => 0.0,
                'images' => '',
            ),
            162 => 
            array (
                'id' => 163,
                'code' => 'NF',
                'name' => 'Norfolk Island',
                'vat' => 0.0,
                'images' => '',
            ),
            163 => 
            array (
                'id' => 164,
                'code' => 'NG',
                'name' => 'Nigeria',
                'vat' => 0.0,
                'images' => '',
            ),
            164 => 
            array (
                'id' => 165,
                'code' => 'NI',
                'name' => 'Nicaragua',
                'vat' => 0.0,
                'images' => '',
            ),
            165 => 
            array (
                'id' => 166,
                'code' => 'NL',
                'name' => 'Netherlands',
                'vat' => 0.20999999999999999,
                'images' => '',
            ),
            166 => 
            array (
                'id' => 167,
                'code' => 'NO',
                'name' => 'Norway',
                'vat' => 0.0,
                'images' => '',
            ),
            167 => 
            array (
                'id' => 168,
                'code' => 'NP',
                'name' => 'Nepal',
                'vat' => 0.0,
                'images' => '',
            ),
            168 => 
            array (
                'id' => 169,
                'code' => 'NR',
                'name' => 'Nauru',
                'vat' => 0.0,
                'images' => '',
            ),
            169 => 
            array (
                'id' => 170,
                'code' => 'NU',
                'name' => 'Niue',
                'vat' => 0.0,
                'images' => '',
            ),
            170 => 
            array (
                'id' => 171,
                'code' => 'NZ',
                'name' => 'New Zealand',
                'vat' => 0.0,
                'images' => '',
            ),
            171 => 
            array (
                'id' => 172,
                'code' => 'OM',
                'name' => 'Oman',
                'vat' => 0.0,
                'images' => '',
            ),
            172 => 
            array (
                'id' => 173,
                'code' => 'PA',
                'name' => 'Panama',
                'vat' => 0.0,
                'images' => '',
            ),
            173 => 
            array (
                'id' => 174,
                'code' => 'PE',
                'name' => 'Peru',
                'vat' => 0.0,
                'images' => '',
            ),
            174 => 
            array (
                'id' => 175,
                'code' => 'PF',
                'name' => 'French Polynesia',
                'vat' => 0.0,
                'images' => '',
            ),
            175 => 
            array (
                'id' => 176,
                'code' => 'PG',
                'name' => 'Papua New Guinea',
                'vat' => 0.0,
                'images' => '',
            ),
            176 => 
            array (
                'id' => 177,
                'code' => 'PH',
                'name' => 'Philippines',
                'vat' => 0.0,
                'images' => '',
            ),
            177 => 
            array (
                'id' => 178,
                'code' => 'PK',
                'name' => 'Pakistan',
                'vat' => 0.0,
                'images' => '',
            ),
            178 => 
            array (
                'id' => 179,
                'code' => 'PL',
                'name' => 'Poland',
                'vat' => 0.23000000000000001,
                'images' => '',
            ),
            179 => 
            array (
                'id' => 180,
                'code' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'vat' => 0.0,
                'images' => '',
            ),
            180 => 
            array (
                'id' => 181,
                'code' => 'PN',
                'name' => 'Pitcairn Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            181 => 
            array (
                'id' => 182,
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'vat' => 0.0,
                'images' => '',
            ),
            182 => 
            array (
                'id' => 183,
                'code' => 'PS',
                'name' => 'Palestine',
                'vat' => 0.0,
                'images' => '',
            ),
            183 => 
            array (
                'id' => 184,
                'code' => 'PT',
                'name' => 'Portugal',
                'vat' => 0.23000000000000001,
                'images' => '',
            ),
            184 => 
            array (
                'id' => 185,
                'code' => 'PW',
                'name' => 'Palau',
                'vat' => 0.0,
                'images' => '',
            ),
            185 => 
            array (
                'id' => 186,
                'code' => 'PY',
                'name' => 'Paraguay',
                'vat' => 0.0,
                'images' => '',
            ),
            186 => 
            array (
                'id' => 187,
                'code' => 'QA',
                'name' => 'Qatar',
                'vat' => 0.0,
                'images' => '',
            ),
            187 => 
            array (
                'id' => 188,
                'code' => 'RE',
                'name' => 'Reunion',
                'vat' => 0.0,
                'images' => '',
            ),
            188 => 
            array (
                'id' => 189,
                'code' => 'RO',
                'name' => 'Romania',
                'vat' => 0.23999999999999999,
                'images' => '',
            ),
            189 => 
            array (
                'id' => 190,
                'code' => 'RS',
                'name' => 'Serbia',
                'vat' => 0.0,
                'images' => '',
            ),
            190 => 
            array (
                'id' => 191,
                'code' => 'RU',
                'name' => 'Russia',
                'vat' => 0.0,
                'images' => '',
            ),
            191 => 
            array (
                'id' => 192,
                'code' => 'RW',
                'name' => 'Rwanda',
                'vat' => 0.0,
                'images' => '',
            ),
            192 => 
            array (
                'id' => 193,
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'vat' => 0.0,
                'images' => '',
            ),
            193 => 
            array (
                'id' => 194,
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            194 => 
            array (
                'id' => 195,
                'code' => 'SC',
                'name' => 'Seychelles',
                'vat' => 0.0,
                'images' => '',
            ),
            195 => 
            array (
                'id' => 196,
                'code' => 'SD',
                'name' => 'Sudan',
                'vat' => 0.0,
                'images' => '',
            ),
            196 => 
            array (
                'id' => 197,
                'code' => 'SE',
                'name' => 'Sweden',
                'vat' => 0.25,
                'images' => '',
            ),
            197 => 
            array (
                'id' => 198,
                'code' => 'SG',
                'name' => 'Singapore',
                'vat' => 0.0,
                'images' => '',
            ),
            198 => 
            array (
                'id' => 199,
                'code' => 'SH',
                'name' => 'Saint Helena',
                'vat' => 0.0,
                'images' => '',
            ),
            199 => 
            array (
                'id' => 200,
                'code' => 'SI',
                'name' => 'Slovenia',
                'vat' => 0.22,
                'images' => '',
            ),
            200 => 
            array (
                'id' => 201,
                'code' => 'SJ',
                'name' => 'Svalbard and Jan Mayen',
                'vat' => 0.0,
                'images' => '',
            ),
            201 => 
            array (
                'id' => 202,
                'code' => 'SK',
                'name' => 'Slovakia',
                'vat' => 0.20000000000000001,
                'images' => '',
            ),
            202 => 
            array (
                'id' => 203,
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'vat' => 0.0,
                'images' => '',
            ),
            203 => 
            array (
                'id' => 204,
                'code' => 'SM',
                'name' => 'San Marino',
                'vat' => 0.0,
                'images' => '',
            ),
            204 => 
            array (
                'id' => 205,
                'code' => 'SN',
                'name' => 'Senegal',
                'vat' => 0.0,
                'images' => '',
            ),
            205 => 
            array (
                'id' => 206,
                'code' => 'SO',
                'name' => 'Somalia',
                'vat' => 0.0,
                'images' => '',
            ),
            206 => 
            array (
                'id' => 207,
                'code' => 'SR',
                'name' => 'Suriname',
                'vat' => 0.0,
                'images' => '',
            ),
            207 => 
            array (
                'id' => 208,
                'code' => 'SS',
                'name' => 'South Sudan',
                'vat' => 0.0,
                'images' => '',
            ),
            208 => 
            array (
                'id' => 209,
                'code' => 'ST',
                'name' => 'Sao Tome and Principe',
                'vat' => 0.0,
                'images' => '',
            ),
            209 => 
            array (
                'id' => 210,
                'code' => 'SV',
                'name' => 'El Salvador',
                'vat' => 0.0,
                'images' => '',
            ),
            210 => 
            array (
                'id' => 211,
                'code' => 'SX',
                'name' => 'Sint Maarten',
                'vat' => 0.0,
                'images' => '',
            ),
            211 => 
            array (
                'id' => 212,
                'code' => 'SY',
                'name' => 'Syria',
                'vat' => 0.0,
                'images' => '',
            ),
            212 => 
            array (
                'id' => 213,
                'code' => 'SZ',
                'name' => 'Swaziland',
                'vat' => 0.0,
                'images' => '',
            ),
            213 => 
            array (
                'id' => 214,
                'code' => 'TC',
                'name' => 'Turks and Caicos Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            214 => 
            array (
                'id' => 215,
                'code' => 'TD',
                'name' => 'Chad',
                'vat' => 0.0,
                'images' => '',
            ),
            215 => 
            array (
                'id' => 216,
                'code' => 'TF',
                'name' => 'French Southern Territories',
                'vat' => 0.0,
                'images' => '',
            ),
            216 => 
            array (
                'id' => 217,
                'code' => 'TG',
                'name' => 'Togo',
                'vat' => 0.0,
                'images' => '',
            ),
            217 => 
            array (
                'id' => 218,
                'code' => 'TH',
                'name' => 'Thailand',
                'vat' => 0.0,
                'images' => '',
            ),
            218 => 
            array (
                'id' => 219,
                'code' => 'TJ',
                'name' => 'Tajikistan',
                'vat' => 0.0,
                'images' => '',
            ),
            219 => 
            array (
                'id' => 220,
                'code' => 'TK',
                'name' => 'Tokelau',
                'vat' => 0.0,
                'images' => '',
            ),
            220 => 
            array (
                'id' => 221,
                'code' => 'TL',
                'name' => 'East Timor',
                'vat' => 0.0,
                'images' => '',
            ),
            221 => 
            array (
                'id' => 222,
                'code' => 'TM',
                'name' => 'Turkmenistan',
                'vat' => 0.0,
                'images' => '',
            ),
            222 => 
            array (
                'id' => 223,
                'code' => 'TN',
                'name' => 'Tunisia',
                'vat' => 0.0,
                'images' => '',
            ),
            223 => 
            array (
                'id' => 224,
                'code' => 'TO',
                'name' => 'Tonga',
                'vat' => 0.0,
                'images' => '',
            ),
            224 => 
            array (
                'id' => 225,
                'code' => 'TR',
                'name' => 'Turkey',
                'vat' => 0.0,
                'images' => '',
            ),
            225 => 
            array (
                'id' => 226,
                'code' => 'TT',
                'name' => 'Trinidad and Tobago',
                'vat' => 0.0,
                'images' => '',
            ),
            226 => 
            array (
                'id' => 227,
                'code' => 'TV',
                'name' => 'Tuvalu',
                'vat' => 0.0,
                'images' => '',
            ),
            227 => 
            array (
                'id' => 228,
                'code' => 'TW',
                'name' => 'Taiwan',
                'vat' => 0.0,
                'images' => '',
            ),
            228 => 
            array (
                'id' => 229,
                'code' => 'TZ',
                'name' => 'Tanzania',
                'vat' => 0.0,
                'images' => '',
            ),
            229 => 
            array (
                'id' => 230,
                'code' => 'UA',
                'name' => 'Ukraine',
                'vat' => 0.0,
                'images' => '',
            ),
            230 => 
            array (
                'id' => 231,
                'code' => 'UG',
                'name' => 'Uganda',
                'vat' => 0.0,
                'images' => '',
            ),
            231 => 
            array (
                'id' => 232,
                'code' => 'UM',
                'name' => 'U.S. Minor Outlying Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            232 => 
            array (
                'id' => 233,
                'code' => 'US',
                'name' => 'United States',
                'vat' => 0.0,
                'images' => '',
            ),
            233 => 
            array (
                'id' => 234,
                'code' => 'UY',
                'name' => 'Uruguay',
                'vat' => 0.0,
                'images' => '',
            ),
            234 => 
            array (
                'id' => 235,
                'code' => 'UZ',
                'name' => 'Uzbekistan',
                'vat' => 0.0,
                'images' => '',
            ),
            235 => 
            array (
                'id' => 236,
                'code' => 'VA',
                'name' => 'Vatican City',
                'vat' => 0.0,
                'images' => '',
            ),
            236 => 
            array (
                'id' => 237,
                'code' => 'VC',
                'name' => 'Saint Vincent and the Grenadines',
                'vat' => 0.0,
                'images' => '',
            ),
            237 => 
            array (
                'id' => 238,
                'code' => 'VE',
                'name' => 'Venezuela',
                'vat' => 0.0,
                'images' => '',
            ),
            238 => 
            array (
                'id' => 239,
                'code' => 'VG',
                'name' => 'British Virgin Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            239 => 
            array (
                'id' => 240,
                'code' => 'VI',
                'name' => 'U.S. Virgin Islands',
                'vat' => 0.0,
                'images' => '',
            ),
            240 => 
            array (
                'id' => 241,
                'code' => 'VN',
                'name' => 'Vietnam',
                'vat' => 0.0,
                'images' => '',
            ),
            241 => 
            array (
                'id' => 242,
                'code' => 'VU',
                'name' => 'Vanuatu',
                'vat' => 0.0,
                'images' => '',
            ),
            242 => 
            array (
                'id' => 243,
                'code' => 'WF',
                'name' => 'Wallis and Futuna',
                'vat' => 0.0,
                'images' => '',
            ),
            243 => 
            array (
                'id' => 244,
                'code' => 'WS',
                'name' => 'Samoa',
                'vat' => 0.0,
                'images' => '',
            ),
            244 => 
            array (
                'id' => 245,
                'code' => 'XK',
                'name' => 'Kosovo',
                'vat' => 0.0,
                'images' => '',
            ),
            245 => 
            array (
                'id' => 246,
                'code' => 'YE',
                'name' => 'Yemen',
                'vat' => 0.0,
                'images' => '',
            ),
            246 => 
            array (
                'id' => 247,
                'code' => 'YT',
                'name' => 'Mayotte',
                'vat' => 0.0,
                'images' => '',
            ),
            247 => 
            array (
                'id' => 248,
                'code' => 'ZA',
                'name' => 'South Africa',
                'vat' => 0.0,
                'images' => '',
            ),
            248 => 
            array (
                'id' => 249,
                'code' => 'ZM',
                'name' => 'Zambia',
                'vat' => 0.0,
                'images' => '',
            ),
            249 => 
            array (
                'id' => 250,
                'code' => 'ZW',
                'name' => 'Zimbabwe',
                'vat' => 0.0,
                'images' => '',
            ),
        ));
        
        
    }
}