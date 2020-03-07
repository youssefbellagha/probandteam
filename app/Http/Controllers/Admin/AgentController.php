<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Citie;
use App\Models\Countrie;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{

    public function index()
    { 
        $agents = Agent::all();
        
        return view('Admin.agents.index',compact('agents'));

    }//end of index

    public function create()
    { 
        $countries = Countrie::all();
        $citie = Citie::all();
        
        return view('Admin.agents.create',compact('countries','citie'));

    }//end of create

    public function store(Request $request)
    {

        $request->validate([
            'countrie_id' => 'required',
            'citie_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'email' => 'required|unique:agents',
            'password' => 'required|confirmed',
            'phone' => 'required',
            'gender' => 'required'
        ]);

        $request_data = $request->except(['password', 'password_confirmation', 'image']);
        $request_data['password'] = bcrypt($request->password);

      

            if($request->hasfile('image')){

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('upload/user_images/',$filename);

            $request_data['image'] = $filename;

        }//end of if

        Agent::create($request_data);

        // dd($Agent);
        return redirect()->route('agents.index');

    }//end of store

    public function edit(Agent $agent)
    {

        $countries = Countrie::all();
        $citie = Citie::all();
        return view('Admin.agents.edit', compact('agent','countries','citie'));

    }//end of agent

    public function update(Request $request, Agent $agent)
    {
        $request->validate([
            'countrie_id' => 'required',
            'citie_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'email' => 'required|unique:agents',
            'password' => 'required|confirmed',
            'phone' => 'required',
            'gender' => 'required'
        ]);

        $request_data = $request->except(['image']);

        if($request->hasfile('image')){

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('upload/user_images/',$filename);

        $request_data['image'] = $filename;

    }//end of if

        $agent->update($request_data);

        return redirect()->route('agents.index');

    }//end of update

    public function destroy(Agent $agent)
    {
        $agent->delete();
        return redirect()->route('agents.index');

    }//end of destroy
}
