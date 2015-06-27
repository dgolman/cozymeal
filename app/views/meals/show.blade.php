@extends('layouts.master')
 
@section('content')
 
<div class="row">
	<div class="col-md-7">
		<img src="http://placehold.it/650x450">
	</div>

	<div class="col-md-5">
		<h1>${{ $meal->price }} - <small> per person</small></h1>
		<p>{{ $meal->title }}</p>
		<p class="lead">{{ $meal->description }}</p>
		<hr>
		 
		<a href="{{ route('meals.index') }}" class="btn btn-info">Back to meals</a>
		<a href="{{ route('meals.edit', $meal->id) }}" class="btn btn-primary">Edit meal</a>
		 
		<div class="pull-right">
		    <a href="{{ route('meals.destroy', $meal->id) }}" class="btn btn-danger">Delete this meal</a>
		</div>
 
	</div>
</div>

@stop