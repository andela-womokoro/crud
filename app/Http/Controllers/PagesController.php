<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        $messages = self::getSortedMessages();

        return view('operations', ['messages' => $messages]);
    }

    public static function getSortedMessages()
    {
        return Message::all()->sortBy('id');
    }
}
