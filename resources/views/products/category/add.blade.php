@extends('layouts.app')
@section('page_title')
	Add New Product Category
@endsection

@section('content')

	@if(Session::has('success'))
	    <section class="info-box success">
	    {{ Session::get('success') }}
	    </section>
	@endif

	@if(count($errors)>0)
	    <section class="info-box fail">
	        @foreach($errors->all() as $error)
	            {{ $error }}
	        @endforeach
	     </section>    
	@endif

	<form class="form-horizontal" role="form" method="POST" action="{{ route('add.new.productCategory') }}">
		<div>
	        <label for="name">Product Category Name</label>
	        <input type="string" name="category_name" id="category_name" placeholder="category name"/>  
	    </div>
	    <div>
	        <label for="description">Description</label>
	        <textarea name="description" id="description" rows="5" placeholder="Description"></textarea>
	         </div>
	    <button type="submit" class="btn"> Submit </button>
	    <input type="hidden" name="_token" value="{{ Session::token() }}">
	</form>
@endsection