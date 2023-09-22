<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class MaillController extends Controller
{
    public function send(Request $request)
    {
        $result = false;

        if ($request->ajax() && !empty($request->all())) {
            $sender = $request;

            Mail::send('template.pageMaill', ['sender' => $sender], function ($message) use ($sender) {
                $message->from('afonas48@yandex.ru', 'laravel-admin');
                $message->to('afonas48@yandex.ru', $sender->email, $sender->name, $sender->massage);
                $message->subject($sender->subject);
            });

            $result = true;
        }

        return response()->json(['result' => $result]);
    }
}
