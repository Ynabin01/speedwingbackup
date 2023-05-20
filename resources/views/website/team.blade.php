
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
    @if (@isset($teams))
    
        <!-- Team Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                    <!-- <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1> -->
                </div>
                <div class="row g-5">
                        @foreach ($teams as $team)
                            <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                <div class="team-item bg-light rounded overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="{{ $team->banner_image ?? '' }}" alt="">
                                        <div class="team-social">
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <h4 class="text-primary">{{ $team->caption ?? '' }}</h4>
                                        <p class="text-uppercase m-0">{{ $team->short_content ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
        <!-- Team End -->

    @endif
@endsection