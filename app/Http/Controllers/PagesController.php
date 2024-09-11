<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.selectService');
    }

    public function createAccount()
    {
        return view('pages.createAccount');
    }

    public function reviewAndConfirm()
    {
        return view('pages.reviewAndConfirm');
    }

    public function myAppointments()
    {
        return view('pages.myAppointments');
    }
}
