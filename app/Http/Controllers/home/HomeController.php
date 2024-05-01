<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    function aboutUs()
    {
        return view('frontend.about_us');
    }

    function visionMission()
    {
        return view('frontend.vision_mission');
    }

    function principalMessage()
    {
        return view('frontend.principal_message');
    }

    function contactUs()
    {
        return view('frontend.contact_us');
    }

}
