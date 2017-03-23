<?php

namespace App\Http\Controllers;

use PayPal;
use Redirect;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Ecommerce-CMS
     *
     * Copyright (C) 2014 - 2015  Tihomir Blazhev.
     *
     * LICENSE
     *
     * Ecommerce-cms is released with dual licensing, using the GPL v3 (license-gpl3.txt) and the MIT license (license-mit.txt).
     * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
     * Please see the corresponding license file for details of these licenses.
     * You are free to use, modify and distribute this software, but all copyright information must remain.
     *
     * @package     ecommerce-cms
     * @copyright   Copyright (c) 2014 through 2015, Tihomir Blazhev
     * @license     http://opensource.org/licenses/MIT  MIT License
     * @version     1.0.0
     * @author      Tihomir Blazhev <raylight75@gmail.com>
     */

    /**
     *
     * Checkout Class
     * Checkout Class for managing checkouts.
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    private $_apiContext;

    public function __construct()
    {
        $this->_apiContext = PayPal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));

        $this->_apiContext->setConfig(array(
            'mode' => 'sandbox',
            'service.EndPoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ));

    }

    public function getCheckout()
    {
        $payer = PayPal::Payer();
        $payer->setPaymentMethod('paypal');

        $item1 = PayPal::Item();
        $item1->setName('Ground Coffee 40 oz')
            ->setDescription('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice(10);

        $itemList = PayPal::ItemList();
        $itemList->addItem($item1);

        $details = PayPal::Details();
        $details->setShipping(2)
            ->setTax(0.0)
            ->setSubTotal(10);

        //Payment Amount
        $amount = PayPal::Amount();
        $amount->setCurrency("USD")
            ->setTotal(12)
            ->setDetails($details);

        $transaction = PayPal::Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setInvoiceNumber(uniqid())
            ->setDescription('What are you selling?');

        $redirectUrls = PayPal:: RedirectUrls();
        $redirectUrls->setReturnUrl(url('checkout/done'));
        $redirectUrls->setCancelUrl(url('checkout/cancel'));

        $payment = PayPal::Payment();
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setRedirectUrls($redirectUrls);
        $payment->setTransactions(array($transaction));

        $response = $payment->create($this->_apiContext);
        $redirectUrl = $response->links[1]->href;

        return Redirect::to($redirectUrl);
    }

    public function getDone(Request $request)
    {
        $id = $request->get('paymentId');
        $token = $request->get('token');
        $payer_id = $request->get('PayerID');

        $payment = PayPal::getById($id, $this->_apiContext);

        $paymentExecution = PayPal::PaymentExecution();

        $paymentExecution->setPayerId($payer_id);
        $result = $payment->execute($paymentExecution, $this->_apiContext);
        $customer = $result->getPayer()
                           ->getPayerInfo();
        dd($customer->email);
        // Clear the shopping cart, write to database, send notifications, etc.

        // Thank the user for the purchase
        return view('frontend/payment')->with('executePayment', $result);
    }

    public function getCancel()
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
        $executePayment = null;
        return view('frontend/payment')->with('executePayment', $executePayment);
    }
}