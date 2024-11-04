@extends('layouts.store-manager_layout')

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Products</h5>

                        {{-- <form action="{{route('products.store')}}" method="post"> </form> --}}

                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Rice Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="rice_type" name="rice_type">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Unit</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="unit" name="unit">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Unit Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="unit_price" name="unit_price">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Selling Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="selling_price" name="selling_price">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Target level</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="target_level" name="target_level">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Re-order level</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="reorder_level" name="target_level">
                                </div>
                            </div>


                            <div class="row mb-3">

                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add Product</button>
                                    <form action="{{ route('store_manager.store') }}" method='post'></form>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
