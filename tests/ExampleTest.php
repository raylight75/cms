<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    public function test() {
        /*$sqla = '(SELECT count(products.brand_id) as count
                            FROM products
                            WHERE products.brand_id = brand.brand_id
                            AND products.parent_id = "' . $parent . '") as brand_cnt';
        $sqlb = '(SELECT count(color_product.color_id) as count
                            FROM color_product
                            LEFT JOIN products
                            ON products.product_id = color_product.product_id
                            WHERE color_product.color_id = colors.color_id
                            AND products.parent_id = "' . $parent . '") as color_cnt';
        $result = DB::table('brand')
            ->select(array('*', DB::raw($sqla), DB::raw($sqlb)))
            ->leftJoin('sizes', 'brand.brand_id', '=', 'sizes.size_id')
            ->leftJoin('colors', 'brand.brand_id', '=', 'colors.color_id')
            ->get();
        $data['brand'] = array();
        $data['color'] = array();
        $data['size'] = array();
        foreach ($result as $val) {
            $data['brand'][] = $val;
            $data['color'][] = $val;
            $data['size'][] = $val;
        }
        return $data;*/
    }

    /*public static function label()
    {
        $var = session('currency');
        if (isset($var)) {
            $result = $var;
        } else {
            $result = "usd";
        }
        return $result;
    }*/
}
