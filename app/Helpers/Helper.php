<?php 

namespace App\Helpers;

use DB;

    class Helper
    {
        public static function currency($input)
        {
          $var = 'usd';
          if (isset($var))
          {
          $currency = DB::table('currencies')            
            ->where('name', '=', $var)
            ->first();
            $rate = $currency->rate;
            }
            else
            {
            $rate = 1;
        }
        $total = (double)$input * (double)$rate;
        return number_format((double)$total, 2); 
        }

        public static function label()
        {
          $var = 'usd';
          if (isset($var))
          {
            $result = "usd";
            }
            else
            {
            $result = "usd";
        }        
        return $result; 
        }
    }