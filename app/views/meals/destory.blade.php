@extends('layouts.master')
 
@section('content')
 
<h1>{{ $meal->title }} - {{ $meal->price }}</h1>
<p class="lead">{{ $meal->description }}</p>
<hr>
 
<div class="row">
    <div class="col-md-6">
        <a href="{{ route('meals.index') }}" class="btn btn-info">Back to all meals</a>
        <a href="{{ route('meals.edit', $meal->id) }}" class="btn btn-primary">Edit Meal</a>
    </div>
    <div class="col-md-6 text-right">
        { Form::open([
            'method' => 'DELETE',
            'route' => ['meals.destroy', $meal->id]
        ]) }
        { Form::submit('Delete this Meal?', ['class' => 'btn btn-danger']) !!}
        { Form::close() !!}
    </div>
</div>
 
@stop