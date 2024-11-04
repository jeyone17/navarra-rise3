@extends('layouts.store-manager_layout')
@section('title', 'Products')

@section('contents')

    <div class="d-flex flex-column">

        <div class="d-flex justify-content-between">
            <a href="{{ route('store_manager.products.create') }}" class="btn btn-primary">Add Products</a>
        </div>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List of Products</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Rice type</th>
                                    <th>Unit</th>
                                    <th>Unit Price</th>
                                    <th>Selling Price</th>
                                    <th>Target level</th>
                                    <th>Re-order level</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
