@extends('layout')
@section ('sadrzajStranice')

    <form method="POST" action="/admin/add-product">
        {{csrf_field()}}
        <div class="container mt-5 col-md-4">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" class="form-control" id="amount" name="amount">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
@endsection

@section('title')
    Add product
@endsection


