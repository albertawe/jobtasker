<?php

namespace App\Http\Controllers\root;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\UserProfile;
use App\UserSkill;
use Carbon\Carbon;
class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $user_profile = UserProfile::find($id);
        $user_skill = UserSkill::find($id);
        Carbon::parse($user_profile->birthdate)->format('y/m/d'); 
        //dd($user_profile);
        return view('afterlogin.home',compact('user_profile','user_skill'));
        //return $user_profile;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $user_profile = UserProfile::find($id);
        $user_profile->first_name = $request->get('firstname');
        $user_profile->last_name = $request->get('lastname');
        $user_profile->email = $request->get('email');
        $user_profile->bank = $request->get('bank');
        $user_profile->no_rek = $request->get('no_rek');
        //$user_profile->birthdate = $request->get('birthdate');
        $user_profile->birthdate = $request->date;
        if($request->image != null){
        $name=$request->image->getClientOriginalName();
        $request->image->move(public_path().'/images/profile', $name);  
        $user_profile->image = $name;
        }  
        //dd($request->date);
        $user_profile->tagline = $request->get('tagline');
        $user_profile->location = $request->get('location');
        $user_profile->save();
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_profile = UserProfile::find($id);
        return view('afterlogin.viewprofile',compact('user_profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
