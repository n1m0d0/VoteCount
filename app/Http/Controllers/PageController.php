<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function dashboard(): View
    {
        return view('pages.dashboard');
    }

    public function user(): View
    {
        return view('pages.user');
    }

    public function candidate(): View
    {
        return view('pages.candidate');
    }
}
