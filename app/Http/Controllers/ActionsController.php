<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionsController extends Controller
{
    public function newMessageForm()
    {
        return view('new_message_form');
    }

    public function createMessage(Request $request)
    {
        $message = new Message();
        $message->body = $request->input('message');
        $message->save();

        $messages = PagesController::getSortedMessages();

        return view('operations', ['alert' => 'Message successfully created.', 'messages'=>$messages]);
    }

    public function editMessageForm($id)
    {
        $message = Message::find($id);

        return view('edit_message', ['message'=>$message]);
    }

    public function editMessage(Request $request)
    {
        $id = $request->input('id');
        $message = Message::find($id);
        $message->body = $request->input('message');
        $message->save();

        $messages = PagesController::getSortedMessages();

        return view('operations', ['alert' => 'Message successfully updated.', 'messages'=>$messages]);
    }

    public function deleteMessage($id)
    {
        $message = Message::find($id);
        $message->delete();

        $messages = PagesController::getSortedMessages();

        return view('operations', ['alert' => 'Message successfully deleted.', 'messages'=>$messages]);
    }
}
