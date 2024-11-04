@extends('layouts.store-manager_layout')

@section('title', 'Sales Table')

@section('contents')
    <div class="d-flex flex-column">
        <div class="d-flex justify-content-between">
            <a href="{{ route('store_manager.sales.create') }}" class="btn btn-primary">Add Sale</a>
        </div>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List of Sales</h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Rice Type</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th>Sales Date</ht>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sales as $sale)
                                    <tr>
                                        <td>{{ $sale->product->rice_type }}</td>
                                        <td>{{ $sale->quantity }}</td>
                                        <td>{{ $sale->total_price }}</td>
                                        <td>{{ $sale->sale_date }}</td>
                                        <td>
                                            <a href="{{ route('store_manager.sales.show', $sale->id) }}"
                                                class="btn">View</a>
                                            <a href="{{ route('store_manager.sales.edit', $sale->id) }}"
                                                class="btn">Edit</a>
                                            <form action="{{ route('store_manager.sales.destroy', $sale->id) }}"
                                                method="post" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
