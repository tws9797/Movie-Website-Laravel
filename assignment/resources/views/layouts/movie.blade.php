<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AAA Movie Club</title>
<link rel="stylesheet" href="/css/app.css">
<!-- CSS And JavaScript -->
</head>

<body>
@include('includes.nav')
<div class="container">
  @if(Request::is('/'))
    @include('includes.showcase')
  @endif
  <div class="row">
      @yield('content')
  </div>
@include('includes.footer')
</div>
 </body>
 </html>
