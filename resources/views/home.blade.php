@extends('layouts.main') 
@section('title', 'Home Page')
@section('content')
    @include('include.product-offer')
    @include('include.shop-button-area')
    @include('include.main-slider-product')
    @include('include.how-we-work')
    @include('include.featured-product')
    @include('include.offers-slider')
    @include('include.blog')
    @include('include.testimonial')

@endsection
