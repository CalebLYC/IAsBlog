@extends('layouts.layout')
@section('otherLink')
    @yield('otherLinks')
@endsection
@section('main')
    @yield('content')
    @include('layouts.partials.footer')
@endsection