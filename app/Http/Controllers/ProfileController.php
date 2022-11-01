<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Auth::user()->profile;
        return view('profiles.profile');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return view('profiles.edit');

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
        $user = User::findOrFail($id);
        $user->firstname = $request->firstname;
        $user->profile->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->profile->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->profile->phone = $request->phone;
        $user->profile->nib = $request->nib;
        $user->profile->account_type = $request->type;
        if ($request->type == 2) {
            $user->profile->company_name = $request->companyname;
            $user->profile->tin_number = $request->tin;
        }
        $user->profile->country = $request->country;
        $user->profile->island = $request->island;
        $user->profile->address = $request->about;
        $user->profile->house = $request->house;
        $user->profile->region = $request->region;
        $user->profile->location = $request->location;
        $user->save();

        return redirect()->route('myprofile');
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