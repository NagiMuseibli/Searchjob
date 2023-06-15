<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/superio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 15:36:35 GMT -->

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body data-anm=".anm">
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Main Header-->
        <header class="main-header">

            <!-- Main box -->
            <div class="main-box">
                <!--Nav Outer -->
                <div class="nav-outer">
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('home') }}"><img src="images/logo.svg" alt=""
                                    title=""></a></div>
                    </div>

                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar">
                            <li>
                                <a href="/">SEARCHJOB.AZ</a>
                            </li>

                            <li class="dropdown has-mega-menu" id="has-mega-menu">
                                <a href="{{ route('vacancies') }}">VAKANSİYALAR</a>
                            </li>

                            <li class="dropdown">
                                <a href="{{ route('companies') }}">ŞİRKƏTLƏR</a>
                            </li>

                            <li class="dropdown">
                                <a href="{{ route('resumes') }}">CV-LƏR</a>
                            </li>

                            <li class="dropdown">
                                <a href="/">XƏBƏRLƏR</a>
                            </li>



                            <!-- Only for Mobile View -->
                            <li class="mm-add-listing">
                                <a href="{{ route('company') }}" class="theme-btn btn-style-one">Job Post</a>
                                <span>
                                    <span class="contact-info">
                                        <span class="phone-num"><span>Call us</span><a href="tel:1234567890">123 456
                                                7890</a></span>
                                        <span class="address">329 Queensberry Street, North Melbourne VIC <br>3051,
                                            Australia.</span>
                                        <a href="mailto:support@superio.com" class="email">support@superio.com</a>
                                    </span>
                                    <span class="social-links">
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </nav>
                    <!-- Main Menu End-->
                </div>

                <div class="outer-box">
                    <!-- Add Listing -->
                    <a href="/" class="upload-cv">CV yüklə</a>
                    <!-- Login/Register -->
                    <div class="btn-box">
                        <a href="{{ route('login') }}" class="theme-btn btn-style-three ">Giriş /
                            Qeydiyyat</a>
                        <a href="{{ route('company') }}" class="theme-btn btn-style-one">Vakansiya əlavə et</a>
                    </div>
                </div>
            </div>

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="logo"><a href="{{ route('home') }}"><img src="images/logo.svg" alt=""
                            title=""></a></div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">

                    <div class="outer-box">
                        <!-- Login/Register -->
                        <div class="login-box">
                            <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                        </div>

                        <a href="#nav-mobile" class="mobile-nav-toggler"><span class="flaticon-menu-1"></span></a>
                    </div>
                </div>
            </div>

            <!-- Mobile Nav -->
            <div id="nav-mobile"></div>
        </header>

        @yield('view.home')
        @yield('view.job-single')
        @yield('view.vacancies')
        @yield('view.companies')
        @yield('view.resumes')
        @yield('view.company-single')
        @yield('view.resume-single')
        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section wow fadeInUp">
                    <div class="row">
                        <div class="big-column col-xl-4 col-lg-3 col-md-12">
                            <div class="footer-column about-widget">
                                <div class="logo"><a href="#"><img src="images/logo.svg" alt=""></a>
                                </div>
                                <p class="phone-num"><span>Bizimlə əlaqə </span><a
                                        href="thebeehost%40support.html">+994773333470</a></p>
                                <p class="address">329 Queensberry Street, North Melbourne VIC<br> 3051, Australia.
                                    <br><a href="mailto:support@superio.com" class="email">Searchjob@gmail.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="big-column col-xl-8 col-lg-9 col-md-12">
                            <div class="row">
                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h4 class="widget-title">Namizədlər üçün</h4>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="#">Vakansiyalar</a></li>
                                                <li><a href="#">Kateqoriyalar</a></li>
                                                <li><a href="#">Namizəd şəxsi kabinet</a></li>
                                                {{-- <li><a href="#">Bildirişlər</a></li>
                                                <li><a href="#">My Bookmarks</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h4 class="widget-title">Şirkətlər üçün</h4>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="#">Namizədlər</a></li>
                                                <li><a href="#">Şirkət şəxsi kabinet</a></li>
                                                <li><a href="#">Vakansiya əlavə et</a></li>
                                                {{-- <li><a href="#">Job Packages</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h4 class="widget-title">Haqqımızda</h4>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="{{ route('home') }}">SearchJob.az</a></li>
                                                <li><a href="{{ route('vacancies') }}">Vakansiyalar</a></li>
                                                <li><a href="#">CV-lər</a></li>
                                                <li><a href="#">Xəbərlər</a></li>
                                                <li><a href="#">Əlaqə</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h4 class="widget-title">Faydalı mənbələr</h4>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="#">Sayt xəritəsi</a></li>
                                                <li><a href="#">İstifadə qaydaları</a></li>
                                                <li><a href="#">Məxfilik mərəzi</a></li>
                                                <li><a href="#">Təhlükəsizlik mərkəzi</a></li>
                                                {{-- <li><a href="#">Accessibility Center</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="copyright-text">©
                            @php
                                echo date('Y');
                            @endphp <a href="{{ route('home') }}">SearchJob.az</a>. Bütün hüquqlar qorunur.
                        </div>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
        </footer>
        <!-- End Main Footer -->
    </div>
    <!-- End Page Wrapper -->


    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/chosen.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/mmenu.polyfills.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/anm.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/rellax.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>

</body>


<!-- Mirrored from creativelayers.net/themes/superio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 15:37:06 GMT -->

</html>
