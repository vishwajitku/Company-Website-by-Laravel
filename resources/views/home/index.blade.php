@extends('home.home_master')

@section('home')

   @include('home.homelayout.slider')

  <!-- end hero -->

    @include('home.homelayout.features')
  <!-- end content -->
    
    @include('home.homelayout.clarifies')

  <!-- end content -->

  @include('home.homelayout.get_all')
  <!-- end content -->

 @include('home.homelayout.usability')
  <!-- end video -->

  @include('home.homelayout.review')
  <!-- end testimonial -->

 @include('home.homelayout.answers')
  <!-- end faq -->

  <!-- end cta -->

@include('home.homelayout.apps')



@endsection