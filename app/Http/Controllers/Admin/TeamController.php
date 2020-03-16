<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    { 
        $team = Team::paginate(5);
        
        
        return view('Admin.team.index',compact('team'));

    }//end of index

    public function create()
    { 

        return view('Admin.team.create');

    }//end of create

    public function store(Request $request)
    {


        $request->validate([
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'name' => 'required',
            'position' => 'required'
        ]);

        $request_data = $request->all();

            if($request->hasfile('image')){

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('upload/user_images/',$filename);

            $request_data['image'] = 'upload/user_images/'.$filename;

        }//end of if

        Team::create($request_data);

        return redirect()->route('team.index');

    }//end of store
}
