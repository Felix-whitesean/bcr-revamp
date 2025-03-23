<?php

    return [
        'FORM-TYPE'=> [
            'signin' => 'signin',
            'signup' => 'signup',
        ],
        'SIGN_UP_NAMES' => [
            'username' => 'username',
            'email' => 'email',
            'phone_number' => 'phone_number',
            'password' => 'password',
            'password_confirmation' => 'password_confirmation',
            'agreement' => 'agreement',
            'subscription' => 'subscription',
        ],
        'SIGN_IN_NAMES' => [
            'email' => 'email',
            'password' => 'password',
        ],
        'FIELD_LABELS' => [
            'username' => 'Username',
            'email' => 'Email',
            'phone_number' => 'Phone number',
            'password' => 'Password',
            'password_confirmation' => 'Confirm Password',
            'agreement' => 'I have read and agree to privacy and data policies',
            'subscription' => 'Get BCR news and updates',
        ],
        'FIELD_TYPES' => [
            'username' => 'text',
            'email' => 'email',
            'phone_number' => 'tel',
            'password' => 'password',
            'password_confirmation' => 'password',
            'agreement' => 'checkbox',
            'subscription' => 'checkbox',
        ],
        'FIELD_STATUS' => [
            'username' => 'required',
            'email' => 'required',
            'phone_number' => '',
            'password' => 'required',
            'password_confirmation' => 'required',
            'agreement' => 'required',
            'subscription' => '',
        ],
        'VERIFICATION_CODE_ID' => [
            'input1' => 'input1',
            'input2' => 'input2',
            'input3' => 'input3',
            'input4' => 'input4',
        ],
        'VERIFICATION_CODE_TYPE' => [
            'input1' => 'number',
            'input2' => 'number',
            'input3' => 'number',
            'input4' => 'number',
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
            'account_status' => '',
        ],
        'ACCOUNT' => [
            'owner' => '',
            'account_status' => '',
            'created_at' => '',
            'verified_at' => '',
            'type'=> '',
        ]
    ];
?>