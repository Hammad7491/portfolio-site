<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{



   public function index()
    {
        return view('index');
    }

   public function about()
    {
        return view('pages.about');
    }


public function websitePackage()
{
    return view('websitePackage');
}


public function webhosting()
{
    return view('webhosting');
}

public function support()
{
    return view('support');
}

public function contactus()
{
    return view('contactus');
}




}
