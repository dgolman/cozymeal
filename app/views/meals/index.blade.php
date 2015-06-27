@extends('layouts.master')
 
@section('content')
 
<h1>Meal List</h1>
<p class="lead">Here's a list of all your meals. <a href="{{ route('meals.create') }}">Add a new one?</a></p>
<hr>

<div class="row">
	@foreach($meals as $meal)
		<div class="col-md-4">
			<img src="http://placehold.it/350x150">
		    <h3>
		    	<span class="pull-right">{{ $meal->price}}</span>
		    	{{ $meal->title }} <br/>
		    	<small>{{ $meal->description}}</small>
		    </h3>
		    
		    <p>
		        <a href="{{ route('meals.show', $meal->id) }}" class="btn btn-info">View Meal</a>
		        <a href="{{ route('meals.edit', $meal->id) }}" class="btn btn-primary">Edit Meal</a>
		    </p>
		    <hr>
	    </div>
	@endforeach
</div>

@stop