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
        <!-- Faviconlar ve Manifest -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/favicon/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('frontend/assets/images/favicon/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('frontend/assets/images/favicon/android-chrome-512x512.png') }}">
        <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon/favicon.ico') }}">
        <link rel="manifest" href="{{ asset('frontend/assets/images/favicon/site.webmanifest') }}">
        <meta name="theme-color" content="#ffffff">

        @include('frontend.partials.styles')

    </head>
    <body class="home-style2">
        
        @include('frontend.partials.preloader')

        @include('frontend.partials.header')

		<!-- Main content Start -->
        <div class="main-content">
            
            <!-- Slider Section Start -->
            <div class="rs-slider style1">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="slider-content slide1">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Shape Your Dream Education</div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Study at the World's Best Universities with Orjinmay!</h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content slide2">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Invest in Your Future</div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">USA, UK, Canada, and More!</h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Section End -->

            <!-- Services Section Start -->
            <div class="rs-services style1">
                <div class="row no-gutter">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly1">
                            <img src="assets/images/services/1.jpg" alt="">
                            <div class="content-part">
                                <img src="assets/images/services/icons/1.png" alt="">
                                <h4 class="title"><a href="#">Üniversite Hayatı</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly2">
                            <img src="assets/images/services/1.jpg" alt="">
                            <div class="content-part">
                                <img src="assets/images/services/icons/2.png" alt="">
                                <h4 class="title"><a href="#">Yaz Okulları</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly3">
                            <img src="assets/images/services/1.jpg" alt="">
                            <div class="content-part">
                                <img src="assets/images/services/icons/3.png" alt="">
                                <h4 class="title"><a href="#">Dil Kursları</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly4">
                            <img src="assets/images/services/1.jpg" alt="">
                            <div class="content-part">
                                <img src="assets/images/services/icons/1.png" alt="">
                                <h4 class="title"><a href="#">Sosyal Etkinlikler</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style2 pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 pr-65 md-pr-15 md-mb-50">
                            <div class="about-intro">
                                <div class="sec-title mb-40 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="sub-title primary">Hakkımızda</div>
                                    <h2 class="title mb-21">Orjinmay Danışmanlık</h2>
                                    <div class="desc big">
                                        İngiltere, Almanya, Amerika, Kanada, Dubai, İrlanda, Polonya, Litvanya gibi ülkelerde lisans ve yüksek lisans eğitimleri, dil okulları ve yaz okulları gibi programlarla öğrencilere yurtdışında eğitim imkanı sunuyoruz. Profesyonel ekibimizle, öğrencilere en uygun okul, şehir ve programları seçmede rehberlik ediyoruz.
                                    </div>
                                </div>
                                <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <a class="readon2" href="#">Daha Fazla Bilgi</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 lg-pl-0 ml--25 md-ml-0">
                            <div class="row rs-counter couter-area mb-40">
                                <div class="col-md-4">
                                    <div class="counter-item one">
                                        <h2 class="number rs-count kplus">500</h2>
                                        <h4 class="title mb-0">Üniversite İşbirliği</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="counter-item two">
                                        <h2 class="number rs-count">20</h2>
                                        <h4 class="title mb-0">Yıllık Deneyim</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="counter-item three">
                                        <h2 class="number rs-count percent">96</h2>
                                        <h4 class="title mb-0">İş Bulma Oranı</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-area">
                                <div class="col-md-6 sm-mb-30">
                                    <div class="image-grid">
                                        <img src="assets/images/about/style2/grid1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image-grid">
                                        <img src="assets/images/about/style2/grid2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Degree Section Start -->
            <div class="rs-degree style1 modify gray-bg pt-100 pb-70 md-pt-70 md-pb-40">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="sub-title primary">Eğitim Programları</div>
                                <h2 class="title mb-0">Orjinmay ile Geleceğinize Yatırım Yapın</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ asset('frontend/assets/images/degrees/1.jpg') }}" alt="">
                                <div class="title-part">
                                    <h4 class="title">Lisans Programları</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Lisans Programları</a></h4>
                                    <p class="desc">YKS şartı olmadan İngiltere, Almanya ve diğer ülkelerde lisans eğitimi fırsatları.</p>
                                    <div class="btn-part">
                                        <a href="#">Detaylı Bilgi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ asset('frontend/assets/images/degrees/2.jpg') }}" alt="">
                                <div class="title-part">
                                    <h4 class="title">Yüksek Lisans</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Yüksek Lisans</a></h4>
                                    <p class="desc">Uluslararası geçerliliğe sahip diplomalarla yüksek lisans programları.</p>
                                    <div class="btn-part">
                                        <a href="#">Detaylı Bilgi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ asset('frontend/assets/images/degrees/3.jpg') }}" alt="">
                                <div class="title-part">
                                    <h4 class="title">Dil Kursları</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Dil Kursları</a></h4>
                                    <p class="desc">İngiltere, Malta, Dubai gibi ülkelerde uygun fiyatlarla İngilizce kursları.</p>
                                    <div class="btn-part">
                                        <a href="#">Detaylı Bilgi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Degree Section End -->

            <!-- CTA Section Start -->
            <div class="rs-cta style2">
                <div class="partition-bg-wrap home2">
                    <div class="container">
                        <div class="row y-bottom">
                            <div class="col-lg-6 pb-50 md-pt-100 md-pb-100">
                                <div class="video-wrap">
                                    <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                        <i class="fa fa-play"></i>
                                        <h4 class="title mb-0">Orjinmay ile Tanışın</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-62 pt-134 pb-150 md-pl-15 md-pt-45 md-pb-50">
                                <div class="sec-title mb-40 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <h2 class="title mb-16">Bize Ulaşın</h2>
                                    <div class="desc">Her türlü sorunuz için bizimle iletişime geçmekten çekinmeyin.</div>
                                </div>
                                <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <a class="readon2" href="mailto:support@orjinmay.com">support@orjinmay.com</a>
                                    <p>Telefon: +90 545 160 64 58</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End -->

