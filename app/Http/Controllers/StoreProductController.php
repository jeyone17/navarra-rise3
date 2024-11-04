<?php

namespace App\Http\Controllers;

class StoreProductController extends Controller
{
    public function dashboard(): View
    {
        $user = Auth::user();

        return view('owner.owner-dashboard');
    }

    public function products(): View
    {
        return view('owner.products');
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

    public function create(): View
    {
        return view('owner.create');
    }
}
