@extends('layout') @section('body')

<h1 style="margin: 50px auto 0px auto;">Update the store</h1>
<form method="post" action="/updateStore/{{$store->id}}">
    {{ csrf_field() }} {{method_field('PATCH')}}
    <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Name:</label>
        <div class="col-10">
            <input class="form-control" type="text" name="name" value="{{$store->name}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Address:</label>
        <div class="col-10">
            <input class="form-control" type="text" name="address" value="{{$store->address}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Logo Path:</label>
        <div class="col-10">
            <input class="form-control" type="text" name="logoPath" value="{{$store->logoPath}}">
        </div>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Store</button>
    </div>
</form>
@endsection
