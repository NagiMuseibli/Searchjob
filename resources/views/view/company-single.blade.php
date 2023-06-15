@extends('layouts.app')

@section('title')
    Company
@endsection

@section('view.company-single')
    <br><br><br><br>
    <!-- Job Detail Section -->
    <section class="job-detail-section">


        <div class="job-detail-outer">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="job-detail">
                            <h4>Şirkət haqqında</h4>
                            <p>{{ $company->about_company }}</p>

                        </div>

                        <!-- Related Jobs -->
                        <div class="related-jobs">
                            <div class="title-box">
                                <h3>{{ count($jobs) }} aktiv vakansiya</h3>
                                <div class="text">{{-- 2020 jobs live - 293 added today. --}}</div>
                            </div>

                            <!-- Job Block -->
                            @foreach ($jobs as $job)
                                <div class="job-block">
                                    <div class="inner-box">
                                        <div class="content">
                                            <span class="company-logo"><img src="images/resource/company-logo/1-3.png"
                                                    alt=""></span>
                                            <h4><a
                                                    href="{{ route('vacancy_show', ['id' => $job->id]) }}">{{ $job->title }}</a>
                                            </h4>
                                            <ul class="job-info">
                                                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                <li><span class="icon flaticon-map-locator"></span>{{ $job->location }}</li>
                                                <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                                                <li><span class="icon flaticon-money"></span> {{ $job->salary }}</li>
                                            </ul>
                                            <ul class="job-other-info">
                                                <li class="time">{{ $job->work_hour }}</li>

                                            </ul>
                                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one">Send Message</a>
                                <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
                            </div>

                            <div class="sidebar-widget company-widget">
                                <div class="widget-content">
                                    <div class="company-title">
                                        <div class="company-logo"><img src="images/resource/company-7.png" alt="">
                                        </div>
                                        <h5 class="company-name">{{ $company->company_name }}</h5>
                                        <a href="#" class="company-link">Açıq iş yerləri – {{ count($jobs) }}</a>
                                    </div>

                                    <ul class="company-info">
                                        {{-- <li>Primary industry: <span>Software</span></li>
                                        <li>Company size: <span>501-1,000</span></li>
                                        <li>Founded in: <span>2011</span></li> --}}
                                        <li>Telefon: <span>{{ $company->phone }}</span></li>
                                        <li>Email: <span>{{ $company->cv_email }}</span></li>
                                        <li>Məkan: <span>{{ $company->location }}</span></li>
                                        <li>Sosial media:
                                            <div class="social-links">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="btn-box"><a href="#"
                                            class="theme-btn btn-style-three">www.invisionapp.com</a></div>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Job Detail Section -->
@endsection
