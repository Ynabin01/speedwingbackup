   <!-- Vendor Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -103px; margin-bottom: -82px;">
       <div class="container py-5 mb-5">
           <div class="bg-white">
               <div class="owl-carousel vendor-carousel">
                @foreach ($partners as $partner)    
                <img src="{{$partner->banner_image ?? '' }}" alt="">
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
