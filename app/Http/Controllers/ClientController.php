<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function register(Request $request){
        $this->validate($request, [
             'firstname' => 'required',
             'middlename' => 'required'
        ]);


        //new client
        $client = new Client;
        $client->firstname = $request->input('firstname');
        $client->middlename = $request->input('middlename');
        $client->lastname = $request->input('lastname');
        $client->address = $request->input('address');

        //save client
        $client->save();

        //redirect
        return redirect('pages/dashboard')->with('success', 'Client registered successfully');
    }

    public function getClients(){
        $clients = Client::all();

        return view('pages.dashboard', compact('clients', $clients));
    }
}

