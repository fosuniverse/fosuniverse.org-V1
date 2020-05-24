<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    // index page

    public function index(){

        Session::put('active', 'home');
        return view('home.index');
    }

    //About Community
    public function about(){
        Session::put('active', 'about');
        return view('home.about');
    }

     //Join Community
     public function join(){
        Session::put('active', 'join');
        return view('home.join');
    }

   //(Events)
               // Become A Member
     public function events_become_member(){
        Session::put('active', 'events');
        return view('home.events.become_a_member');
    }

     //Projects
                  // Resources
     public function projects_resources(){
        Session::put('active', 'projects');
        return view('home.projects.resources');
    }
}
