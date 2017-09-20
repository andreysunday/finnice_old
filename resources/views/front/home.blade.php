@extends('front.master')

@section('title')
    <title>Finnice</title>
@endsection

@section('header')
    <!-- Top Nav -->
    {!! $header !!}
    <!-- /Top Nav -->
@endsection

@section('slider')
    <!-- LAYER SLIDER -->
    {!! $slider !!}
    <!-- /LAYER SLIDER -->
@endsection

@section('preloader')
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="inner">
            <span class="loader"></span>
        </div>
    </div>
    <!-- /PRELOADER -->
@endsection