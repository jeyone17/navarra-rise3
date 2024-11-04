@extends('layouts.owner_layout')
@section('title', 'Stocks')

@section('contents')

    {{-- <div class="d-flex flex-column">

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('owner.create') }}" class="btn btn-primary">Add Sales</a>
        </div> --}}



    {{-- </div> --}}

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Rice Type</th>
                                    <th>Quantity</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01/15/2024</td>
                                    <td>Sinandomeng</td>
                                    <td>150</td>

                                </tr>
                                <tr>
                                    <td>01/15/2024</td>
                                    <td>Princess Blue</td>
                                    <td>150</td>

                                </tr>
                                <tr>
                                    <td>01/15/2024</td>
                                    <td>Jasmine Blue</td>
                                    <td>150</td>

                                </tr>
                                <tr>
                                    <td>01/15/2024</td>
                                    <td>Aroma</td>
                                    <td>60</td>

                                </tr>
                                <tr>
                                    <td>01/15/2024</td>
                                    <td>Golden Cup</td>
                                    <td>90</td>

                                </tr>
                                <tr>
                                    <td>01/15/2024</td>
                                    <td>Jasmine Green</td>
                                    <td>80</td>

                                </tr>

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
