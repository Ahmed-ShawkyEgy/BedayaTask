@extends('layout') @section('body')


<div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>LogoAdress</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>{{$store->address}}</td>
                <td>{{$store->logoPath}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
