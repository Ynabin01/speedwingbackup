@if (isset($sliders))
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @for ($i = 0; $i < count($sliders); $i++)
                <div class="carousel-item @if($i==0) active @endif">
                    <img class="w-100" src="{{ $sliders[$i]->banner_image }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-3 animated slideInDown">{{ $sliders[$i]->caption }}</h1>
                            <h5 class="display-1 text-white mb-md-4 animated zoomIn"> {!! htmlspecialchars_decode($sliders[$i]->short_content ?? '') !!} </h5>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a> -->
                            <!-- <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endif
