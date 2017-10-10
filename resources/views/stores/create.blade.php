@extends('layout') @section('body')

<h1 style="margin: 50px auto 0px auto;">Create a new Store</h1>
<form method="post" action="/createStore">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Name:</label>
        <div class="col-10">
            <input class="form-control" type="text" name="name">
        </div>
    </div>

    <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Address:</label>
        <div class="col-10">
            <input class="form-control" type="text" name="address">
        </div>
    </div>

    <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Logo Path:</label>
        <div class="col-10">
            <input class="form-control" type="text" name="logoPath">
        </div>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Store</button>
    </div>
</form>
@endsection
