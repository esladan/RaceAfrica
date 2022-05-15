<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMembershipRequest;
use Mail;
use App\Mail\MemberWelcomeEmail;

class MembershipController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ralfregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMembershipRequest $request)
    {
        //
        Membership::create($request->all() );
        if($request->please){
            $message = '
     Thank you for registering to be a part of IFFA Summit 2022. We are so excited about your decision to
attend the conference this July, you details have been recorded, and you will be contacted by one of the
Leader of Delegates to confirm your participation and share other information about the conference.';
             Mail::to($request->email)->send(new MemberWelcomeEmail());
        }else{
            $message = 'Response
Hello There,
Thank you for registering to be a part of IFFA Summit 2022. We are so excited about your decision to
attend the conference this July, you details have been recorded, and you will be contacted by one of the
Leader of Delegates to confirm your participation and share other information about the conference.';
        }

        return redirect()->route('memberships.reg_confirm')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit(Membership $membership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membership $membership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membership $membership)
    {
        //
    }

    public function regConfirm(){

        // Mail::to('airondev@gmail.com')->send(new MemberWelcomeEmail());
        // session()->put('message', 'Great! Successfully send in your mail');
        return view('regconfirm');
    }
}
