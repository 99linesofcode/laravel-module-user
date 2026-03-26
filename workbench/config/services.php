<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'authelia' => [
        'base_url' => env('AUTHELIA_BASE_URL'),
        'client_id' => env('AUTHELIA_CLIENT_ID'),
        'client_secret' => env('AUTHELIA_CLIENT_SECRET'),
        'redirect' => env('AUTHELIA_REDIRECT_URI'),
    ],
];
