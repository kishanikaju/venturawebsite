<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('homepage');
    }
    public function success_stories()
    {
        return view('success_stories');
    }
    public function services()
    {
        return view('services');
    }
}
