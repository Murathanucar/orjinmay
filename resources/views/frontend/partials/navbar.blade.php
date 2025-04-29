<!-- Menu Start -->
<div class="menu-area menu-sticky">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-2">
                <div class="logo-section">
                    <a href="/">
                        <img src="{{ asset('frontend/assets/images/logo-orjinmay.png') }}" alt="Site Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 text-center">
                <div class="rs-menu-area">
                    <div class="main-menu pr-90">
                        <div class="mobile-menu">
                            <a class="rs-menu-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">
                            <ul class="nav-menu">

                            <li class="menu-item-has-children">
                                <a href="{{ route('tr.universities.list') }}">Study in Turkey</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{ route('universities.list') }}">ÜNİVERSİTELER</a>
                                <ul class="sub-menu">
                                    <li><a href="course.html">İngiltere</a> </li>
                                    <li><a href="course2.html">Almanya</a> </li>
                                    <li><a href="course3.html">Amerika</a> </li>
                                    <li><a href="course3.html">Kanada</a> </li>

                                </ul>
                            </li>

                            <li class="menu-item">
                                <a href="about.html">MASTER VE DOKTORA</a>
                            </li>


                            <li class="menu-item-has-children">
                                <a href="#">DİL OKULLARI</a>
                                <ul class="sub-menu">
                                    <li><a href="course.html">İngiltere</a> </li>
                                    <li><a href="course2.html">İrlanda</a> </li>
                                    <li><a href="course3.html">Malta</a> </li>
                                    <li><a href="course3.html">Almanya</a> </li>

                                </ul>
                            </li>
                                
                                
                            <li class="menu-item">
                                <a href="about.html">HAKKIMIZDA</a>
                            </li>

                            <li class="menu-item">
                                <a href="contact.html">İLETİŞİM</a>
                            </li>
                            </ul> <!-- //.nav-menu -->
                        </nav> 
                    </div> <!-- //.main-menu -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->