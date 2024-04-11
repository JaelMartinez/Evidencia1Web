<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->name;
        $client->fiscal_data = $request->fiscal_data;
        $client->delivery_address = $request->delivery_address;
        $client->save();
        return redirect()->route('clients.index');
    }
}