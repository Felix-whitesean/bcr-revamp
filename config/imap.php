<?php

return [
    'default' => env('IMAP_DEFAULT_ACCOUNT', 'default'),
    'accounts' => [
        'default' => [
            'host'          => env('IMAP_HOST', 'mail.raifaalliance.org'),
            'port'          => env('IMAP_PORT', 993),
            'encryption'    => env('IMAP_ENCRYPTION', 'ssl'),
            'validate_cert' => true,
            'username'      => env('IMAP_USERNAME', 'vicechairperson@raifaalliance.org'),
            'password'      => env('IMAP_PASSWORD', 'V-c#Felix@123!'),
            'protocol'      => 'imap'
        ]
    ],
];
