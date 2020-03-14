<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        return view('welcome')->with('services',service::all()
                             ->whith('agents', Agent::all())
        );
    }
}
