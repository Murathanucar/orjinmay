<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Orjinmay</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">

        @include('frontend.partials.styles')
        
    </head>
    <body class="defult-home">
        
        @include('frontend.partials.preloader')

        @include('frontend.partials.header')

        
		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('frontend/assets/images/tr.jpg') }}" alt="Türkiye'deki Üniversiteler">
                </div>
                {{-- <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Course Grid 02</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Course</li>
                    </ul>
                </div> --}}
            </div>
            <!-- Breadcrumbs End -->

            <!-- TR Universities Section Start -->
            <div class="rs-latest-couses orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        @foreach($universities as $university)
                            <div class="col-lg-6 mb-40">
                                <div class="course-item">
                                    <div class="course-image">
                                    <a href="#">
                                        @if($university->logo)
                                            <img src="{{ asset('frontend/assets/images/tr-uni-logos/'. $university->logo) }}" alt="{{ $university->name }}">
                                        @else
                                            <img src="{{ asset('images/default-logo.png') }}" alt="Logo Yok">
                                        @endif
                                    </a>
                                    </div>
                                    <div class="course-info">
                                        <h3 class="course-title">
                                            <a href="{{ route('tr.university.show', $university->slug) }}">
                                                {{ $university->name }}
                                                <p class="card-text">
                                                    {{ \Illuminate\Support\Str::limit($university->description, 100, '...') }}
                                                </p>
                                            </a>
                                        </h3>
                                        <div class="bottom-part">
                                            <div class="btn-part">
                                                <a href="{{ route('tr.university.show', $university->slug) }}">Read More<i class="flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- TR Universities Section End -->

            <!-- Newsletter section start -->
            <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row y-middle">
                            <div class="col-lg-6 col-md-12 md-mb-30">
                               <div class="content-part">
                                   <div class="sec-title">
                                       <div class="title-icon md-mb-15">
                                           <img src="assets/images/newsletter.png" alt="images">
                                       </div>
                                       <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <form class="newsletter-form">
                                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->
        </div> 
        <!-- Main content End --> 

        
        @include('frontend.partials.footer')

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <button type="button" class="close" data-bs-dismiss="modal">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        @include('frontend.partials.scripts')
        
    </body>
</html>