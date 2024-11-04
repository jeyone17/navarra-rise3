@extends('layouts.store-manager_layout')

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sales Details</h5>
                        <form action="{{ route('store_manager.sales.sales') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="product_id" class="col-sm-2 col-form-label">Product</label>
                                <div class="col-sm-10">
                                    <select name="product_id" class="form-control">
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->rice_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="quantity" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="total_price" class="col-sm-2 col-form-label">Total Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="total_price" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="sale_date" class="col-sm-2 col-form-label">Date of Sale</label>
                                <div class="col-sm-10">
                                    <input class="mb-3 p-2 rounded-3 w-100" type="date" name="sale_date" id="sale_date">

                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add Sale</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
