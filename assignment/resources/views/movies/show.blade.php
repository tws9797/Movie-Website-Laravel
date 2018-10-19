<?php

use App\Common;

?>
@extends('layouts.movie')

@section('content')

 <!-- Bootstrap Boilerplate... -->

 <div class="panel-body">
   <div class="title">
   <small style= "margin-bottom:0px;"><i style= "font-size:15px;font-weight:bold;">{{ Common::$genres[$movie->genre] }}</i></small>
   <h1 class="header" style= "margin-top:0px; margin-bottom:10px; text-align:center">{{$movie->title}}<span style= "font-size:20px">&ensp;({{$movie->year}})</span></h1>
  </div>
  <div class="left">
   <img class = "left" style= "width:250px;height:350px" src="../{{$movie->image}}" alt="The image is not working">
 </div>
 <div class="content">
   {{$movie->description}}
 </div>
</div>

 @endsection
