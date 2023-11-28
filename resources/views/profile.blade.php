@extends ('adminlte::page')
@section ('title', 'Profile')

@section ('content_header')
<h1>Profile</h1>
@stop

@section ('content')
<p>hallo {{$user}}, Welcome To My Profile</p>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>console.log('Hai')</script>
@stop
    