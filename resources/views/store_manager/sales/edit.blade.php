@extends('layouts.owner_layout')

@section('title', 'Edit Sale')

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Sale</h5>
                        <form action="{{ route('store_manager.sales.update', $sale->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="product_id" class="col-sm-2 col-form-label">Product</label>
                                <div class="col-sm-10">
                                    <select name="product_id" class="form-control">
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}"
                                                {{ $product->id == $sale->product_id ? 'selected' : '' }}>
                                                {{ $product->rice_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="quantity" name="quantity"
                                        value="{{ $sale->quantity }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="total_price" class="col-sm-2 col-form-label">Total Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="total_price" name="total_price"
                                        value="{{ $sale->total_price }}" step="0.01">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="sale_date" class="col-sm-2 col-form-label">Sale Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="sale_date" name="sale_date"
                                        value="{{ $sale->sale_date }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
