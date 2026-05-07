@php 

  $ourapp = App\Models\Ourapp::findOrFail(1);  

@endphp
  <section class="lonyo-cta-section bg-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="lonyo-cta-thumb" data-aos="fade-up" data-aos-duration="500">
            <img src="{{ asset($ourapp->image) }}" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="lonyo-default-content lonyo-cta-wrap" data-aos="fade-up" data-aos-duration="700">
            <h2>{{  $ourapp->title }}</h2>
            <p>{{  $ourapp->description }}</p>
            <div class="lonyo-cta-info mt-50" data-aos="fade-up" data-aos-duration="900">
              <ul>
                <li>
                  <a href="{{  $ourapp->playstore_link }}"><img src="{{ asset('frontend/assets/images/v1/app-store.svg') }}" alt=""></a>
                </li>
                <li>
                  <a href="{{  $ourapp->applestore_link }}"><img src="{{ asset('frontend/assets/images/v1/play-store.svg') }}" alt=""></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>