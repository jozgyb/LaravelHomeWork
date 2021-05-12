<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    function show()
    {
        $data = Message::all()->sortByDesc('created_at');
        return view('admin', ['messages' => $data]);
    }
}
