@extends('layout') @section('body')

<h1>All Stores</h1>
<h3>Click on an id to view that specific store</h3>

<div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            <tr>

                <td><a href="/viewStores/{{$store->id}}">{{$store->id}}</a></td>
                <td>{{$store->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
