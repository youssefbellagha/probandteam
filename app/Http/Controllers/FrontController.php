<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Client;
use App\Models\Project;
use App\Models\Project_Image;
use App\Models\service;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()

    {
        return view('welcome')->with('services',service::all())
                              ->with('projects', Project::orderBy('id','desc')->take(6)->get())
                              ->with('allprojects',Project::all())
                              ->with('clients',Client::all())
                              ->with('team', Team::all())
    
    ;}
    
    public function allprojects()
    {
        return view('Front.all_projects')->with('services',service::all())
                                         ->with('projects', Project::orderBy('id','desc')->paginate(9));
    }

    public function singleproject($id)
    {
        $project = Project::findOrFail($id);
        return view('Front.single_project')->with('services',service::all())
                                           ->with('project', Project::findOrFail($id))
                                           ->with('images', Project_Image::where('Project_id',$project->id)->get())
                                         ;
    }

    public function testimonial()
    {
        return view('Front.testimonials')->with('services',service::all())
                                         ->with('clients', Client::orderBy('id','desc')->paginate(2));
    }

    public function service($id)
    {
        return view('Front.service')->with('services',service::all())
                                    ->with('service', service::findOrFail($id));

    }
}
