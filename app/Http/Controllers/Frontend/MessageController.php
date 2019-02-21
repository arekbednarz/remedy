<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Message;
use Auth;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class MessageController extends Controller
{

    public function index() {

        $messages = Auth::user()->messages()->select(['specialist_id'])->groupBy('specialist_id')->orderBy('created_at', 'desc')->get();

        $chats = [];
        // Get last messages from conversation
        foreach ($messages as $message) {
            $chats[] = Message::where('user_id', Auth::user()->id)->where('specialist_id', $message->specialist_id)->orderBy('created_at','desc')->first();
        }

        return view('frontend.user.messages.index', compact('chats'));
    }

    public function show($specialistId) {

        $chat = Auth::user()->messages()->where('specialist_id', $specialistId)->where('removed_by_user', false)->orderBy('created_at', 'asc')->get();

        return view('frontend.user.messages.show', compact('chat'));
    }

}
