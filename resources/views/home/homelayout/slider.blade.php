@php 

$slider = App\Models\Slider::findOrFail(1);

@endphp
  <div class="lonyo-hero-section light-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-hero-content" data-aos="fade-up" data-aos-duration="700">
            <h1 class="hero-title" id="slider-title" data-id="{{ $slider->id }}" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" >{{ $slider->tittle }}</h1>
            <p class="text" id="slider-description" data-id="{{ $slider->id }}" contenteditable="{{ auth()->check() ? 'true' : 'false' }}">{{  $slider->description  }}</p>
            <div class="mt-50" data-aos="fade-up" data-aos-duration="900">
              <a href="{{  $slider->link  }}" class="lonyo-default-btn hero-btn"> Create a free account</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="lonyo-hero-thumb" data-aos="fade-left" data-aos-duration="700">
              <img src="{{ asset($slider->image) }}" alt="">
            <div class="lonyo-hero-shape">
              <img src="{{ asset('frontend/assets/images/shape/hero-shape1.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
document.addEventListener('DOMContentLoaded', function () {

    function saveChanges(element) {
        let sliderId = element.dataset.id;
        let field = element.id === "slider-title" ? "tittle" : "description";
        let newValue = element.innerText.trim();

        fetch(`/edit-slider/${sliderId}`, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                [field]: newValue
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log(`${field} updated successfully`);
            }
        })
        .catch(error => console.error("Error:", error));
    }

    // Auto-save on Enter
    document.addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
            e.preventDefault();
            saveChanges(e.target);
        }
    });

    // Losing focus
    const titleElement = document.getElementById("slider-title");
    const descElement = document.getElementById("slider-description");

    titleElement.addEventListener("blur", function () {
        saveChanges(titleElement);
    });

    descElement.addEventListener("blur", function () {
        saveChanges(descElement);
    });

});
</script>
