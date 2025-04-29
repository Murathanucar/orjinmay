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
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assests/images/fav-orange.png') }}">

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
                    <img src="{{ asset('frontend/assets/images/universities/ted-university-img.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">TED UNIVERSITY</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">TÜRKİYE'DEKİ ÜNİVERSİTELER</a>
                        </li>
                        <li>TED UNIVERSITY</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- University Details Section Start -->
            <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="col-lg-12 md-mb-50">
                            <!-- Intro Info Tabs-->
                            <div class="intro-info-tabs">
                                <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                                    <li class="nav-item tab-btns" role="presentation">
                                        <a class="nav-link tab-btn active" id="prod-overview-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">Overview</a>
                                    </li>
                                </ul>
                                <div class="tab-content tabs-content" id="myTabContent">
                                    <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                                        <div class="content white-bg pt-30">
                                            <!-- Cource Overview -->
                                            <div class="course-overview">
                                                <div class="inner-box">
                                                    <h4>{{ $university->name }}</h4>
                                                    
                                                @foreach($university->sections as $section)
                                                    @if($section->parent_id === null) {{-- Ana bölümleri kontrol et --}}
                                                        <div class="card my-3">
                                                            <div class="card-header">
                                                                <h4>{{ $section->section_title }}</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <!-- Bölümün Açıklamaları -->
                                                                @if($section->descriptions->isNotEmpty())
                                                                    @foreach($section->descriptions as $description)
                                                                        <p>{!! $description->content !!}</p>
                                                                    @endforeach
                                                                @endif
                                                                
                                                                <!-- Bölümün Görselleri -->
                                                                @if($section->formatted_images && count($section->formatted_images) > 0)
                                                                    <div class="section-images">
                                                                        <div class="row">
                                                                            @foreach($section->formatted_images as $image)
                                                                                <div class="col-md-4 mb-4">
                                                                                    <img src="{{ $image['url'] }}" 
                                                                                        alt="{{ $image['alt'] }}" 
                                                                                        class="img-fluid rounded">
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                
                                                                <!-- Bölümün Listeleri -->
                                                                @if($section->lists->isNotEmpty())
                                                                    <ul class="review-list">
                                                                        @foreach($section->lists as $list)
                                                                            <li>{{ $list->item }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                                
                                                                <!-- Alt Bölümleri Göster -->
                                                                @if($section->children->isNotEmpty())
                                                                    @foreach($section->children as $child)
                                                                        <div class="sub-section mt-4">
                                                                            <h5>{{ $child->section_title }}</h5>
                                                                            
                                                                            <!-- Alt Bölüm Açıklamaları -->
                                                                            @if($child->descriptions->isNotEmpty())
                                                                                @foreach($child->descriptions as $description)
                                                                                    <p>{!! $description->content !!}</p>
                                                                                @endforeach
                                                                            @endif
                                                                            
                                                                            <!-- Alt Bölüm Görselleri -->
                                                                            @if($child->formatted_images && count($child->formatted_images) > 0)
                                                                                <div class="sub-section-images">
                                                                                    <div class="row">
                                                                                        @foreach($child->formatted_images as $image)
                                                                                            <div class="col-md-4 mb-4">
                                                                                                <img src="{{ $image['url'] }}" 
                                                                                                    alt="{{ $image['alt'] }}" 
                                                                                                    class="img-fluid rounded">
                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            
                                                                            <!-- Alt Bölüm Listeleri -->
                                                                            @if($child->lists->isNotEmpty())
                                                                                <ul class="review-list">
                                                                                    @foreach($child->lists as $list)
                                                                                        <li>{{ $list->item }}</li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            @endif
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                @if($programs->count())
                                                @php
                                                    // degree_level'a göre grupluyoruz
                                                    $grouped = $programs->groupBy('degree_level');
                                                @endphp

                                                @foreach($grouped as $degreeLevel => $programs)
                                                    <h2 class="text-center my-4">{{ $degreeLevel }}</h2>
                                                    <div class="table-responsive mb-5">
                                                        <table class="table table-bordered align-middle">
                                                            <thead>
                                                                <tr style="background: #eee;">
                                                                    <th>Specialization</th>
                                                                    <th>Duration of Study</th>
                                                                    <th>Language</th>
                                                                    <th>Tuition Fee</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($programs as $program)
                                                                    <tr>
                                                                        <td>{{ $program->specialization }}</td>
                                                                        <td>{{ $program->duration }}</td>
                                                                        <td>{{ $program->language }}</td>
                                                                        <td>{{ $program->fee }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @endforeach
                                            @endif                                        
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Video Column -->
                                            
                    </div>                
                </div>
            </section>
            <!-- University Details Section End -->

            <!-- Newsletter section start -->

            @include('frontend.partials.newsletter')
            
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