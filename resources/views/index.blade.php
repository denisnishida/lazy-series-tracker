@extends('layout')

@section('content')
    @if (Auth::check())
    Welcome, {{ Auth::user()->name }}!
    @else
    Welcome!
    @endif
@stop

{{-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Welcome</h1>
    </body>
</html> --}}
