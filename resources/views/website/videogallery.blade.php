
@extends("layouts.master")
@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
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
<!-- Main Content Wrapper Start -->
<main class="main-content-wrapper">
    <div class="inner-page-content">
        <!-- Services Area Start -->
        <section class="services-area ptb--60">
            <div class="container">
                <div class="row">
                    @foreach ($photos as $photo)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb--30">
                        <iframe width="100%" height="315" src="{{ $photo->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    @endforeach               
                </div>
            </div>
        </section>
        <!-- Services Area End -->
    </div>
</main>
<!-- Main Content Wrapper End -->
@endsection