@extends("layouts.master")

@section('content')

@include('website.breadcrumb')

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
    
    @if (@isset($notices))
        <!-- About Start -->
        <div class="container-fluid  wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">Orientation</h5>
                            <!-- <h1 class="mb-0">About Company:</h1> -->
                        </div>
                    {{-- @foreach ($notices as $notice) --}}
                        <div class="col-lg-12" style="min-height: 500px;">
                            <div class="position-relative h-100">
                                <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ $notices->banner_image ?? '' }}"
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <p class="mt-4">{!! htmlspecialchars_decode($notices->long_content ?? '') !!}</p>
                          
                    {{-- @endforeach --}}
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 ">
                        <div class="siderbar-link-list">
                            <h5>OUR SERVICES</h5>
                            <hr>
                            <ul>
                                @foreach ($services as $serv ) 
                                <li>
                                    <a href="">{{ $serv->caption ?? '' }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
        <!-- About End -->
    @endsection
