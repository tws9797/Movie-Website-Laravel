<?php
use App\Common;
 ?>

@extends('layouts.movie')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="form-group">
<!-- New Division Form -->
{!! Form::model($movie, [
'route' => ['movie.store'],
'class' => 'form-horizontal',
'files' => true
]) !!}

<!-- Title -->
<div class="form-group row">
{!! Form::label('movie-title', 'Title', [
'class' => 'control-label col-sm-3',
]) !!}  
<div class="col-sm-9">
{!! Form::text('title', null, [
'id' => 'movie-title',
'class' => 'form-control',
'placeholder' => 'Enter title...',
'maxlength' => 100,
]) !!}
</div>
</div>

<!-- Genre -->
<div class="form-group row">
{!! Form::label('movie-genre', 'Genre',[
'class' => 'control-label col-sm-3'
]) !!}
<div class="col-sm-9">
{!! Form::select('genre', Common::$genres, null, [
'class' => 'form-control',
'placeholder' => '-- Select genre --'
]) !!}
</div>
</div>

<!--Description-->
<div class="form-group row">
  {!! Form::label('movie-description','Description',[
  'class' => 'control-label col-sm-3',
  ])  !!}
  <div class="col-sm-9">
    {!! Form::textarea('description',null,[
    'id' => 'movie-description',
    'class' => 'form-control',
    'placeholder' => 'Enter description...'
    ]) !!}
  </div>
</div>

<!--Year-->
<div class="form-group row">
  {!! Form::label('movie-year','Year',[
  'class' => 'control-label col-sm-3'
  ])  !!}
  <div class="col-sm-2">
  {!! Form::selectRange('year',1900,2019,[
  'id' => 'movie-year',
  'class' => 'form-control',
  ])!!}
</div>
</div>

<div class="form-group row">
  {!! Form::label('movie-image','Image',[
  'class' => 'control-label col-sm-3'
  ])  !!}
<div class="col-sm-4">
  {!! Form::file('image',['id'=>'movie-image','class'=>'form-control']) !!}
</div>
</div>

 <div class="form-group row">
 <div class="col-sm-offset-3 col-sm-6">
 {!! Form::button('Save', [
 'type' => 'submit',
 'class' => 'btn btn-primary',
 ]) !!}
 </div>
 </div>
 {!! Form::close() !!}
 </div>

 @endsection
