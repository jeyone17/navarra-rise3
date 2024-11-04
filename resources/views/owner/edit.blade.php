@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Product
        </div>
        <div class="card-body">
            <form action="{{ route('owner.products.update', ['product' => $product->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="rice_type">Rice Type</label>
                    <input type="text" class="form-control" id="rice_type" name="rice_type"
                        value="{{ $product->rice_type }}">
                </div>

                <div class="form-group">
                    <label for="unit">Unit</label>
                    <input type="number" class="form-control" id="unit" name="unit" value="{{ $product->unit }}">
                </div>

                <div class="form-group">
                    <label for="unit_price">Unit Price</label>
                    <input type="number" class="form-control" id="unit_price" name="unit_price"
                        value="{{ $product->unit_price }}">
                </div>

                <div class="form-group">
                    <label for="selling_price">Selling Price</label>
                    <input type="number" class="form-control" id="selling_price" name="selling_price"
                        value="{{ $product->selling_price }}">
                </div>

                <div class="form-group">
                    <label for="target_level">Target Level</label>
                    <input type="number" class="form-control" id="target_level" name="target_level"
                        value="{{ $product->target_level }}">
                </div>

                <div class="form-group">
                    <label for="reorder_level">Reorder Level</label>
                    <input type="number" class="form-control" id="reorder_level" name="reorder_level"
                        value="{{ $product->reorder_level }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('owner.products') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
