@extends("layouts.master")
@section('content')

<!-- Full Screen Search Start -->
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            
            <h1 class="display-4 text-white animated zoomIn">{{$slug2->caption ?? ''}}</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            @if(isset($slug2))
            <a href="" class="h5 text-white">{{$slug2->caption ?? ''}}</a>
            @endif
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


 <!-- Blog Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ $detailspage->banner_image ?? '' }}" alt="">
                    <h1 class="mb-4">{{ $detailspage->caption ?? '' }}</h1>
                    <p>{!! htmlspecialchars_decode($detailspage->short_content ?? '') !!}</p>
                    <p>{!! htmlspecialchars_decode($detailspage->long_content ?? '') !!}</p>
                </div>
                <!-- Blog Detail End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Category Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="/about-us/introduction"><i
                                    class="bi bi-arrow-right me-2"></i>About Us</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="/our-services/our-services-one"><i
                                    class="bi bi-arrow-right me-2"></i>Our Services</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="/documents/hiring-process"><i
                                    class="bi bi-arrow-right me-2"></i>Hiring Process</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="/job-seeker_submenu/jobcategory"><i
                                    class="bi bi-arrow-right me-2"></i>Jobcategory</a>
                        </div>
                    </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Recent Post</h3>
                    </div>
                    @if (isset($newsevents))
                    @foreach ($newsevents as $index => $newsevent)
                    {{-- {{ $newsevent }} --}}
                        @if ($index >= 5){{-- Limit the loop to 5 iterations --}}
                            @break
                        @endif
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ $newsevent->banner_image ?? '' }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="#" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{!! htmlspecialchars_decode($newsevent->short_content ?? '') !!}
                            </a>
                        </div>
                        @endforeach
                    @endif
                </div>
                <!-- Recent Post End -->

                

               
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection