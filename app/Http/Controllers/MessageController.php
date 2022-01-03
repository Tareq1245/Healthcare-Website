<?php

namespace App\Http\Controllers;

use App\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:250',
            'email' => 'required|max:250',
            'subject' => 'required|max:250',
            'message' => 'required|max:1000'
        ]); //change comment field to message
        $message = new Message();
        $message->user_id = Auth::id();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message; //change comment field to message
        $message->save();

        // Success message
        return redirect()->back();
    }
}
