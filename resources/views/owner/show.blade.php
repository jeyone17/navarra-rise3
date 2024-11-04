@extends('layouts.owner_layout')

@section('content')
    <div class="card">
        <div class="card-header">
            Product Details
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Rice Type</th>
                        <td>{{ $product->rice_type }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Unit</th>
                        <td>{{ $product->unit }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Unit Price</th>
                        <td>{{ $product->unit_price }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Selling Price</th>
                        <td>{{ $product->selling_price }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Target Level</th>
                        <td>{{ $product->target_level }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Reorder Level</th>
                        <td>{{ $product->reorder_level }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('owner.products') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection
