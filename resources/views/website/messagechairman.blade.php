@extends("layouts.master")
@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn"> Chairman Message</h1>
            <a href="index.html" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Chairman Message</a>
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
<section class="section-padding bg-light-white">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Chairman Message</h5>
            <!-- <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1> -->
        </div>
        <div class="massagefromch">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-details mb-md-80">
                        <!-- post quote -->
                        <blockquote class="bg-orange">
                            {{-- <cite class="text-black">by Chairman</cite> --}}
                        </blockquote>
                        <figure class="image-alignment left">
                            <img src="{{ $messagechairman->banner_image ?? '' }}" class="image-fit" alt="">
                        </figure>
                        <h3 class="fw-600 text-blue">{{ $messagechairman->caption ?? '' }}</h3>
                        <p class="fw-500 mb-xl-10">{!! htmlspecialchars_decode($messagechairman->short_content ?? '') !!}</p>
                        <p class="fw-500 mb-xl-10">{!! htmlspecialchars_decode($messagechairman->long_content ?? '') !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 ">
                    <div class="siderbar-link-list">
                        <h5>Quick Links</h5>
                        <hr>
                        <ul>
                            <li>
                                <a href="/about-us/introduction">About Us</a>
                            </li>
                            <li>
                                <a href="/our-services/our-services-one">Our Service</a>
                            </li>
                            <li>
                                <a href="/documents/hiring-process">Hiring Process</a>
                            </li>
                            <li>
                                <a href="/job-seeker_submenu/jobcategory">Jobcategory</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection