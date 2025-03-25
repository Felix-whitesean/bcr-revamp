<?php

return [
    'default' => env('IMAP_DEFAULT_ACCOUNT', 'default'),
    'accounts' => [
        'default' => [
            'host'          => env('IMAP_HOST', env('IMAP_HOST')),
            'port'          => env('IMAP_PORT', 993),
            'encryption'    => env('IMAP_ENCRYPTION', 'ssl'),
            'validate_cert' => true,
            'username'      => env('IMAP_USERNAME', env('IMAP_USERNAME')),
            'password'      => env('IMAP_PASSWORD',env('IMAP_PASSWORD')),
            'protocol'      => 'imap'
        ]
    ],
];
