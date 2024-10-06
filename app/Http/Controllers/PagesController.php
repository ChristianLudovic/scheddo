<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function selectServices()
    {
        return view('pages.selectService');
    }

    public function selectTime()
    {
        return view('pages.selectTime');
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
