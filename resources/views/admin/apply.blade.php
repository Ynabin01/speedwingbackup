@extends('layouts.master')



@section('content')

    <!-- Full Screen Search End -->
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                
                <h1 class="display-4 text-white animated zoomIn">Apply Now</h1>
                <a href="/" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                
                <a href="" class="h5 text-white">Apply Now</a>
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="contact-area-page">
            <div class="section-title position-relative pb-3 text-center">


                <!-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> -->
                <h1 class="mb-0 text-center">Apply now</h1>
            </div>
            <form class="row" action="{{ route('contactstore') }}" method="POST" enctype='multipart/form-data'>
                @csrf

                <div class="col-lg-12 col-md-12 col-12">
                    @if (Session::has('contact'))
							<p class="alert alert-info">{{ Session::get('contact') }}</p>
					@endif
                    <div class="apply-area">
                        <div class="row">
                            <div class="col-6">
                                <div class="apply-form">
                                    <input type="text" class="form-control" name="first_name" id="inputName4" placeholder="Full Name *">
                                </div>
                            </div>
                            <input type="hidden"  name="job_id" value="{{$job_slug}}">
                            <div class="col-6">
                                <div class="apply-form">
                                    <input type="text" class="form-control" name="number" id="inputPhone" placeholder=" Contact Number *">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="apply-form">
                                    <input type="text" class="form-control" name="country" id="inputemail2" placeholder="Country*">
                                </div>

                            </div>
                           
                            <div class="col-6">
                                <div class="apply-form">
                                    <input type="text" name="email" class="form-control" id="inputemail2" placeholder="Email Address*">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="5" name="message" id="comment" name="text"
                                    placeholder="Enter message"></textarea>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mt-3">
                                    <label class="mr-4">Upload your CV:</label>

                                    <div class="file-upload-wrapper" data-text="Select your file!">
                                        <input name="cv" type="file" class="file-upload-field" accept="image/*" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group mt-3">
                                    <label class="mr-4">Upload your Latest Photo:</label>
                                    <div class="file-upload-wrapper" data-text="Select your file!">
                                        <input name="photo" type="file" class="file-upload-field" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mt-3">
                                    <label class="mr-4">Upload your Scanned Passport:</label>
                                    <div class="file-upload-wrapper" data-text="Select your file!">
                                        <input name="passport" type="file" class="file-upload-field" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mr-auto"   >
                                <a class="btn"  href=" ">Submit</a>
                            </div> --}}
                          

                            <div class="mr-auto"   >
                                <button class="btn" type="submit">Submit </button>
                             </div>
                           
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

 @endsection