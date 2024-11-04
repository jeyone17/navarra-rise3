<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;



class ProductController extends Controller
{
    public function dashboard(): View
    {
        $user = Auth::user();

        return view('owner.owner-dashboard');
    }

    public function customer_order(): View
    {
        return view('owner.customer_order');
    }

    public function purchase_order(): View
    {
        return view('owner.purchase_order');
    }

    public function stocks(): View
    {
        return view('owner.stocks');
    }

    public function products(): View
    {
        $products = Product::all(); // Fetch all products

        return view('owner.products', compact('products')); // Pass products to the view
    }

    public function create(): View
    {
        return view('owner.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rice_type' => 'required|string',
            'unit' => 'required|integer',
            'unit_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'target_level' => 'required|integer',
            'reorder_level' => 'required|integer',
            
        ]);

        Product::create($validatedData);

        return redirect()->route('owner.products');
    }

    //
      public function edit(Product $product)
    {
        return view('owner.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'rice_type' => 'required|string',
            'unit' => 'required|integer',
            'unit_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'target_level' => 'required|integer',
            'reorder_level' => 'required|integer',
        ]);

        $product->update($validatedData);

        return redirect()->route('owner.products');
    }

    public function show(Product $product)
    {
        return view('owner.products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('owner.products');
    }
    //     public function store(Request $request)
    // {
    //     $product = Product::create($request->all());
    //     return redirect()->route('owner.products');
    // }

}
