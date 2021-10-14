<?php

namespace Play\Message\Http\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Play\Message\Models\Message;

/**
 *
 * @author weirui
 * @date 2021-10-14
 */
class MessageController extends Controller
{
    public function index(Request $request)
    {
        $sound = $request->get('sound');
        return view("message::message", ['sound' => $sound]);
    }

    public function save(Request $request)
    {
        $sound = config('message.bark');
        $data = $request->all();
        unset($data['bark']);
        Message::create($data);
        return redirect(route('message',['sound'=>$sound]));
    }
}
