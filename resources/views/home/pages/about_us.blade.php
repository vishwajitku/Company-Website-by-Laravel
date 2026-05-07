@extends('home.home_master')
@section('home')
 



  <!-- End mobile menu -->

  <div class="breadcrumb-wrapper light-bg">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0">About Us</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">About Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->



  <div class="lonyo-section-padding6">
  </div>
  <!-- end rating -->

  <div class="lonyo-section-padding3">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="lonyo-about-us-thumb2 pr-51" data-aos="fade-up" data-aos-duration="700">
            <img src="{{ asset($aboutus->image_one)}}" alt="">
          </div>
        </div>
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-default-content pl-32" data-aos="fade-up" data-aos-duration="900">
            <h2>{{ $aboutus->title_one}}</h2>
            <p>    {!! nl2br(e($aboutus->description_one)) !!}
</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->

  <section class="lonyo-section-padding3 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="lonyo-default-content pr-50 feature-wrap">
            <h2>{{ $aboutus->title_two}}</h2>
            <p class="max-w616"> {!! nl2br(e($aboutus->description_two)) !!}</p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="lonyo-about-us-feature-wrap one" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-about-us-feature-icon">
              <img src="{{ asset('frontend/assets/images/about-us/icon1.svg')}}" alt="">
            </div>
 
          </div>
          <div class="lonyo-about-us-feature-wrap two" data-aos="fade-up" data-aos-duration="700">
            <div class="lonyo-about-us-feature-icon">
              <img src="{{ asset('frontend/assets/images/about-us/icon2.svg')}}" alt="">
            </div>
            <div class="lonyo-about-us-feature-content">
              <h4>{{ $aboutus->title_card_one }}</h4>
              <p>{{ $aboutus->description_card_one }}</p>
            </div>
          </div>
          <div class="lonyo-about-us-feature-wrap three" data-aos="fade-up" data-aos-duration="900">
            <div class="lonyo-about-us-feature-icon">
              <img src="{{ asset('frontend/assets/images/about-us/icon3.svg')}}" alt="">
            </div>
            <div class="lonyo-about-us-feature-content">
              <h4>{{ $aboutus->title_card_two }}</h4>
              <p>{{ $aboutus->description_card_two }}</p>
            </div>
          </div>
          <div class="lonyo-about-us-feature-wrap mb-0 four" data-aos="fade-up" data-aos-duration="1100">
            <div class="lonyo-about-us-feature-icon">
              <img src="{{ asset('frontend/assets/images/about-us/icon4.svg')}}" alt="">
            </div>
            <div class="lonyo-about-us-feature-content">
             <h4>{{ $aboutus->title_card_three }}</h4>
              <p>{{ $aboutus->description_card_three }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lonyo-feature-shape shape2"></div>
  </section>
  <!-- end feature -->

    @php
    $team = App\Models\Team::latest()->get();
     @endphp
  <div class="lonyo-section-padding10 team-section">
    <div class="shape">
      <img src="asset('frontend/assets/images/about-us/shape1.svg')" alt="">
    </div>
    <div class="container">
      <div class="lonyo-section-title center max-width-750">
        <h2>We always believe in the strength of our team</h2>
      </div>
      <div class="row">
           @foreach ($team as $item) 
        <div class="col-lg-3 col-md-6">
          <div class="lonyo-team-wrap" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-team-thumb">
              <a href="single-team.html"><img src="{{ asset($item->image ) }}"  alt=""></a>
            </div>
            <div class="lonyo-team-content2">
              <a href="single-team.html">
                <h6 style="color:white;">{{ $item->name }}</h6>
              </a>
              <p style="color:white;">{{ $item->position }}</p>
            </div>
          </div>
        </div>
        @endforeach



      </div>
    </div>
  </div>
  <!-- end team -->

  <div class="lonyo-content-shape">
    <img src="assets/images/shape/shape2.svg" alt="">
  </div>
  <div class="lonyo-content-shape">
    <img src="assets/images/shape/shape2.svg" alt="">
  </div>
  <div class="lonyo-content-shape">
    <img src="assets/images/shape/shape2.svg" alt="">
  </div>
 @include('home.homelayout.answers')
  <!-- end faq -->


  @include('home.homelayout.apps')




@endsection

