<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;



class SalesController extends Controller
{
    public function sales(): View
    {
        $sales = Sale::all();
        return view('store_manager.sales.sales', compact('sales'));
    }



    public function create(): View
    {
        $products = Product::all(); // Fetch all products
        return view('store_manager.sales.create', compact('products')); // Pass the $products variable to the view
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'rice_type' => 'required|string',
            'quantity' => 'required|integer',
            'total_price' => 'required|numeric',
            'sale_date' => 'required|date',
        ]);

        Sale::create($validatedData);
        return redirect()->route('store_manager.sales.sales');
    }

    public function show(Sale $sale)
    {
        return view('store_manager.sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $products = Product::all();
        return view('store_manager.sales.edit', compact('sale', 'products'));
    }

    public function update(Request $request, Sale $sale)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
            'total_price' => 'required|numeric',
        ]);

        $sale->update($validatedData);
        return redirect()->route('store_manager.sales.sales')->with('success', 'Sale updated successfully');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('store_manager.sales.sales')->with('success', 'Sale deleted successfully');
    }
} 
