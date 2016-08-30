@extends('layouts.app')

@section('page_title')
    Home
@endsection


@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
            	<form action="{{ route('search') }}" method="post" role="search">
				    {{ csrf_field() }}
			    	<div class="input-group">
			        	<input type="text" class="form-control" name="q" placeholder="Search 	products"> 
			            <span class="glyphicon glyphicon-search"></span>
			            <button type="submit" class="btn-btn-primary">Submit</button>
					</div>
				</form>
            </div>     
        </div>
    </div>
</div>
@endsection
