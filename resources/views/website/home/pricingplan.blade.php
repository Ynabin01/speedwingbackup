
    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -130px;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!-- <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5> -->
                 <h1 class="text-primary mb-1">A VARIETY OF INDUSTRIES</h1>
                <!--<h1 class="mb-0"> A variety of industries:</h1>-->
            </div>
            
                <div class="row g-0">
                    @foreach ($pricingplan as $prc)
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                            <div class="@if($loop->iteration==2)
                                bg-white rounded shadow position-relative
                                @else
                                bg-light rounded 
                            @endif 
                            ">
                                <div class="border-bottom py-4 px-5 mb-4">
                                        <h4 class="mb-0"> {{$prc->caption ?? ''  }}</h4>
                                        <!--<h4 class="text-primary mb-1">{{$prc->caption ?? ''  }} </h4>-->
                                    <!-- <small class="text-uppercase">For Small Size Business</small> -->
                                </div>
                                <div class="p-5 pt-0">
                                    <!-- <h1 class="display-5 mb-3">
                                        <small class="align-top"
                                            style="font-size: 15px; line-height: 45px;"></small> Engineers (Civil, Structural, Electrical, Mechanical, etc.)
                                    </h1> -->
                                    @foreach ($prc->childs as $child)
                                        <div class="d-flex justify-content-between mb-3">
                                            <span>{{$child->caption ?? ''  }}</span>                                            
                                            <i class="fa fa-check text-primary pt-1"></i>
                                        </div>
                                    @endforeach
                                    <!-- <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a> -->
                                </div>
                            </div>
                        </div>  
                    @endforeach
                </div>
            {{-- <a href="/" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn job" data-wow-delay="0.9s">Read More</a> --}}
        </div>
    </div>
  