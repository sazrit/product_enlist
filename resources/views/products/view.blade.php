@extends('layouts.app')
@section('page_title')
	View Products
@endsection

@section('content')

	@foreach($products as $product)
		<p> ID: {{ $product->id }}, Name: {{ $product->name }} </p>
	@endforeach

@endsection