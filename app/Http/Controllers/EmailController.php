<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webklex\IMAP\Facades\Client;

class EmailController extends Controller
{
    //
    public function fetchEmails()
    {
        $client = Client::account('default');
        $client->connect();

        $inbox = $client->getFolder('INBOX');
        $messages = $inbox->messages()->all()->get();

        return view('email.index', compact('messages'));
    }
}
