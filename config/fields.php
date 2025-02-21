<?php

    return [
        'FORM-TYPE'=> [
            'signin' => 'signin',
            'signup' => 'signup',
        ],
        'SIGN_UP_NAMES' => [
            'name' => 'Username',
            'email' => 'Email',
            'phone_number' => 'Phone number',
            'password' => 'Password',
            'agreement' => 'Agreement',
            'subscription' => 'Subscription',
        ],
        'SIGN_IN_NAMES' => [
            'email' => 'Email',
            'password' => 'Password',
        ],
        'FIELD_LABELS' => [
            'name' => 'Username',
            'email' => 'Email',
            'phone_number' => 'Phone number',
            'password' => 'Password',
            'agreement' => 'I have read and agree to privacy and data policies',
            'subscription' => 'Get BCR news and updates',
        ],
        'FIELD_TYPES' => [
            'name' => 'text',
            'email' => 'email',
            'phone_number' => 'tel',
            'password' => 'password',
            'agreement' => 'checkbox',
            'subscription' => 'checkbox',
        ],
        'FIELD_STATUS' => [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => '',
            'password' => 'required',
            'agreement' => 'required',
            'subscription' => '',
        ],
        'USERS' => [
            'username' => 'null',
            'email' => 'null',
            'phone_number' => '',
            'joined_at' => 'null',
            'account_status' => 'dormant',
            'verification_status' => '0',
            'authorization_token' => '',
            'agreement' => '0',
            'subscription' => '0',
        ],
    ];
?>