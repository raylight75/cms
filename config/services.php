<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'paypal' => [
        'client_id' => '',
        'secret' => ''
    ],

    'google' => [
        'client_id' => '181201617551-3om9634bq8sg9g34nhn64ea68nteng52.apps.googleusercontent.com',
        'client_secret' => 'FRv6Km_YAzF9qTjjpm6Xq6KX',
        'redirect' => 'http://laravel.dev/oauth/google/callback',
    ],

    'github' => [
        'client_id' => '16904df5413529e29e81',
        'client_secret' => '049480ac5497f3ddc3e98645684fb9c366565dd9',
        'redirect' => 'http://laravel.dev/oauth/github/callback',
    ],

    'twitter' => [
        'client_id' => 'dbZlfbagX3NLoA9dTgbSkgL3I',
        'client_secret' => 'IMgdb0GwxiIOss7ADhdlwmSRYhti4upfGVEaCOWobNBgWnK5qz',
        'redirect' => 'http://laravel.dev/oauth/twitter/callback',
    ],
];
