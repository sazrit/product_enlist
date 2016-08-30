@extends('layouts.app')

@section('title')
    Search Result
@endsection

@section('content')

    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample Products details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>product</th>
                <th>category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->category_name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

@endsection