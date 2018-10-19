<?php

use App\Common;

?>
@extends('layouts.movie')

@section('content')
<!-- Bootstrap Boilerplate... -->
  Sort By :
  {!! link_to_route(
  'sortByYear',
  $title = 'Year'
  ) !!}
  /
  {!! link_to_route(
  'sortByAlpha',
  $title = 'Alphabetically'
  ) !!}

   @if (count($movies) > 0)
   <div class="container" width=100%>
   @foreach ($movies as $i => $movie)
   <div class = "col-sm-4" style="width:25%;padding-top: 30px;">
     <div class = "containerForImage">
       <a href="{!! route('movie.show', [$movie->id]) !!}">
     <img src="{{$movie->image}}" alt="The image is not working" class="image">
     <div class = "overlay">
       {!! $movie->title !!}
     </div>
      </a>
   </div>
   </div>
   <!--<div>
  {!! link_to_route(
  'movie.edit',
  $title = 'edit',
  $parameters = [
  'id' => $movie->id,
  ]
  ) !!}
</div> -->
   @endforeach
   @else
   <div>
   No records found
   </div>
   @endif
   </div>
 {!!  $movies->links()  !!}
 @endsection
