<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcaster;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index()
    {
        return view('chatbs.chat');
    }

    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcaster($request->get('message')))->toOthers();
        return view('chatbs.transmitor', ['message' => $request->get('message')]);
    }

    public function receive(Request $request)
    {
        return view('chatbs.receive', ['message' => $request->get('message')]);
    }
}
