@extends('layouts.driver_layout')

@section('title', 'Orders')

@section('contents')
    <div class="d-flex flex-column">
    </div>
    <div></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List of Orders</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>Customer Name</th>
                                    <th>Rice Type</th>
                                    <th>Quantity</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($products as $product) --}}
                                <tr>
                                    <td> 0079 </td>
                                    <td> Sweet Joy Kween </td>
                                    <td> Jasmine Blue </td>
                                    <td> 30 sacks </td>
                                    <td> San Juan, Molo, Iloilo City </td>
                                    <td> Pending </td>
                                </tr>

                                <tr>
                                    <td> 0078 </td>
                                    <td> Kathryn B </td>
                                    <td> Jasmine Blue </td>
                                    <td> 30 sacks </td>
                                    <td> Lapaz, Iloilo City </td>
                                    <td> Pending </td>
                                </tr>


                                <tr>
                                    <td> 0078 </td>
                                    <td> Sweet Joy Kween </td>
                                    <td> Jasmine Blue </td>
                                    <td> 30 sacks </td>
                                    <td> Jaro, Iloilo City </td>
                                    <td> Pending </td>
                                </tr>

                                <tr>
                                    <td> 0078 </td>
                                    <td> Sweet Joy Kween </td>
                                    <td> Jasmine Blue </td>
                                    <td> 30 sacks </td>
                                    <td> Jaro, Iloilo City </td>
                                    <td> Pending </td>
                                </tr>





                                {{-- <a href="{{ route('owner.show', $product->id) }}" class="btn">View</a>
                                        <a href="{{ route('owner.edit', $product->id) }}" class="btn">Edit</a>
                                        <form action="{{ route('owner.products.destroy', $product->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn">Delete</button> --}}


                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
