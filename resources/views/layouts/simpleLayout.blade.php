@extends('layouts.layout')
@section('otherLink')
    <link rel="stylesheet" href="{{asset('css/developper.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/posts.css')}}"/>
    @yield('otherLinks')
@endsection
@section('main')
    @include('layouts.partials.simpleSidebar')
    <div class="postsMainContent">
        @yield('content')
    </div>
@endsection