@extends('layouts.app')
@section('page_title')
	Add New Product
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

	<form class="form-horizontal" role="form" method="POST" action="{{ route('add.new.product') }}">
		<div>
	        <label for="name">Product Name</label>
	        <input type="string" name="name" id="name" placeholder="Name"/>  
	    </div>
	    <div>
	    	<label for="category">Product Cateory</label>
	    	<select name="category" id="category">
				<option value="-1">Please Select</option>
				@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->category_name }}</option>
				@endforeach
			</select>
	    </div>
	    <button type="submit" class="btn"> Submit </button>
	    <input type="hidden" name="_token" value="{{ Session::token() }}">
	</form>

@endsection