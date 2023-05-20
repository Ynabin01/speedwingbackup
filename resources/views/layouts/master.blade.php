@php
$normal_gallary_notice = App\Models\Navigation::query()
->where('nav_category', 'Main')
->where('page_type', 'Normal')

->orderBy('position', 'ASC')
->get();

$menus = App\Models\Navigation::query()
->where('nav_category', 'Main')
->where('page_type', '!=', 'Job')
->where('page_type', '!=', 'Notice')
->where('parent_page_id', 0)
->where('page_status', '1')
->orderBy('position', 'ASC')
->get();
$global_setting = App\Models\GlobalSetting::all()->first();
if (isset($normal)) {
$seo = $normal;
} elseif (isset($job)) {
$seo = $job;
}

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-----SEO--------->

    <title>{{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-----END SEO------->

    <title>Speedwing Human Resource</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ $seo->favicon ?? '/uploads/icons/' . $global_setting->favicon }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/website/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/website/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/website/css/style.css" rel="stylesheet">
</head>

<body>
    @if (Session::has('contact'))
    <script>
        Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Sucessfully Applyed !!',
                showConfirmButton: false,
                timer: 1500
            })
    </script>
    @endif
    <!-- Spinner Start -->
    {{-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End --> --}}

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{
                        $global_setting->website_full_address }}</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{ $global_setting->phone
                        }}</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{ $global_setting->site_email
                        }}</small>
                </div>
            </div>
            <div class="col-lg-2">
                <!-- Start Google Translator START-->
                <style>
                    #google_translate_element span {
                        display: none;
                    }

                    .skiptranslate {
                        font-size: 0 !important;
                    }

                    .skiptranslate div {
                        font-size: 16px;
                    }

                    .goog-te-combo {
                        padding: 6px;
                    }

                    .VIpgJd-ZVi9od-ORHb-OEVmcd {
                        display: none !important;
                    }

                    body {
                        top: 0 !important;
                    }
                </style>
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() { new google.translate.TranslateElement( {pageLanguage: 'en'}, 'google_translate_element' ); } setTimeout(() => { const dropdown = document.querySelector('.goog-te-combo'); const optionText = { '': 'Select language', 'en' : 'English', 'af' : 'Afrikaans', 'sq' : 'Albanian', 'am' : 'Amharic', 'ar' : 'Arabic', 'hy' : 'Armenian', 'as' : 'Assamese', 'ay' : 'Aymara', 'az' : 'Azerbaijani', 'bm' : 'Bambara', 'eu' : 'Basque', 'be' : 'Belarusian', 'bn' : 'Bengali', 'bho' : 'Bhojpuri', 'bs' : 'Bosnian', 'bg' : 'Bulgarian', 'ca' : 'Catalan', 'ceb' : 'Cebuano', 'ny' : 'Chichewa', 'zh-CN' : 'Chinese (Simplified)', 'zh-TW' : 'Chinese (Traditional)', 'co' : 'Corsican', 'hr' : 'Croatian', 'cs' : 'Czech', 'da' : 'Danish', 'dv' : 'Dhivehi', 'doi' : 'Dogri', 'nl' : 'Dutch', 'eo' : 'Esperanto', 'et' : 'Estonian', 'ee' : 'Ewe', 'tl' : 'Filipino', 'fi' : 'Finnish', 'fr' : 'French', 'fy' : 'Frisian', 'gl' : 'Galician', 'ka' : 'Georgian', 'de' : 'German', 'el' : 'Greek', 'gn' : 'Guarani', 'gu' : 'Gujarati', 'ht' : 'Haitian Creole', 'ha' : 'Hausa', 'haw' : 'Hawaiian', 'iw' : 'Hebrew', 'hi' : 'Hindi', 'hmn' : 'Hmong', 'hu' : 'Hungarian', 'is' : 'Icelandic', 'ig' : 'Igbo', 'ilo' : 'Ilocano', 'id' : 'Indonesian', 'ga' : 'Irish', 'it' : 'Italian', 'ja' : 'Japanese', 'jw' : 'Javanese', 'kn' : 'Kannada', 'kk' : 'Kazakh', 'km' : 'Khmer', 'rw' : 'Kinyarwanda', 'gom' : 'Konkani', 'ko' : 'Korean', 'kri' : 'Krio', 'ku' : 'Kurdish (Kurmanji)', 'ckb' : 'Kurdish (Sorani)', 'ky' : 'Kyrgyz', 'lo' : 'Lao', 'la' : 'Latin', 'lv' : 'Latvian', 'ln' : 'Lingala', 'lt' : 'Lithuanian', 'lg' : 'Luganda', 'lb' : 'Luxembourgish', 'mk' : 'Macedonian', 'mai' : 'Maithili', 'mg' : 'Malagasy', 'ms' : 'Malay', 'ml' : 'Malayalam', 'mt' : 'Maltese', 'mi' : 'Maori', 'mr' : 'Marathi', 'mni-Mtei' : 'Meiteilon (Manipuri)', 'lus' : 'Mizo', 'mn' : 'Mongolian', 'my' : 'Myanmar (Burmese)', 'ne' : 'Nepali', 'no' : 'Norwegian', 'or' : 'Odia (Oriya)', 'om' : 'Oromo', 'ps' : 'Pashto', 'fa' : 'Persian', 'pl' : 'Polish', 'pt' : 'Portuguese', 'pa' : 'Punjabi', 'qu' : 'Quechua', 'ro' : 'Romanian', 'ru' : 'Russian', 'sm' : 'Samoan', 'sa' : 'Sanskrit', 'gd' : 'Scots Gaelic', 'nso' : 'Sepedi', 'sr' : 'Serbian', 'st' : 'Sesotho', 'sn' : 'Shona', 'sd' : 'Sindhi', 'si' : 'Sinhala', 'sk' : 'Slovak', 'sl' : 'Slovenian', 'so' : 'Somali', 'es' : 'Spanish', 'su' : 'Sundanese', 'sw' : 'Swahili', 'sv' : 'Swedish', 'tg' : 'Tajik', 'ta' : 'Tamil', 'tt' : 'Tatar', 'te' : 'Telugu', 'th' : 'Thai', 'ti' : 'Tigrinya', 'ts' : 'Tsonga', 'tr' : 'Turkish', 'tk' : 'Turkmen', 'ak' : 'Twi', 'uk' : 'Ukrainian', 'ur' : 'Urdu', 'ug' : 'Uyghur', 'uz' : 'Uzbek', 'vi' : 'Vietnamese', 'cy' : 'Welsh', 'xh' : 'Xhosa', 'yi' : 'Yiddish', 'yo' : 'Yoruba', 'zu' : 'Zulu', }; change_here(); dropdown.addEventListener('change', function() { change_here(); }); function change_here(){ setTimeout(() => { const options = dropdown.querySelectorAll('option'); options.forEach(option => { 
                        option.textContent = optionText[option.value] || option.value; }); },2000); } },2000);
                </script>
                <script type="text/javascript"
                    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                <!-- Start Google Translator END -->
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ $global_setting->twitter ?? '' }}" target="_blank"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ $global_setting->facebook ?? '' }}" target="_blank"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ $global_setting->linkedin ?? '' }}" target="_blank"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ $global_setting->instagram ?? '' }}" target="_blank"><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                        href="{{ $global_setting->youtube ?? '' }}" target="_blank"><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"><img src="/uploads/icons/{{ $global_setting->site_logo }}" alt=""></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse"> 
                <div class="navbar-nav ms-auto py-0">
                    @foreach($menus as $menu)
                    @if ($menu->childs->count() > 0 && $menu->nav_name != "news" && $menu->nav_name != "job-seeker")
                    <div class="nav-item dropdown">
                        <a href="/{{ $menu->nav_name }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{
                            $menu->caption }}</a>
                        <div class="dropdown-menu m-0">
                            @foreach ($menu->childs as $submenu)
                            <a href="/{{ $menu->nav_name }}/{{ $submenu->nav_name }}" class="dropdown-item">{{
                                $submenu->caption }}</a>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <a href=" @if ($menu->nav_name == "news" || $menu->nav_name == "job-seeker")
                        /{{ $menu->nav_name }}/{{ $menu->childs->first()->nav_name }}
                    @else
                    /{{ $menu->nav_name }}
                    @endif "
                        class="d nav-item nav-link{{ $menu['active'] ? ' active' : '' }}">{{ $menu->caption }}</a>
                    @endif
                    @endforeach
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    {{-- <a href="team" class="nav-item nav-link">Team</a> --}}
                </div>

                <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                <!-- <a href="" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
            </div>
        </nav>
    </div>

    {{-- <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"><img src="/uploads/icons/{{ $global_setting->site_logo }}" alt=""></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                        <div class="dropdown-menu m-0">
                            <a href="/normal" class="dropdown-item">Introducation</a>
                        </div>
                    </div>

                    <a href="contact" class="nav-item nav-link">Contact</a>
                </div>

                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <!-- <a href="" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
            </div>
        </nav>
    </div> --}}
    {{-- @endforeach --}}

    @yield('content')

    {{-- Slider --}}

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

    {{-- Missionvissiongoal --}}

    {{-- Aboutone --}}

    {{-- Features --}}

    {{-- Service --}}

    {{--Pricing Plan --}}

    {{-- Testimonial --}}

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">

                <div class="col-lg-12 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-3 col-md-12 pt-5 mb-7">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Contact</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">{{ $global_setting->website_full_address }}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">{{ $global_setting->site_email }}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">{{ $global_setting->phone }}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-globe text-primary me-2"></i>
                                  <a class="mb-0" href="http://speedwingshr.com/">www.speedwingshr.com</a>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="{{ $global_setting->twitter ?? '' }}"
                                    target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="{{ $global_setting->facebook ?? '' }}"
                                    target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="{{ $global_setting->linkedin ?? '' }}"
                                    target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="{{ $global_setting->instagram ?? '' }}"
                                    target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 pt-5 mb-5" >
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Contact</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Speedwingshr Consultancy Dubai,UAE</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">Premrajpaudel2outlook.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+971544592508</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-globe text-primary me-2"></i>
                                  <a class="mb-0" href="http://speedwingshr.com/">www.speedwingshr.com</a>
                            </div>
                            
                             
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="{{ $global_setting->twitter ?? '' }}"
                                    target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="{{ $global_setting->facebook ?? '' }}"
                                    target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="{{ $global_setting->linkedin ?? '' }}"
                                    target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="{{ $global_setting->instagram ?? '' }}"
                                    target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5" >
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="/"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="about.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="documents.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Documents</a>
                                <a class="text-light mb-2" href="orientation.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Job Seeker</a>
                                <a class="text-light mb-2" href="chart.html"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Chart</a>
                                <a class="text-light" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Map</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.166805583952!2d85.32510959289566!3d27.712135622116627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c2b68531f5%3A0x9d6efab885001c06!2sSpeed%20Wings%20Human%20Resource!5e0!3m2!1sen!2snp!4v1684472506287!5m2!1sen!2snp" 
                            width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">SpeedWings Human Resources
                                Pvt. Ltd. </a>. All
                            Rights Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed by <a class="text-white border-bottom" href="https://radiantnepal.com/">Radiant
                                Infotech</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/website/lib/wow/wow.min.js"></script>
    <script src="/website/lib/easing/easing.min.js"></script>
    <script src="/website/lib/waypoints/waypoints.min.js"></script>
    <script src="/website/lib/counterup/counterup.min.js"></script>
    <script src="/website/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/website/js/main.js"></script>

    
    <script>
        $(document).ready(function () {
            // required elements
            var imgPopup = $(".img-popup");
            var imgCont = $(".container__img-holderrr");
            var popupImage = $(".img-popup img");
            var closeBtn = $(".close-btn");

            // handle events
            imgCont.on("click", function () {
                var img_src = $(this).children("img").attr("src");
                imgPopup.children("img").attr("src", img_src);
                imgPopup.addClass("opened");
            });

            $(imgPopup, closeBtn).on("click", function () {
                imgPopup.removeClass("opened");
                imgPopup.children("img").attr("src", "");
            });

            popupImage.on("click", function (e) {
                e.stopPropagation();
            });
        });

    </script>
</body>

</html>