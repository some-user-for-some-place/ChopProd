<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexHome()
    {
        return view('home');
    }

    public function indexContact()
    {
        return view('contact');
    }

    public function indexAbout()
    {
        return view('about');
    }

    public function indexServices()
    {
        return view('services');
    }

    public function moreInfoServicesOne()
    {
        return view('moreInfoServicesOne');
    }

    public function moreInfoServicesTwo()
    {
        return view('moreInfoServicesTwo');
    }

    public function moreInfoServicesThree()
    {
        return view('moreInfoServicesThree');
    }

    public function moreInfoServicesFour()
    {
        return view('moreInfoServicesFour');
    }
}
