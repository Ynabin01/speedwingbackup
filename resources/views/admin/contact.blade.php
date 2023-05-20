

 
@extends("layouts.master")

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Contact</h1>
            <a href="index.html" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">contact</a>
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


<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
            <!-- <h1 class="mb-0"></h1> -->
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Phone Number</h5>
                        <h4 class="text-primary mb-0">{{ $global_setting->phone }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email</h5>
                        <h4 class="text-primary mb-0">{{ $global_setting->site_email }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Location</h5>
                        <h4 class="text-primary mb-0">{{ $global_setting->website_full_address }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form action="{{ route('contactstore') }}" method="post" id="contact-form"
                enctype='multipart/form-data'>
                @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="first_name" name="first_name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="subject" name="subject" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea type="message" name="message" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                        @if (Session::has('contact'))
                         <p class="alert alert-info">{{ Session::get('contact') }}</p>
                        @endif    
                </div>
                    
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.166805583952!2d85.32510959289566!3d27.712135622116627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c2b68531f5%3A0x9d6efab885001c06!2sSpeed%20Wings%20Human%20Resource!5e0!3m2!1sen!2snp!4v1684472506287!5m2!1sen!2snp" 
               width="600" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                <!--<iframe class="position-relative rounded w-100 h-100"-->
                <!--    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.052817908726!2d85.33575932969873!3d27.68476237809341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19936e507c67%3A0xc7e463442521cb4d!2z4KSG4KSy4KWL4KSV4KSo4KSX4KSwLCDgpJXgpL7gpKDgpK7gpL7gpKHgpYzgpIEgNDQ2MDA!5e0!3m2!1sne!2snp!4v1678339793320!5m2!1sne!2snp"-->
                <!--    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"-->
                <!--    tabindex="0"></iframe>-->
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection

{{-- <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Contact</h1>
            <a href="index.html" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">contact</a>
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


<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
            <!-- <h1 class="mb-0"></h1> -->
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Phone Number</h5>
                        <h4 class="text-primary mb-0">{{ $global_setting->phone }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email</h5>
                        <h4 class="text-primary mb-0">{{ $global_setting->site_email }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Location</h5>
                        <h4 class="text-primary mb-0">{{ $global_setting->website_full_address }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form action="{{ route('contactstore') }}" class="form" method="post" id="contact-form"
                enctype='multipart/form-data'>
                @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="first_name" name="first_name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="subject" name="subject" class="form-control border-0 bg-light px-4" placeholder="subject" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea  type="message"  name="message" class="form-control border-0 bg-light px-4 py-3" rows="4"  placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                    @if (Session::has('contact'))
                    <p class="alert alert-info">{{ Session::get('contact') }}</p>
                    @endif
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.052817908726!2d85.33575932969873!3d27.68476237809341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19936e507c67%3A0xc7e463442521cb4d!2z4KSG4KSy4KWL4KSV4KSo4KSX4KSwLCDgpJXgpL7gpKDgpK7gpL7gpKHgpYzgpIEgNDQ2MDA!5e0!3m2!1sne!2snp!4v1678339793320!5m2!1sne!2snp"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End --> --}}

 

{{-- <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current"><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->


    <main class="main-content-wrapper">
        <div class="inner-page-content">
            <!-- Contact Area Start -->
            <section class="contact-area ptb--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 mb-md--50">
                            <div class="heading mb--42">
                                <h2>Get In Touch</h2>
                                <hr class="delimeter">
                            </div>
                            <div class="contact-info mb--30">
                                <p><i class="fa fa-map-marker"></i>{{ $global_setting->website_full_address }} </p>
                                <p><i class="fa fa-phone"></i> <a
                                        href="tel:{{ $global_setting->phone }}">{{ $global_setting->phone }}</a>, <a
                                        href="tel:{{ $global_setting->phone_ne }}">{{ $global_setting->phone_ne }}</a></p>
                                <p><i class="fa fa-envelope"></i> <a
                                        href="mailto:{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a>
                                </p>
                                <p><i class="fa fa-envelope"></i> <a
                                        href="mailto:{{ $global_setting->page_description }}">{{ $global_setting->page_keyword }}</a>
                                </p>
                            </div>
                            <ul class="social social-outline">
                                <li class="social__item">
                                    <a href="{{ $global_setting->facebook ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->extra_one ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->twitter ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->linkedin ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 offset-lg-1">
                            <div class="heading mb--42">
                                <h2>Contact Us</h2>
                                <hr class="delimeter">
                            </div>
                            <form action="{{ route('contactstore') }}" class="form" method="post" id="contact-form"
                                enctype='multipart/form-data'>
                                @csrf
                                <input type="email" name="email" id="email" class="form__input mb--30"
                                    placeholder="Email*">
                                <input type="text" name="first_name" id="first_name" class="form__input mb--30"
                                    placeholder="Name*">
                                <textarea class="form__input form__input--textarea mb--30" placeholder="Message" id="con_message" name="message"></textarea>
                                <button type="submit" class="btn btn-shape-round form__submit">Send Request</button>
                                <div class="form__output"></div>

                                @if (Session::has('contact'))
                                    <p class="alert alert-info">{{ Session::get('contact') }}</p>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Area End -->

            <!-- Google Map Area Start -->
            <!-- Google Map -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.845659969248!2d85.31929851541567!3d27.722051231451736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1919f7dd0685%3A0xc59baa0caae9c83d!2sLazimpat%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1670754752618!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- Google Map Area End -->
        </div>
       
    </main> --}}
{{-- @endsection --}}
