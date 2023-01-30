<?php

namespace App\Http\Controllers;

use App\Mail\PasswordUpdateMail;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $locations = Location::all();

        return view('profiles.edit',compact('locations'));

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
        // return $request;
        $user = User::findOrFail($id);
        $profile = Profile::where('user_id',$id)->first();

        if ($request->password) {
            $request->validate([
                'password' => ['required', 'confirmed'],
            ]);

            $user->password = Hash::make($request->password);
            $user->save();

            try{
                $sendmail = Mail::to($user->email)->send(new PasswordUpdateMail($user));
            }catch (\Exception $exception){}


            return redirect()->route('myprofile');
        }

        if ($request->file('profile_picture')) {
            $image = $request->file('profile_picture');
            $image_full_name = time().'_'.$user->name.$user->id.'.'.$image->extension();
            $upload_path = 'images/pp/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $profile->photo = $image_url;
            $profile->save();
            return redirect()->route('myprofile');
        }

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;

        $profile->first_name = $request->firstname;
        $profile->last_name = $request->lastname;
        $profile->phone = $request->phone;
        $profile->nib = $request->nib;
        $profile->account_type = $request->type;
        if ($request->type == 2) {
            $profile->company_name = $request->companyname;
            $profile->tin_number = $request->tin;
        }
        $profile->country = $request->country;
        $profile->island = $request->island;
        $profile->address = $request->about;
        $profile->house = $request->house;
        $profile->region = $request->region;

        if ($request->location) {
            $user->location_id = $request->location;
            $profile->location_id = $request->location;
        }

        $user->save();
        $profile->save();

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
