<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActionsController extends Controller
{
    public function newMessageForm()
    {
        return view('new_message_form');
    }

    public function createMesage(Request $request)
    {
        $message = Message::find($request->input('id'));
        $user->message = $request->input('message');
        $user->save();

        return view('operations', ['user' => $user, 'message' => 'Message successfully updated.']);
    }
}
