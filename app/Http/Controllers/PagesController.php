<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('index');
    }

    public function getLogin(){
        return view('pages.login');
    }

    public function getDashboard(){
        return view('pages.dashboard');
    }

    public function getFahamu(){
        return view('pages.fahamu');
    }

    public function getHuduma(){
        return view('pages.huduma');
    }
}




