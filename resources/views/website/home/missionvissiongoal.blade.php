
  <!-- Facts Start -->
   <div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            @foreach ( $vision as $visio )
                
          
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 60px; height: 40px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    
                    <div class="ps-4">
                        <h3 class="text-white mb-0">{{ $visio->caption ?? '' }}</h3>
                        <!-- <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1> -->
                        <p class="m-0 mission">{!! htmlspecialchars_decode($visio->long_content ?? '') !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ( $missons as $misson )
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 60px; height: 40px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    
                    <div class="ps-4">
                        <h3 class="text-black mb-0">{{ $misson->caption ?? ''}}</h3>
                        <!-- <h1 class="mb-0" data-toggle="counter-up">12345</h1> -->
                        <p class="m-0 missionn">{!! htmlspecialchars_decode($misson->long_content ?? '') !!} 
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ( $goal as $goa )
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 60px; height: 40px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h3 class="text-white mb-0">{{ $goa->caption ?? '' }}</h3>
                        <!-- <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1> -->
                        <p class="m-0 mission">{!! htmlspecialchars_decode($goa->long_content ?? '') !!} 
                        </p>
                    </div>
                  
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Facts Start -->
