<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use App\Models\User;
use App\Models\Provider;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{  public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $clients = Client::all();
        $users = User::all();
        $providers = Provider::all();
        $products = Product::all();
        return view('orders.create', compact('clients', 'users', 'providers', 'products'));
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->client_id = $request->client_id;
        $order->user_id = $request->user_id;
        $order->provider_id = $request->provider_id;
        $order->product_id = $request->product_id;
        $order->notes = $request->notes;
        $order->status = 'pending';
        $order->save();
        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $clients = Client::all();
        $users = User::all();
        $providers = Provider::all();
        $products = Product::all();
        return view('orders.edit', compact('order', 'clients', 'users', 'providers', 'products'));
    }

    public function update(Request $request, Order $order)
    {
        $order->client_id = $request->client_id;
        $order->user_id = $request->user_id;
        $order->provider_id = $request->provider_id;
        $order->product_id = $request->product_id;
        $order->notes = $request->notes;
        $order->status = $request->status;
        $order->save();
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
    public function search(Request $request)
    {
        $invoiceNumber = $request->input('invoice_number');

        // Buscar órdenes por número de factura
        $orders = Order::where('invoice_number', $invoiceNumber)->get();

        return view('search', compact('orders', 'invoiceNumber'));
    }
}