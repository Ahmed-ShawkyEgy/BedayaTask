@extends('layout') @section('body')

<h1>All Stores</h1>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Adress</th>
            <th>Logo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stores as $store)
        <tr>
            <td>{{$store->name}}</td>
            <td>{{$store->address}}</td>
            <td>{{$store->logoPath}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
