 
@extends("layouts.master")

@section('content')
@include('website.breadcrumb')

    {{-- <!-- Full Screen Search Start -->
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
    <!-- Full Screen Search End --> --}}


     <!-- Start Portfolio -->
     <section class="section-padding">
        <div class="container">
            <div class="row">
                @foreach ($job_categories as $cat)

                <div class="col-lg-4 col-md-6">
                    <div class="service-block-3">
                        <div class="service-image animate-img">
                            <img src="{{ $cat->banner_image }}" class="image-fit" alt="">
                        </div>
                        <div class="service-caption">
                            <div class="left-side">
                                <h4 class="fw-600 no-margin"><a href="{{ route('JobList', $cat->nav_name) }} ">{{ $cat->caption }}</a>
                            </div>
                            <a href="{{ route('JobList', $cat->nav_name) }}" class="block-btn">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div> 
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Portfolio -->
    
    @endsection