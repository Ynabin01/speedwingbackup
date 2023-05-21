@extends("layouts.master")
@section('content')

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

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
           
            <!-- Blog list Start -->
                <div class="col-lg-8">
                    @foreach ($newsevents as $newsevent)
                        <div class="row g-5">
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ $newsevent->banner_image ?? '' }}" alt="">
                                        <!-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> -->
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>{!! htmlspecialchars_decode($newsevent->caption ?? '') !!}</small>
                                            <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $newsevent->icon_image_caption ?? '' }}</small> 
                                        </div>
                                        <h4 class="mb-3">{!! htmlspecialchars_decode($newsevent->short_content ?? '') !!}</h4>
                                        <p>{!! htmlspecialchars_decode($newsevent->long_content ?? '') !!}</p>
                                        <a class="text-uppercase" href="@if (@isset($newsevent->childs->first()->id))
                                            {{route('FullStoryRead', ['id' => $newsevent->childs->first()->id])}}
                                        @else
                                            #
                                        @endif ">Read More <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                    <!-- Blog list End -->
             
            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <!-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div> -->
                <!-- Search Form End -->

                <!-- Category Start -->
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
                        @if ($index >= 5){{-- Limit the loop to 5 iterations --}}
                            @break
                        @endif
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ $newsevent->banner_image ?? '' }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="blog-detail.html" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{!! htmlspecialchars_decode($newsevent->short_content ?? '') !!}
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