<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('welcome');
    }

    public function about()
    {
       return view('pages.about');
    }

    public function services()
    {
       return view('pages.services');
    }

    public function team()
    {
       return view('pages.team');
    }

     public function contact()
    {
       return view('pages.contact');
    }


}
