<?php

namespace App\Http\Controllers;

use App\Models\Query;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // public function login()
    // {
    //     return view('auth.login');
    // }
    // public function register()
    // {
    //     return view('auth.register');
    // }


    // Home page
    public function index()
    {

        $setting = DB::table('settings')
            ->where('property', 'mode')
            ->first();

        if ($setting->value == 2) {
            return view('ud');
        }


        $teamMembers = TeamMember::where('status', 1)->get();

        return view('index',compact('teamMembers'));
    }



    // faq page
    public function faq()
    {
        return view('faq');
    }
    // contact page
    public function contact()
    {
        return view('contact');
    }

    public function contactsend(Request $request)
    {
        $subscribe = Query::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        $msg = 'Thanks for contucting us. We wil get to you soon.';
        return response()->json(['status' => 'success', 'message' => 'Thanks for contucting us. We wil get to you soon.']);


        // if ($subscribe) {
        //     try{
        //         $sendmail = Mail::to($subscribe->email)->send(new QueryMail($msg));
        //     }catch (\Exception $exception){}

        //     return response()->json(['status' => 'success', 'message' => 'Thanks for contucting us. We wil get to you soon.']);
        // }else{
        //     return response()->json(['status' => 'error', 'message' => 'Something wrong !']);
        // }
    }


    // mission and vission page
    public function mission()
    {
        return view('mission');
    }



    public function jobsshow()
    {
        return view('jobs.show');
    }
    public function service()
    {
        return view('service');
    }
    public function about()
    {
        return view('about');
    }
    public function rates()
    {
        return view('rates');
    }



    // Backoffice
    public function packages()
    {
        return view('boffice.packages');
    }
    public function pickup()
    {
        return view('boffice.pickup');
    }
    public function incomming()
    {
        return view('boffice.incomming');
    }
    public function profile()
    {
        return view('profiles.profile');
    }
}
