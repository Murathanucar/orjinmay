<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head> 
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Üniversiteler</title>
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
            {{-- <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Team One</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Team One</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End --> --}}

            <!-- Universities Section Start -->
            <div id="rs-universities" class="rs-team style1 blue-color pt-94 pb-100 md-pt-64 md-pb-70 white-bg">
                <div class="container">
                    <!-- Country Section: USA -->
                    <div class="sec-title mb-50 md-mb-30">
                        <h2 class="title">Amerika</h2>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="{{ asset('frontend/assets/images/universities/amerika-universite.webp') }}" alt="Harvard University">
                                <div class="content-part">
                                    <h4 class="name"><a href="university-single.html">Harvard University</a></h4>
                                    <span class="designation">Cambridge, Massachusetts</span>
                                    <div class="university-info mt-2">
                                        <p><i class="fa fa-graduation-cap"></i> Founded: 1636</p>
                                        <p><i class="fa fa-users"></i> Students: 23,000+</p>
                                    </div>
                                    <a href="university-single.html" class="btn-link mt-2">Learn More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- More USA universities... -->
                    </div>

                    <!-- Country Section: UK -->
                    <div class="sec-title mb-50 md-mb-30">
                        <h2 class="title">İngiltere</h2>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="{{ asset('frontend/assets/images/universities/ingiltere-universite.webp') }}" alt="Oxford University">
                                <div class="content-part">
                                    <h4 class="name"><a href="university-single.html">University of Oxford</a></h4>
                                    <span class="designation">Oxford, England</span>
                                    <div class="university-info mt-2">
                                        <p><i class="fa fa-graduation-cap"></i> Founded: 1096</p>
                                        <p><i class="fa fa-users"></i> Students: 24,000+</p>
                                    </div>
                                    <a href="university-single.html" class="btn-link mt-2">Learn More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- More UK universities... -->
                    </div>

                    <!-- Country Section: Germany -->
                    <div class="sec-title mb-50 md-mb-30">
                        <h2 class="title">Almanya</h2>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="{{ asset('frontend/assets/images/universities/almanya-universite.webp') }}" alt="Heidelberg University">
                                <div class="content-part">
                                    <h4 class="name"><a href="university-single.html">Heidelberg University</a></h4>
                                    <span class="designation">Heidelberg, Germany</span>
                                    <div class="university-info mt-2">
                                        <p><i class="fa fa-graduation-cap"></i> Founded: 1386</p>
                                        <p><i class="fa fa-users"></i> Students: 29,000+</p>
                                    </div>
                                    <a href="university-single.html" class="btn-link mt-2">Learn More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    <!-- Country Section: Germany -->
                    <div class="sec-title mb-50 md-mb-30">
                        <h2 class="title">Kanada</h2>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="{{ asset('frontend/assets/images/universities/kanada-universite.webp') }}" alt="Heidelberg University">
                                <div class="content-part">
                                    <h4 class="name"><a href="university-single.html">Heidelberg University</a></h4>
                                    <span class="designation">Heidelberg, Germany</span>
                                    <div class="university-info mt-2">
                                        <p><i class="fa fa-graduation-cap"></i> Founded: 1386</p>
                                        <p><i class="fa fa-users"></i> Students: 29,000+</p>
                                    </div>
                                    <a href="university-single.html" class="btn-link mt-2">Learn More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- More German universities... -->    
                    </div>
                </div>
            </div>
            <!-- Universities Section End -->
            
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