@extends('layouts.app')
@section('page_title')
view products
@endsection

@section('content')

@foreach($products as $product)
				<option value="{{ $product->id }}">{{ $product->name }}</option>
				@endforeach

@endsection