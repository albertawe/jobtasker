<?php

namespace App\Http\Controllers\root;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\message;
use App\conversation;
class conversationcontroller extends Controller
{
    public function index($id){
        $messages = message::where('id',$id)->with(['conversation']);
        dd($messages);
        // dd($messages->name1);
        // dd($messages->name2);
    }
}