<!-- Latest Events Section Start -->
<div class="rs-latest-events style1 bg-wrap pt-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-65 pt-24 md-pt-0 md-pr-15 md-mb-30">
                <div class="sec-title mb-42">
                    <div class="sub-title primary">Son Etkinlikler</div>
                    <h2 class="title mb-0">Orjinmay Etkinlikleri</h2>
                </div>
                <div class="single-img wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <img src="{{ asset('frontend/assets/images/event/almanya-egitim.jpg') }}" alt="Almanya'da Eğitim">
                </div>
            </div>
            <div class="col-lg-6 lg-pl-0">
                <div class="event-wrap">
                    <!-- Event 1 -->
                    <div class="events-short mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <div class="date-part bgc1">
                            <span class="month">Şubat</span>
                            <div class="date">15</div>
                        </div>
                        <div class="content-part">
                            <div class="categorie">
                                <a href="#">Üniversite Eğitimi</a>
                            </div>
                            <h4 class="title mb-0">
                                <a href="#">Almanya'da Ücretsiz Üniversite Eğitimi Semineri</a>
                            </h4>
                        </div>
                    </div>
                    <!-- Event 2 -->
                    <div class="events-short mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <div class="date-part bgc2">
                            <span class="month">Mart</span>
                            <div class="date">10</div>
                        </div>
                        <div class="content-part">
                            <div class="categorie">
                                <a href="#">Dil Kursları</a>
                            </div>
                            <h4 class="title mb-0">
                                <a href="#">İngiltere'de Dil Eğitimi Fırsatları</a>
                            </h4>
                        </div>
                    </div>
                    <!-- Event 3 -->
                    <div class="events-short mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                        <div class="date-part bgc3">
                            <span class="month">Nisan</span>
                            <div class="date">5</div>
                        </div>
                        <div class="content-part">
                            <div class="categorie">
                                <a href="#">Yaz Okulları</a>
                            </div>
                            <h4 class="title mb-0">
                                <a href="#">Amerika'da Yaz Okulu Programları</a>
                            </h4>
                        </div>
                    </div>
                    <!-- View All Events Button -->
                    <div class="btn-part mt-55 md-mt-25 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                        <a href="#" class="readon2">Tüm Etkinlikleri Gör</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest Events Section End -->

            <!-- Partner Start -->
            <div class="rs-partner pt-100 pb-100 md-pt-70 md-pb-70 gray-bg">
                <div class="container">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/1.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/2.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/3.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/4.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/5.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner End -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial style2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 lg-pl-0 ml--15 md-ml-0">
                            <div class="testi-wrap mb-50 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="img-part">
                                    <img src="{{ asset('frontend/assets/images/testimonial/style2/1.webp') }}" alt="">
                                </div>
                                <div class="content-part pt-12">
                                    <div class="desc">Bu firma sayesinde hayalimdeki üniversiteye başvuru sürecini çok kolay bir şekilde tamamladım.
                                         Profesyonel ekip, bana en uygun şehir ve programı seçmemde büyük destek oldu.
                                        Kesinlikle yurtdışında eğitim düşünen herkese tavsiye ederim!</div>
                                    <div class="info">
                                        <h5 class="name">Mehmet Yılmaz</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-wrap wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                <div class="img-part">
                                    <img src="{{ asset('frontend/assets/images/testimonial/style2/2.webp') }}" alt="">
                                </div>
                                <div class="content-part pt-12">
                                    <div class="desc">Yurtdışında eğitim almak isteyenler için harika bir danışmanlık hizmeti sunuyorlar. 
                                        Dil okulu seçiminden vize sürecine kadar her konuda yardımcı oldular.
                                        Başvuru süreci boyunca her adımda destek aldım. Teşekkürler!</div>
                                    <div class="info">
                                        <h5 class="name">Ayşe Kaya</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Section Gray bg Wrap start -->
            <div class="gray-bg">
                <!-- Blog Section Start -->
                <div id="rs-blog" class="rs-blog style2 pt-94 pb-100 md-pt-64 md-pb-70">
                    <div class="container">
                        <div class="sec-title mb-60 text-center">
                            <div class="sub-title primary">Haberler ve Güncellemeler</div>
                            <h2 class="title mb-0">Son Bloglar ve Etkinlikler</h2>
                        </div>
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                            <!-- Blog 1 -->
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ asset('frontend/assets/images/blog/style2/1.jpg') }}" alt="Üniversite Tercih Dönemi">
                                </div>
                                <div class="blog-content new-style">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i> 4 Şubat 2025</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-single1.html">Üniversite Tercih Döneminde Dikkat Edilmesi Gerekenler</a></h3>
                                    <div class="desc">Üniversite tercih dönemi, öğrenciler için hayatlarının en önemli kararlarından biridir. Bu süreçte nelere dikkat etmelisiniz?</div>
                                    <ul class="blog-bottom">
                                        <li class="cmnt-part"><a href="#">(5) Yorum</a></li>
                                        <li class="btn-part"><a class="readon-arrow" href="blog-single1.html">Devamını Oku</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Blog 2 -->
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ asset('frontend/assets/images/blog/style2/2.jpg') }}" alt="Yeni Bölümler ve İş İmkanları">
                                </div>
                                <div class="blog-content new-style">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i> 4 Şubat 2025</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-single2.html">2025 Yılı Yeni Bölümler ve İş İmkanları</a></h3>
                                    <div class="desc">2025 yılında üniversitelerde açılan yeni bölümler ve bu bölümlerin sunduğu iş imkanları hakkında bilgi edinin.</div>
                                    <ul class="blog-bottom">
                                        <li class="cmnt-part"><a href="#">(8) Yorum</a></li>
                                        <li class="btn-part"><a class="readon-arrow" href="blog-single2.html">Devamını Oku</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Blog 3 -->
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ asset('frontend/assets/images/blog/style2/3.jpg') }}" alt="Öğrenci Değişim Programları">
                                </div>
                                <div class="blog-content new-style">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i> 4 Şubat 2025</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-single3.html">Öğrenci Değişim Programları ve Yurtdışı Eğitim</a></h3>
                                    <div class="desc">Erasmus ve diğer öğrenci değişim programları ile yurtdışında eğitim fırsatlarını keşfedin.</div>
                                    <ul class="blog-bottom">
                                        <li class="cmnt-part"><a href="#">(10) Yorum</a></li>
                                        <li class="btn-part"><a class="readon-arrow" href="blog-single3.html">Devamını Oku</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Blog 4 -->
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ asset('frontend/assets/images/blog/style2/4.jpg') }}" alt="Online Eğitimde Başarı">
                                </div>
                                <div class="blog-content new-style">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i> 4 Şubat 2025</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-single4.html">Online Eğitimde Başarılı Olmanın Püf Noktaları</a></h3>
                                    <div class="desc">Online eğitimde motivasyonunuzu nasıl yüksek tutabilirsiniz? Başarılı olmanın yollarını öğrenin.</div>
                                    <ul class="blog-bottom">
                                        <li class="cmnt-part"><a href="#">(7) Yorum</a></li>
                                        <li class="btn-part"><a class="readon-arrow" href="blog-single4.html">Devamını Oku</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Section End -->


            </div>
            <!-- Section bg Wrap 2 End -->
        </div> 
        <!-- Main content End --> 

        @include('frontend.partials.footer')

        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
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