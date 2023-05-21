@extends('layouts.master')

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
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<!-- About Start -->
@if ($normal->banner_image)
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ $normal->caption ?? ''}}</h5>
                        <h1 class="mb-0">@php echo $normal->short_content; @endphp</h1>
                    </div>
                    <p class="mb-4">@php echo $normal->long_content; @endphp</p>
                    <!-- <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request
                        A Quote</a> -->
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ $normal->banner_image }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ $normal->caption }}</h5>
                    </div>
                    <p class="mb-4">@php echo $normal->long_content; @endphp</p>
                    <!-- <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request
                        A Quote</a> -->
                </div>
            </div>
        </div>
    </div>
@endif
<!-- About End -->

@endsection
