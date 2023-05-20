  
  <!-- About Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -126px; margin-bottom: -128px;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h1 class="fw-bold text-primary text-uppercase">{{ $about->caption ?? '' }}</h1>
                    <h5 class="mb-0"> {!! htmlspecialchars_decode($about->short_content ?? '') !!}</h5>
                </div>
                <p class="mb-4" style="margin-top: -26px;">{!! htmlspecialchars_decode($about->long_content ?? '') !!}
                </p>
                
                <a href="about-us/introduction" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">View More</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="{{ $about->banner_image ?? '' }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
