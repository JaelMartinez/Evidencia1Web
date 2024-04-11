<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::all();
        return view('providers.index', compact('providers'));
    }

    public function create()
    {
        return view('providers.create');
    }

    public function store(Request $request)
    {
        $provider = new Provider();
        $provider->product_name = $request->product_name;
        $provider->price = $request->price;
        $provider->save();
        return redirect()->route('providers.index');
    }
}