<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

trait PageTitle
{
    public function setPageTitle($title)
    {
        Session::put('pageTitle', $title);
    }
}


class PagesController extends Controller
{
    public function home ()
    {
        $this->setPageTitle('Home Page');
        return view('home');
    }

    public function about()
    {
        $this->setPageTitle('About Page');
        return view('about');
    }
    public function contact()
    {
        $this->setPageTitle('Contact Page');
        return view('contact');
    }

    public function setPageTitle($title)
    {
        Session::put('pageTitle', $title);
    }
}
