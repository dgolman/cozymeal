@extends('layouts.master')
 
@section('content')
 
@include('meals.errors')

<h1>Edit Meal - {{$meal->title}}</h1>
<p class="lead">Edit this meal below. <a href="{{ route('meals.index') }}">Go back to all meals.</a></p>
<hr>

{{ Form::model($meal, [
    'method' => 'PATCH',
    'route' => ['meals.update', $meal->id]
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
 
{{ Form::submit('Update Meal', ['class' => 'btn btn-primary']) }}
 
{{ Form::close() }}
 
@stop