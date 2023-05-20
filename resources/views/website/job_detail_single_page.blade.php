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


    <!-- About Start -->
    <div class="section-title position-relative pb-3 text-center">
        <!-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> -->
        <h1 class="mb-0 text-center">Jobs Details</h1>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="card " style="max-width:100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                              
                                    
                                <div class="card-img">
                                    <img src="{{ $job->banner_image}}" class="card-img" alt="...">
                                </div>
                           

                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $job->getJob->caption }}</h5>
                                    <ul class="mt-4">
                                        <li class="mt-3">
                                            <h5><i class="fa fa-map-marker"></i> <span>{{ $job->getJob->country }}</span></h5>
                                        </li>
                                        <li class="mt-3">
                                            <h5>Company Name: <span>{{ $job->getJob->company_name }}</span></h5>
                                        </li>
                                        <li class="mt-3">
                                            <h5>Minimum Salary : <span>{{ $job->getJob->salary}}</span></h5>
                                        </li>
                                        <li class="mt-3">
                                            <h5>Required No: <span>{{ $job->getJob->total_demand}}</span></h5>
                                        </li>
                                        {{-- <li class="mt-3">
                                            <h5>Minimum Qualification: <span>{{ $job->getJob->minimum_qualification }}</span></h5>
                                        </li> --}}
                                        <li class="mt-3">
                                            <h5>LT Number: <span>{{ $job->getJob->lt_number }}</span></h5>
                                        </li>
                                    </ul>
                                    <div class="ml-auto">
                                        <a class="btn" href="/jobapply/{{ $job->nav_name }}">apply now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border"></div>
                            <div class="col-sm-12">
                                <div class="job-req-content">
                                    <h5>Job Description</h5>
                                    <ul>
                                        <li>
                                          <span>{!! htmlspecialchars_decode($job->long_content ?? '') !!}</span>
                                        </li>
                                    </ul>
                                </div>


                                {{-- @foreach ($prc->childs as $child)
                                <div class="d-flex justify-content-between mb-3">
                                    <span>{{$child->caption ?? ''  }}</span>                                            
                                    <i class="fa fa-check text-primary pt-1"></i>
                                </div>
                            @endforeach --}}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <!-- <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="img/about.jpg" style="object-fit: cover;"> -->
                        <div class="container__img-holderrr">
                            <img src="{{ $job->banner_image }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="img-popup">
                    <img src="" alt="Popup Image">
                    <div class="close-btn">
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
@endsection