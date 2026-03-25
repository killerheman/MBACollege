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

    function successionPrincipals()
    {
        return view('frontend.succession_principals');
    }

    function successionHeads()
    {
        return view('frontend.succession_heads');
    }

    function administrativeFunctionaries()
    {
        return view('frontend.administrative_functionaries');
    }

    function nonTeaching()
    {
        return view('frontend.non_teaching');
    }

    function coursesOffered()
    {
        return view('frontend.courses_offered');
    }

    function research()
    {
        return view('frontend.research');
    }

    function scholarships()
    {
        return view('frontend.scholarships');
    }

    function infrastructure()
    {
        return view('frontend.infrastructure');
    }

    function roWater()
    {
        return view('frontend.ro_water');
    }

    function survelliance()
    {
        return view('frontend.survelliance');
    }

    function computerLabs()
    {
        return view('frontend.computer_labs');
    }

    function hostels()
    {
        return view('frontend.hostels');
    }

    function library()
    {
        return view('frontend.library');
    }

    function physicalEducation()
    {
        return view('frontend.physical_education');
    }

    function examinations()
    {
        return view('frontend.examinations');
    }

    function alumni()
    {
        return view('frontend.alumni');
    }

    function contactUs()
    {
        return view('frontend.contact_us');
    }

}
