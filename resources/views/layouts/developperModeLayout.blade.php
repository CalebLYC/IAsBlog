@extends('layouts.layout')
@section('otherLink')
    <link rel="stylesheet" href="{{asset('css/posts.css')}}"/>
    @yield('otherLinks')
@endsection
@section('main')
    @include('layouts.partials.sidebar')
    @yield('content')
@endsection