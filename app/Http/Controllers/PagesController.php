<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Profile;
use App\About;
use App\Projek;

class PagesController extends Controller
{
    public function home()
    {

        $profile = Profile::first();
        $about = About::first();
        $projek = Projek::get();

        return view('portfolio.index', compact('profile', 'about', 'projek'));
    }
    public function login()
    {

        return view('portfolio.auth.index');
    }
}
