<?php

namespace App\Repositories;

use App\Facades\Query;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request, DB, Auth;

class PaymentRepository
{

    /**
     *
     * Payments Class for shopping cart,payments,taxes.
     * Just move logic outside from Eloquent model.
     * Uses PaymentFactory.
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Check for discount code.
     * @param Request $request
     * @return bool
     */
    public static function checkDiscount(Request $request)
    {
        $codes = Query::all('Tax');
        foreach ($codes as $code) {
            if ($request->has('discount') && $request->input('discount') !== $code->code) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Prepare order and customer data for database.
     * @param Request $request
     */
    public static function createOrder(Request $request)
    {
        $cart = Cart::content();
        $customer = $request->session()->all();
        $customer['user_id'] = Auth::user()->id;
        Query::create('Customer',$customer);
        foreach ($cart as $item) {
            Query::create('Order',[
                'user_id' => Auth::user()->id,
                'order_date' => Carbon::now(),
                'product_id' => $item->id,
                'quantity' => $item->qty,
                'amount' => $item->subtotal,
                'size' => $item->options->size,
                'img' => $item->options->img,
                'color' => $item->options->color,
            ]);
        }
    }

    /**
     * Pass data to checkout view.
     * @return mixed
     */
    public static function checkoutData()
    {
        $data['countries'] = Query::all('Country');
        $data['payments'] = Query::all('Payment');
        $data['shippings'] = Query::all('Shipping');
        return $data;
    }

    /**
     * Show order information from session.
     * @param Request $request
     * @return mixed
     */
    public static function prepareShow(Request $request)
    {
        $vat = Query::where('Country','name', $request->session()->get('country'));
        $data['vat'] = $vat->vat;
        $data['payments'] = Query::find('Payment',$request->session()->get('payment'));
        $data['shippings'] = Query::find('Shipping',$request->session()->get('delivery'));
        $data['customer'] = $request->session()->all();
        return $data;
    }

    /**
     * Add a row to the cart
     * @param Request $request
     * @return array
     */
    public static function prepareStore(Request $request)
    {
        $code = Query::where('Tax', 'code',$request->input('discount'));
        isset($code) ? $discount = $code->discount : $discount = 0;
        $productPrice = $request->input('price');
        $price = ((100 - $discount) / 100) * $productPrice;
        $data = $request->except(['_token', 'discount', 'price', 'color', 'size', 'img']);
        $data['price'] = $price;
        $data['options'] = $request->except(['_token', 'id', 'name', 'qty', 'price']);
        return $data;
    }
}