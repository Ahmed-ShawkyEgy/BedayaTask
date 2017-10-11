@extends('layout') @section('body')

<h1>All Stores</h1>
<h3>Click on the name of the store you'd like to view/update</h3>

<div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            <tr>

                <td><a href="/viewStores/{{$store->id}}">{{$store->name}}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
