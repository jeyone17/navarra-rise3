@extends('layouts.driver_layout')

@section('title', 'Schedule')

@section('contents')
    <div class="d-flex flex-column">
    </div>
    <div></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Schedule of Delivery</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>Customer Name</th>
                                    <th>Location</th>
                                    <th>Contact Number</th>
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> 0079 </td>
                                    <td> Sweet Joy Kween </td>
                                    <td> San Juan, Molo, Iloilo City </td>
                                    <td> +639090909099 </td>
                                </tr>

                                <tr>
                                    <td> 0078 </td>
                                    <td> Kathryn B </td>
                                    <td> Lapaz, Iloilo City </td>
                                    <td> +639090909099 </td>
                                </tr>

                                <tr>
                                    <td> 0077 </td>
                                    <td> Bea Borres </td>
                                    <td> Jaro, Iloilo City </td>
                                    <td> +639090909099 </td>
                                </tr>

                                <tr>
                                    <td> 0076 </td>
                                    <td> Nadine </td>
                                    <td> Jaro, Iloilo City </td>
                                    <td> +639090909099 </td>
                                </tr>


                                {{-- @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->rice_type }}</td>
                                        <td>{{ $product->unit }}</td>
                                        <td>{{ $product->unit_price }}</td>
                                        <td>{{ $product->selling_price }}</td>
                                        <td>{{ $product->target_level }}</td>
                                        <td>{{ $product->reorder_level }}</td> --}}
                                {{-- <a href="{{ route('owner.show', $product->id) }}" class="btn">View</a>
                                        <a href="{{ route('owner.edit', $product->id) }}" class="btn">Edit</a>
                                        <form action="{{ route('owner.products.destroy', $product->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn">Delete</button> --}}

                                {{-- </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
