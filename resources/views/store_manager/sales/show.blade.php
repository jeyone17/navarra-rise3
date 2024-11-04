@extends('layouts.store-manager_layout')

@section('title', 'View Sale')

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sale Details</h5>
                        <table class="table">
                            <tr>
                                <th>Product</th>
                                <td>{{ $sale->product->rice_type }}</td>
                            </tr>
                            <tr>
                                <th>Quantity</th>
                                <td>{{ $sale->quantity }}</td>
                            </tr>
                            <tr>
                                <th>Total Price</th>
                                <td>{{ $sale->total_price }}</td>
                            </tr>
                            <tr>
                                <th>Sale Date</th>
                                <td>{{ $sale->sale_date }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('store_manager.sales.sales') }}" class="btn btn-primary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
