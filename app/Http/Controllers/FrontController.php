<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    { 
    	$services = service::all();
    	$agents =  Agent::all();
        return view('welcome',compact('services','agents'));
    }
}
