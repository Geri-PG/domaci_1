@extends('layout')
@section ('sadrzajStranice')
    <form method="POST" action="/admin/add-product">
        @if($errors->any)
            <p>Error: {{$errors->first()}}</p>
        @endif
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
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add</button>
        </div>
    </form>
@endsection

@section('title')
    Shop
@endsection
