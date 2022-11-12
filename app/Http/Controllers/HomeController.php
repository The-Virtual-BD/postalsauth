<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('index');
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
