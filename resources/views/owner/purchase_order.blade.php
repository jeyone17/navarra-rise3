@extends('layouts.owner_layout')


@section('title', 'Purchase Orders')

@section('contents')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>

                                <th>Rice Type</th>
                                <th>Quantity</th>
                                <th>Origin</th>
                                <th>Total Price</th>
                                <th>Date</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>Sinandomeng</td>
                                <td>250</td>
                                <td>Dueñas, Iloilo</td>
                                <td>250,000</td>
                                <td>01/15/2024</td>
                                <td>Completed</td>
                            </tr>

                            <tr>

                                <td>Aroma</td>
                                <td>200</td>
                                <td>Leon, Iloilo</td>
                                <td>200,000</td>
                                <td>01/15/2024</td>
                                <td>Pending</td>
                            </tr>

                            <tr>

                                <td>Princess Bea</td>
                                <td>200</td>
                                <td>Molo, Iloilo</td>
                                <td>250,000</td>
                                <td>01/19/2024</td>
                                <td>Completed</td>
                            </tr>

                            <tr>

                                <td>Jasmine Red</td>
                                <td>150</td>
                                <td>Lapaz, Iloilo</td>
                                <td>180,000</td>
                                <td>01/18/2024</td>
                                <td>Pending</td>
                            </tr>


                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
@endsection
