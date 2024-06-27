<?php
return [

    'default' => env('MAIL_MAILER', 'smtp'),

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.gmail.com'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'ssl'),
            'username' => env('MAIL_USERNAME','rama420@students.amikom.ac.id'),
            'password' => env('MAIL_PASSWORD','goewfmgkrmipowiy'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        'log' => [
            'transport' => 'log',
        ],

        // Other mailers...
    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    // Other settings...
];
