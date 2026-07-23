<?php

/*
|--------------------------------------------------------------------------
| Site Configuration
|--------------------------------------------------------------------------
| Business-specific settings for Morning Star Printing Press Co.
| All values are pulled from .env so you never need to edit code.
|
*/

return [

    'business_name' => env('SITE_BUSINESS_NAME', 'Morning Star Printing Press Co.'),
    'established'   => env('SITE_ESTABLISHED', 2015),
    'address'       => env('SITE_ADDRESS', '132 Bolton St, Davao, Davao Region 8000, Philippines'),

    'phones' => [
        env('SITE_PHONE_1', '0917 685 0444'),
        env('SITE_PHONE_2', '0933 859 8980'),
        env('SITE_PHONE_3', '(082) 284 9583'),
    ],

    'emails' => [
        env('SITE_EMAIL_1', 'mstar982007@gmail.com'),
        env('SITE_EMAIL_2', 'morningstar982007@gmail.com'),
    ],

    'facebook_url'  => env('SITE_FACEBOOK_URL',  'https://www.facebook.com/morningstarprintingpress'),
    'messenger_url' => env('SITE_MESSENGER_URL', 'https://m.me/morningstarprintingpress'),

    'hours' => [
        'weekday' => env('SITE_HOURS_WEEKDAY', 'Monday - Saturday: 8:00 AM - 5:00 PM'),
        'weekend' => env('SITE_HOURS_WEEKEND', 'Sunday: Closed'),
    ],

];
