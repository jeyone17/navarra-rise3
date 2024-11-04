@extends('layouts.warehouse-manager_layout')



@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Products</h5>



                        <form action = "{{ 'warehouse' }}" method = "Post">

                            @csrf

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
                                <label for="inputNumber" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="quantity" name="quantity">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="arrival_date" name="arrival_date">
                                </div>
                            </div>


                            <div class="row mb-3">

                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-primary" value ="Add Product">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
