<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -124px;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary text-uppercase">Our Services</h1>
        </div>
        <div class="row g-5">
            @foreach ($services as $serv)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">{{ $serv->caption ?? '' }}</h4>
                    <p class="m-0">{{ $serv->short_content ?? '' }}
                    </p>
                    <a class="btn btn-lg btn-primary rounded" href="/our-services/our-services-one">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
