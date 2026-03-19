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
        'base_url' => config('AUTHELIA_BASE_URL'),
        'client_id' => config('AUTHELIA_CLIENT_ID'),
        'client_secret' => config('AUTHELIA_CLIENT_SECRET'),
        'redirect' => config('AUTHELIA_REDIRECT_URI'),
    ],
];
