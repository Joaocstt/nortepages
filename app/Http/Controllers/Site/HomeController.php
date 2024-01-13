<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('site.welcome');
    }

    public function contact(): View
    {
        return view('site.contact');
    }

    public function faq(): View
    {
        return view('site.faq');
    }

    public function about(): View
    {
        return view('site.about');
    }


}
