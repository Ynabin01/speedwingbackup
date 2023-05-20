   {{-- Testimonial --}}
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -123px;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary text-uppercase">Testimonial</h1>
            <!-- <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1> -->
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            @foreach ($testimonial as $test)
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ $test->banner_image ?? '' }}" style="width: 60px; height: 60px;">
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">{{ $test->caption ?? '' }}</h4>
                        <small class="text-uppercase">{!! htmlspecialchars_decode($test->short_content ?? '') !!}</small> 
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    {!! htmlspecialchars_decode($test->long_content ?? '') !!}
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->
