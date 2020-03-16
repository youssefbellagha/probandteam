<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    { 
        $clients = Client::paginate(5);
        
        
        return view('Admin.clients.index',compact('clients'));

    }//end of index

    public function create()
    { 

        return view('Admin.clients.create');

    }//end of create

    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'comment' => 'required',
            'pride' => 'required'
        ]);

        $request_data = $request->all();

            if($request->hasfile('image')){

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('upload/client_images/',$filename);

            $request_data['image'] = 'upload/client_images/'.$filename;

        }//end of if

        Client::create($request_data);

        return redirect()->route('clients.index');

    }//end of store
}
