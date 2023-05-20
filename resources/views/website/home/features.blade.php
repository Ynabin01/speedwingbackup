   {{-- <!-- Features Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -126px;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary text-uppercase">WHY CHOOSE US</h1>
            <h5 class="mb-0">Why do Nepalese youth often prefer jobs abroad?</h5>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    @foreach ($features as $feature )
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>{{ $feature->caption ?? '' }}</h4>
                        <p class="mb-0"> {{ $feature->short_content ?? '' }}</p>
                    </div>
                    @endforeach
                    @foreach ($features as $feature )
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>{{ $feature->caption ?? '' }}</h4>
                        <p class="mb-0">{{ $feature->short_content ?? '' }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                        src="/website/img/feature.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    @foreach ($features as $feature )
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>{{ $feature->caption ?? '' }}</h4>
                        <p class="mb-0">{{ $feature->short_content ?? '' }}</p>
                    </div>
                    @endforeach
                    @foreach ($features as $feature )
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>{{ $feature->caption ?? '' }}</h4>
                        <p class="mb-0">{{ $feature->short_content ?? '' }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start --> --}}



   <!-- Features Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style:"margin-top: -124px;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary text-uppercase">WHY CHOOSE US</h1>
         <h5 class="mb-0"><strong> Why do Nepalese youth often prefer jobs abroad ? </strong> </h5> 
          
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>{{ $features[0]->caption ?? "" }}</h4>
                        <p class="mb-0">{{ $features[0]->short_content ?? "" }}</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>{{ $features[1]->caption ?? "" }}</h4>
                        <p class="mb-0">{{ $features[1]->short_content ?? "" }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                        src="/website/img/feature.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>{{ $features[2]->caption ?? "" }}</h4>
                        <p class="mb-0">{{ $features[2]->short_content ?? "" }}</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>{{ $features[3]->caption ?? "" }}</h4>
                        <p class="mb-0">{{ $features[3]->short_content ?? "" }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->
