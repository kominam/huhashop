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
      'facebook' => [
        'client_id' => '1121957584520731',
        'client_secret' => '6558ce6e0d85724609e76007b3391145',
        'redirect' => 'http://huhashop.com/callback/facebook',
    ],
     'google' => [
        'client_id' => '1075950616387-kora4s1nldktmlc7vdhm7cu7lfev6u73.apps.googleusercontent.com',
        'client_secret' => 'CPn1bKrHqHNWuPRxXWwffKfd',
        'redirect' => 'http://huhashop.com/callback/google',
    ],
];
