<?php

namespace App\Http\Controllers\root;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\message;
use App\UserProfile;
use Auth;
use App\User;
class messagecontroller extends Controller
{
    //

    public function create($id){
        $user1 = Auth::user()->id;
        $user2 = $id;
        $profile1 = User::where('id', $user1)->with(['user_skill', 'user_profile'])->first();
        $profile2 = User::where('id', $user2)->with(['user_skill', 'user_profile'])->first();
        $message = new message;
        $message->user1 = $user1;
        $message->name1 = $profile1->user_profile->first_name . ' ' . $profile1->user_profile->last_name;
        $message->user2 = $user2;
        $message->name2 = $profile2->user_profile->first_name . ' ' . $profile2->user_profile->last_name;
        $message->save();
        return redirect('/message');
    }
    public function index()
    {
        $id = Auth::user()->id;
        $messages = message::where('user1',$id)->orwhere('user2',$id)->get();
        return view('afterlogin.message',compact('messages'));
    }
}
