@extends('layouts.master')
 
@section('content')

@include('meals.errors')
 
<h1>Add a New Meal</h1>
<p class="lead">Add to your meal list below.</p>
<hr>


{{ Form::open([
    'route' => 'meals.store'
]) }}
 
<div class="form-group">
    {{ Form::label('title', 'Title:', ['class' => 'control-label']) }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
 
<div class="form-group">
    {{ Form::label('description', 'Description:', ['class' => 'control-label']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('price', 'Price:', ['class' => 'control-label']) }}
    {{ Form::text('price', null, ['class' => 'form-control']) }}
</div>
 
{{ Form::submit('Create new Meal', ['class' => 'btn btn-primary']) }}
 
{{ Form::close() }}

@stop