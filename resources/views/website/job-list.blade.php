@extends("layouts.master")

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            
            <h1 class="display-4 text-white animated zoomIn">Jobs List</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
           
            <a href="/job-seeker/job-categorie" class="h5 text-white">Jobs Category</a>
           
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

    <!-- ....jobs-list start.... -->
    <div class="innerpage_wrapper">
        <div class="job_sector_main">
            <div class="container">
                <div class="row">
                    @if (isset($jobs))
                     @foreach ($jobs as $job)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <a href="/jobdetail/{{ $job->nav_name }}">
                                <div class="job-innear-page-content">
                                    <img src="{{ $job->banner_image }}" alt="Avatar" class="image">
                                    <div class="overlay">{{ $job->caption }}<span> <br>({{$job->getJob->total_demand}})</span><br><span class="read-more">Read
                                            More</span></div>
                                </div>
                            </a>
                        </div>
                     @endforeach
                    @endif    
                     
                </div>
            </div>

        </div>

    </div>
    
    @endsection
