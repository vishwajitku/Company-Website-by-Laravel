@php 

  $features = App\Models\Features::latest()->get(); 

@endphp
<div class="lonyo-content-shape1">
    <img src="{{ asset('frontend/assets/images/shape/shape1.svg') }}" alt="">
  </div>
  <div class="lonyo-section-padding2 position-relative">
    <div class="container">
      <div class="lonyo-section-title center">
        <h2>Features that make spending smarter</h2>
      </div>
      <div class="row">
        @foreach($features as $feature)
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-service-title">
              <h4>{{ $feature->title }}</h4>
              <img src="{{ asset('frontend/assets/images/v1/'.$feature->icon.'.svg') }}" alt="">
            </div>
            <div class="lonyo-service-data">
              <p>{{ $feature->description }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="lonyo-feature-shape"></div>
  </div>