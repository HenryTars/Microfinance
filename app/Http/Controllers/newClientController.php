<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class newClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = new Client;
        $clients = Client::all();
        return view('pages.dashboard', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.clientregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->id = Auth::id();

        $client->firstname = $request->input('firstname');
        $client->middlename = $request->input('middlename');
        $client->lastname = $request->input('lastname');
        $client->address = $request->input('address');

        $client->save();

        return redirect('clients')->with('status', 'Client added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('pages.clientEdit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = new Client;
        $client = Client::find($id);

        $client->firstname = $request->input('firstname');
        $client->middlename = $request->input('middlename');
        $client->lastname = $request->input('lastname');
        $client->address = $request->input('address');

        $client->update();

        return redirect('clients')->with('status', 'Client Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        $client->delete();
        return redirect('pages/dashboard')->with('status', 'Client Details Deleted Successfully');

    }
}
