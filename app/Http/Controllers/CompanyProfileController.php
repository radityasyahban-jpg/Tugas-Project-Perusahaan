<?php

namespace App\Http\Controllers;

class CompanyProfileController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
