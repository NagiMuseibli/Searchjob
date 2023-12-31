<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 15:38:08 GMT -->

<head>
    <meta charset="utf-8">
    <title>Superio | Just another HTML Template | Dashboard</title>

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper dashboard ">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Header Span -->
        <span class="header-span"></span>

        <!-- Main Header-->
        <header class="main-header header-shaddow">
            <div class="container-fluid">
                <!-- Main box -->
                <div class="main-box">
                    <!--Nav Outer -->
                    <div class="nav-outer">
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}"
                                        alt="" title=""></a></div>
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
                                    <a href="{{ route('logout') }}" class="theme-btn btn-style-one">Hesabdan çıxış</a>
                                    <span>
                                        <span class="contact-info">
                                            <span class="phone-num"><span>Call us</span><a href="tel:1234567890">123
                                                    456 7890</a></span>
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

                        <button class="menu-btn">
                            <span class="count">1</span>
                            <span class="icon la la-heart-o"></span>
                        </button>

                        <button class="menu-btn">
                            <span class="icon la la-bell"></span>
                        </button>

                        <!-- Dashboard Option -->
                        <div class="dropdown dashboard-option">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                                @php
                                    if (auth()->user()->role == 'company') {
                                        $img = 'images/companies/' . $profile_image;
                                    }
                                    if (auth()->user()->role == 'candidate') {
                                        $img = 'images/candidate/' . $profile_image;
                                    }
                                    
                                @endphp
                                <img src="{{ asset($img) }}" alt="avatar" class="thumb">
                                <span class="name">{{ $profile_name }}</span>
                                <span class="name">{{ $profile_email }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if(auth()->user()->role == 'company'){?>
                                <li class="active"><a href="dashboard.html"> <i class="la la-home"></i> Idarə
                                        paneli</a></li>
                                <li><a href="dashboard-company-profile.html"><i class="la la-user-tie"></i> Şirkətin
                                        Profili</a>
                                </li>
                                <li><a href="{{ route('post_job_view') }}"><i class="la la-paper-plane"></i>
                                        Vakansiya
                                        əlavə et</a>
                                </li>
                                <li><a href="dashboard-manage-job.html"><i class="la la-briefcase"></i> Vakansiyaları
                                        idarə et
                                    </a></li>
                                <li><a href="dashboard-applicants.html"><i class="la la-file-invoice"></i> Müraciət
                                        edənlər</a>
                                </li>
                                <li><a href="dashboard-resumes.html"><i class="la la-bookmark-o"></i> Qısa siyahıya
                                        alınmış
                                        CV-lər</a></li>
                                <li><a href="dashboard-packages.html"><i class="la la-box"></i> Paketlər</a></li>
                                <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i> Mesajlar</a>
                                </li>
                                <li><a href="dashboard-resume-alerts.html"><i class="la la-bell"></i> CV
                                        xəbərdarlıqları</a></li>
                                <li><a href="dashboard-change-password.html"><i class="la la-lock"></i> Şifrəni
                                        dəyiş</a></li>
                                <li><a href="dashboard-company-profile.html"><i class="la la-user-alt"></i> Profilə
                                        bax</a></li>
                                <li><a href="{{ route('logout') }}"><i class="la la-sign-out"></i> Çıxış</a></li>
                                <li><a href="{{ route('home') }}"><i class="la la-trash"></i> Delete Profile</a></li>
                                <?php } else{?>
                                <li class="active"><a href="candidate-dashboard.html"> <i class="la la-home"></i>
                                        Idarə
                                        paneli</a>
                                </li>
                                <li><a href="candidate-dashboard-profile.html"><i class="la la-user-tie"></i> Mənim
                                        Profilim</a>
                                </li>
                                <li><a href="candidate-dashboard-resume.html"><i class="la la-file-invoice"></i> Mənim
                                        CV-im</a>
                                </li>
                                <li><a href="candidate-dashboard-applied-job.html"><i class="la la-briefcase"></i>
                                        Təsdiq olunan
                                        vakansiyalar
                                    </a></li>
                                <li><a href="candidate-dashboard-job-alerts.html"><i class="la la-bell"></i>Vakansiya
                                        xəbərdarlıqları</a></li>
                                <li><a href="candidate-dashboard-shortlisted-resume.html"><i
                                            class="la la-bookmark-o"></i> Qısa
                                        siyahıya alınmış İşlər</a></li>
                                <li><a href="candidate-dashboard-cv-manager.html"><i class="la la-file-invoice"></i>
                                        CV
                                        menecer</a></li>
                                <li><a href="dashboard-packages.html"><i class="la la-box"></i> Paketlər</a></li>
                                <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i> Mesajlar</a>
                                </li>
                                <li><a href="dashboard-change-password.html"><i class="la la-lock"></i>Şifrəni
                                        dəyiş</a></li>
                                <li><a href="dashboard-profile.html"><i class="la la-user-alt"></i> Profilə bax</a>
                                </li>
                                <li><a href="{{ route('logout') }}"><i class="la la-sign-out"></i> Çıxış</a></li>
                                <li><a href="dashboard-delete.html"><i class="la la-trash"></i>Profili sil</a></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}"
                            alt="" title=""></a></div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">

                    <div class="outer-box">
                        <!-- Login/Register -->
                        {{-- <div class="login-box">
                            <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                        </div> --}}
                        @php
                            if (auth()->user()->role == 'company') {
                                $img = 'images/companies/' . $profile_image;
                            }
                            if (auth()->user()->role == 'candidate') {
                                $img = 'images/candidate/' . $profile_image;
                            }
                            
                        @endphp
                        <button id="toggle-user-sidebar"><img src="{{ asset($img) }}" alt="avatar"
                                class="thumb"></button>
                        <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span
                                class="flaticon-menu-1"></span></a>
                    </div>
                </div>

            </div>

            <!-- Mobile Nav -->
            <div id="nav-mobile"></div>
        </header>
        <!--End Main Header -->
        @yield('admin.company')
        @yield('admin.company-profile')
        @yield('admin.candidate')
        @yield('view.admin.post-job')
        <!-- Sidebar Backdrop -->
        <div class="sidebar-backdrop"></div>

        <!-- User Sidebar -->
        <div class="user-sidebar">

            <div class="sidebar-inner">
                <ul class="navigation">
                    <?php if(auth()->user()->role == 'company'){?>
                    <li class="{{ request()->is('company') ? 'active' : '' }}"><a href="{{ route('company') }}"> <i
                                class="la la-home"></i> Idarə paneli</a>
                    </li>
                    <li class="{{ request()->is('company/profile') ? 'active' : '' }}"><a
                            href="{{ route('company_profile') }}"><i class="la la-user-tie"></i> Şirkətin Profili</a>
                    </li>
                    <li class="{{ request()->is('company/post-job') ? 'active' : '' }}"><a
                            href="{{ route('post_job_view') }}"><i class="la la-paper-plane"></i> Vakansiya əlavə
                            et</a>
                    </li>
                    <li><a href="dashboard-manage-job.html"><i class="la la-briefcase"></i> Vakansiyaları idarə et
                        </a></li>
                    <li><a href="dashboard-applicants.html"><i class="la la-file-invoice"></i> Müraciət edənlər</a>
                    </li>
                    <li><a href="dashboard-resumes.html"><i class="la la-bookmark-o"></i> Qısa siyahıya alınmış
                            CV-lər</a></li>
                    <li><a href="dashboard-packages.html"><i class="la la-box"></i> Paketlər</a></li>
                    <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i> Mesajlar</a></li>
                    <li><a href="dashboard-resume-alerts.html"><i class="la la-bell"></i> CV xəbərdarlıqları</a></li>
                    <li><a href="dashboard-change-password.html"><i class="la la-lock"></i> Şifrəni dəyiş</a></li>
                    <li><a href="dashboard-company-profile.html"><i class="la la-user-alt"></i> Profilə bax</a></li>
                    <li><a href="{{ route('logout') }}"><i class="la la-sign-out"></i> Çıxış</a></li>
                    <li><a href="{{ route('home') }}"><i class="la la-trash"></i> Delete Profile</a></li>
                    <?php } else{?>
                    <li class="active"><a href="candidate-dashboard.html"> <i class="la la-home"></i> Idarə
                            paneli</a>
                    </li>
                    <li><a href="candidate-dashboard-profile.html"><i class="la la-user-tie"></i> Mənim Profilim</a>
                    </li>
                    <li><a href="candidate-dashboard-resume.html"><i class="la la-file-invoice"></i> Mənim CV-im</a>
                    </li>
                    <li><a href="candidate-dashboard-applied-job.html"><i class="la la-briefcase"></i> Təsdiq olunan
                            vakansiyalar
                        </a></li>
                    <li><a href="candidate-dashboard-job-alerts.html"><i class="la la-bell"></i>Vakansiya
                            xəbərdarlıqları</a></li>
                    <li><a href="candidate-dashboard-shortlisted-resume.html"><i class="la la-bookmark-o"></i> Qısa
                            siyahıya alınmış İşlər</a></li>
                    <li><a href="candidate-dashboard-cv-manager.html"><i class="la la-file-invoice"></i> CV
                            menecer</a></li>
                    <li><a href="dashboard-packages.html"><i class="la la-box"></i> Paketlər</a></li>
                    <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i> Mesajlar</a></li>
                    <li><a href="dashboard-change-password.html"><i class="la la-lock"></i>Şifrəni dəyiş</a></li>
                    <li><a href="dashboard-profile.html"><i class="la la-user-alt"></i> Profilə bax</a></li>
                    <li><a href="index.html"><i class="la la-sign-out"></i> Çıxış</a></li>
                    <li><a href="dashboard-delete.html"><i class="la la-trash"></i>Profili sil</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!-- End User Sidebar -->

        <!-- Dashboard -->
        {{--  <section class="user-dashboard">
            <div class="dashboard-outer">
                <div class="upper-title-box">
                    <h3>Howdy, Invision!</h3>
                    <div class="text">Ready to jump back in?</div>
                </div>
                <div class="row">
                    <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="ui-item">
                            <div class="left">
                                <i class="icon flaticon-briefcase"></i>
                            </div>
                            <div class="right">
                                <h4>22</h4>
                                <p>Posted Jobs</p>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="ui-item ui-red">
                            <div class="left">
                                <i class="icon la la-file-invoice"></i>
                            </div>
                            <div class="right">
                                <h4>9382</h4>
                                <p>Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="ui-item ui-yellow">
                            <div class="left">
                                <i class="icon la la-comment-o"></i>
                            </div>
                            <div class="right">
                                <h4>74</h4>
                                <p>Messages</p>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="ui-item ui-green">
                            <div class="left">
                                <i class="icon la la-bookmark-o"></i>
                            </div>
                            <div class="right">
                                <h4>32</h4>
                                <p>Shortlist</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">


                    <div class="col-xl-7 col-lg-12">
                        <!-- Graph widget -->
                        <div class="graph-widget ls-widget">
                            <div class="tabs-box">
                                <div class="widget-title">
                                    <h4>Your Profile Views</h4>
                                    <div class="chosen-outer">
                                        <!--Tabs Box-->
                                        <select class="chosen-select">
                                            <option>Last 6 Months</option>
                                            <option>Last 12 Months</option>
                                            <option>Last 16 Months</option>
                                            <option>Last 24 Months</option>
                                            <option>Last 5 year</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="widget-content">
                                    <canvas id="chart" width="100" height="45"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-12">
                        <!-- Notification Widget -->
                        <div class="notification-widget ls-widget">
                            <div class="widget-title">
                                <h4>Notifications</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="notification-list">
                                    <li><span class="icon flaticon-briefcase"></span> <strong>Wade Warren</strong>
                                        applied for a job <span class="colored">Web Developer</span></li>
                                    <li><span class="icon flaticon-briefcase"></span> <strong>Henry Wilson</strong>
                                        applied for a job <span class="colored">Senior Product Designer</span></li>
                                    <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Raul
                                            Costa</strong> applied for a job <span class="colored">Product Manager,
                                            Risk</span></li>
                                    <li><span class="icon flaticon-briefcase"></span> <strong>Jack Milk</strong>
                                        applied for a job <span class="colored">Technical Architect</span></li>
                                    <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Michel
                                            Arian</strong> applied for a job <span class="colored">Software
                                            Engineer</span></li>
                                    <li><span class="icon flaticon-briefcase"></span> <strong>Ali Tufan</strong>
                                        applied for a job <span class="colored">UI Designer</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <!-- applicants Widget -->
                        <div class="applicants-widget ls-widget">
                            <div class="widget-title">
                                <h4>Recent Applicants</h4>
                            </div>
                            <div class="widget-content">
                                <div class="row">
                                    <!-- Candidate block three -->
                                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-box">
                                            <div class="content">
                                                <figure class="image"><img src="images/resource/candidate-1.png"
                                                        alt=""></figure>
                                                <h4 class="name"><a href="#">Darlene Robertson</a></h4>
                                                <ul class="candidate-info">
                                                    <li class="designation">UI Designer</li>
                                                    <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                    <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                                </ul>
                                                <ul class="post-tags">
                                                    <li><a href="#">App</a></li>
                                                    <li><a href="#">Design</a></li>
                                                    <li><a href="#">Digital</a></li>
                                                </ul>
                                            </div>
                                            <div class="option-box">
                                                <ul class="option-list">
                                                    <li><button data-text="View Aplication"><span
                                                                class="la la-eye"></span></button></li>
                                                    <li><button data-text="Approve Aplication"><span
                                                                class="la la-check"></span></button></li>
                                                    <li><button data-text="Reject Aplication"><span
                                                                class="la la-times-circle"></span></button></li>
                                                    <li><button data-text="Delete Aplication"><span
                                                                class="la la-trash"></span></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Candidate block three -->
                                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-box">
                                            <div class="content">
                                                <figure class="image"><img src="images/resource/candidate-2.png"
                                                        alt=""></figure>
                                                <h4 class="name"><a href="#">Wade Warren</a></h4>
                                                <ul class="candidate-info">
                                                    <li class="designation">UI Designer</li>
                                                    <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                    <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                                </ul>
                                                <ul class="post-tags">
                                                    <li><a href="#">App</a></li>
                                                    <li><a href="#">Design</a></li>
                                                    <li><a href="#">Digital</a></li>
                                                </ul>
                                            </div>
                                            <div class="option-box">
                                                <ul class="option-list">
                                                    <li><button data-text="View Aplication"><span
                                                                class="la la-eye"></span></button></li>
                                                    <li><button data-text="Approve Aplication"><span
                                                                class="la la-check"></span></button></li>
                                                    <li><button data-text="Reject Aplication"><span
                                                                class="la la-times-circle"></span></button></li>
                                                    <li><button data-text="Delete Aplication"><span
                                                                class="la la-trash"></span></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Candidate block three -->
                                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-box">
                                            <div class="content">
                                                <figure class="image"><img src="images/resource/candidate-3.png"
                                                        alt=""></figure>
                                                <h4 class="name"><a href="#">Leslie Alexander</a></h4>
                                                <ul class="candidate-info">
                                                    <li class="designation">UI Designer</li>
                                                    <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                    <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                                </ul>
                                                <ul class="post-tags">
                                                    <li><a href="#">App</a></li>
                                                    <li><a href="#">Design</a></li>
                                                    <li><a href="#">Digital</a></li>
                                                </ul>
                                            </div>
                                            <div class="option-box">
                                                <ul class="option-list">
                                                    <li><button data-text="View Aplication"><span
                                                                class="la la-eye"></span></button></li>
                                                    <li><button data-text="Approve Aplication"><span
                                                                class="la la-check"></span></button></li>
                                                    <li><button data-text="Reject Aplication"><span
                                                                class="la la-times-circle"></span></button></li>
                                                    <li><button data-text="Delete Aplication"><span
                                                                class="la la-trash"></span></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Candidate block three -->
                                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-box">
                                            <div class="content">
                                                <figure class="image"><img src="images/resource/candidate-1.png"
                                                        alt=""></figure>
                                                <h4 class="name"><a href="#">Darlene Robertson</a></h4>
                                                <ul class="candidate-info">
                                                    <li class="designation">UI Designer</li>
                                                    <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                    <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                                </ul>
                                                <ul class="post-tags">
                                                    <li><a href="#">App</a></li>
                                                    <li><a href="#">Design</a></li>
                                                    <li><a href="#">Digital</a></li>
                                                </ul>
                                            </div>
                                            <div class="option-box">
                                                <ul class="option-list">
                                                    <li><button data-text="View Aplication"><span
                                                                class="la la-eye"></span></button></li>
                                                    <li><button data-text="Approve Aplication"><span
                                                                class="la la-check"></span></button></li>
                                                    <li><button data-text="Reject Aplication"><span
                                                                class="la la-times-circle"></span></button></li>
                                                    <li><button data-text="Delete Aplication"><span
                                                                class="la la-trash"></span></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Candidate block three -->
                                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-box">
                                            <div class="content">
                                                <figure class="image"><img src="images/resource/candidate-2.png"
                                                        alt=""></figure>
                                                <h4 class="name"><a href="#">Wade Warren</a></h4>
                                                <ul class="candidate-info">
                                                    <li class="designation">UI Designer</li>
                                                    <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                    <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                                </ul>
                                                <ul class="post-tags">
                                                    <li><a href="#">App</a></li>
                                                    <li><a href="#">Design</a></li>
                                                    <li><a href="#">Digital</a></li>
                                                </ul>
                                            </div>
                                            <div class="option-box">
                                                <ul class="option-list">
                                                    <li><button data-text="View Aplication"><span
                                                                class="la la-eye"></span></button></li>
                                                    <li><button data-text="Approve Aplication"><span
                                                                class="la la-check"></span></button></li>
                                                    <li><button data-text="Reject Aplication"><span
                                                                class="la la-times-circle"></span></button></li>
                                                    <li><button data-text="Delete Aplication"><span
                                                                class="la la-trash"></span></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Candidate block three -->
                                    <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-box">
                                            <div class="content">
                                                <figure class="image"><img src="images/resource/candidate-3.png"
                                                        alt=""></figure>
                                                <h4 class="name"><a href="#">Leslie Alexander</a></h4>
                                                <ul class="candidate-info">
                                                    <li class="designation">UI Designer</li>
                                                    <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                    <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                                </ul>
                                                <ul class="post-tags">
                                                    <li><a href="#">App</a></li>
                                                    <li><a href="#">Design</a></li>
                                                    <li><a href="#">Digital</a></li>
                                                </ul>
                                            </div>
                                            <div class="option-box">
                                                <ul class="option-list">
                                                    <li><button data-text="View Aplication"><span
                                                                class="la la-eye"></span></button></li>
                                                    <li><button data-text="Approve Aplication"><span
                                                                class="la la-check"></span></button></li>
                                                    <li><button data-text="Reject Aplication"><span
                                                                class="la la-times-circle"></span></button></li>
                                                    <li><button data-text="Delete Aplication"><span
                                                                class="la la-trash"></span></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Dashboard -->

        <!-- Copyright -->
        <div class="copyright-text">
            <p>©
                @php
                    echo date('Y');
                @endphp Searchjob.az. Bütün hüquqlar qorunur.</p>
        </div>

    </div><!-- End Page Wrapper -->


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/chosen.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/jquery.modal.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.polyfills.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/rellax.min.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script>
        Chart.defaults.global.defaultFontFamily = "Sofia Pro";
        Chart.defaults.global.defaultFontColor = '#888';
        Chart.defaults.global.defaultFontSize = '14';

        var ctx = document.getElementById('chart').getContext('2d');

        var chart = new Chart(ctx, {

            type: 'line',
            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                // Information about the dataset
                datasets: [{
                    label: "Views",
                    backgroundColor: 'transparent',
                    borderColor: '#1967D2',
                    borderWidth: "1",
                    data: [196, 132, 215, 362, 210, 252],
                    pointRadius: 3,
                    pointHoverRadius: 3,
                    pointHitRadius: 10,
                    pointBackgroundColor: "#1967D2",
                    pointHoverBackgroundColor: "#1967D2",
                    pointBorderWidth: "2",
                }]
            },

            // Configuration options
            options: {

                layout: {
                    padding: 10,
                },

                legend: {
                    display: false
                },
                title: {
                    display: false
                },

                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            borderDash: [6, 10],
                            color: "#d8d8d8",
                            lineWidth: 1,
                        },
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            display: false
                        },
                    }],
                },

                tooltips: {
                    backgroundColor: '#333',
                    titleFontSize: 13,
                    titleFontColor: '#fff',
                    bodyFontColor: '#fff',
                    bodyFontSize: 13,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    intersect: false
                }
            },
        });
    </script>

</body>


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 15:38:11 GMT -->

</html>
