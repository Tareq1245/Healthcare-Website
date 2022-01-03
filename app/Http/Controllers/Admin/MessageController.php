<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index()
    {
//        $comments = Comment::all();
        $messages = Message::all();
        return view('admin.message.index', compact('messages'));
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        // Delete all replies
        $message->delete();
//        Toastr::success('Message successfully deleted :)');
        return redirect()->back();
    }
}
