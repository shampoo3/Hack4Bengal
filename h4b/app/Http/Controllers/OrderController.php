<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::orderBy('created_at', 'DESC')->get();
        $product = Product::all();
        return view('orders.index', compact('order','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order = Order::all();
        $product = Product::all();
        return view('orders.create',compact('order','product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create($request->all());
 
        return redirect()->route('orders')->with('success', 'Order added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::findOrFail($id);
  
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::findOrFail($id);
  
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
  
        $order->update($request->all());
  
        return redirect()->route('orders')->with('success', 'order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
  
        $order->delete();
  
        return redirect()->route('orders')->with('success', 'product deleted successfully');
    }
}
