@extends('layouts.app')
@section('title')
    {{ $jobs->title }}
@endsection
@section('view.job-single')
    <br><br><br>
    <section class="job-detail-section">
        <div class="job-detail-outer">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="job-block-outer">
                            <!-- Job Block -->
                            <div class="job-block-seven">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img
                                                src="{{ 'images/companies/' . $company->company->image }}"
                                                alt=""></span>
                                        <h4><a href="#">{{ $jobs->title }}</a></h4>
                                        <ul class="job-info">
                                            <li><span class="icon flaticon-briefcase"></span> {{ $jobs->category->name }}
                                            </li>
                                            <li><span class="icon flaticon-map-locator"></span> {{ $jobs->location }}</li>
                                            <li><span class="icon flaticon-clock-3"></span>
                                                @php
                                                    $date = explode(' ', $jobs->created_at);
                                                    $date = $date[0];
                                                    $date = explode('-', $date);
                                                    $date = "$date[2].$date[1].$date[0]";
                                                @endphp
                                                {{ $date }}
                                            </li>
                                            <li><span class="icon flaticon-money"></span> {{ $jobs->salary }}</li>
                                        </ul>
                                        <ul class="job-other-info">
                                            <li class="time">{{ $jobs->work_hour }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <div class="job-detail">
                                <h4>Vakansiyanın təsviri</h4>
                                <p>
                                    {{ $jobs->description }}
                                </p>
                                <h4>Xüsusi tələblər</h4>
                                <ul class="list-style-three">
                                    <li>
                                        {{ $jobs->requirements }}
                                    </li>
                                </ul>
                                {{-- <h4>Bacarıq və təcrübə</h4>
                                <ul class="list-style-three">
                                    <li>You have at least 3 years’ experience working as a Product Designer.</li>
                                    <li>You have experience using Sketch and InVision or Framer X</li>
                                    <li>You have some previous experience working in an agile environment – Think two-week
                                        sprints.</li>
                                    <li>You are familiar using Jira and Confluence in your workflow</li>
                                </ul> --}}
                                <h5>Müraciət etmək üçün: {{ $company->company->cv_email }}</h5>
                            </div>
                        </div>

                        <!-- Other Options -->
                        {{-- <div class="other-options">
                            <div class="social-share">
                                <h5>Share this job</h5>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
                                <a href="#" class="google"><i class="fab fa-google"></i> Google+</a>
                            </div>
                        </div> --}}

                        <!-- Related Jobs -->
                        <div class="related-jobs">
                            <div class="title-box">
                                <h3>Oxşar vakansiyalar</h3>
                                {{-- <div class="text">2020 jobs live - 293 added today.</div> --}}
                            </div>

                            <div class="row">
                                <!-- Job Block -->
                                @foreach ($related_jobs as $related_job)
                                    <div class="job-block-four col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <ul class="job-other-info">
                                                <li class="time">{{ $related_job->job_hour }}</li>
                                            </ul>
                                            <span class="company-logo"><img
                                                    src="{{ 'images/companies/' . $related_job->company_image }}"
                                                    alt=""></span>
                                            <span class="company-name">{{ $related_job->company_name }}</span>
                                            <h4><a
                                                    href="{{ route('vacancy_show', ['id' => $related_job->job_id]) }}">{{ $related_job->job_title }}</a>
                                            </h4>
                                            <div class="location"><span class="icon flaticon-map-locator"></span>
                                                {{ $related_job->job_location }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one">Apply For Job</a>
                                <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
                            </div>

                            <div class="sidebar-widget">
                                <!-- Job Overview -->
                                <h4 class="widget-title">Vakansiya haqqında</h4>
                                <div class="widget-content">
                                    <ul class="job-overview">
                                        <li>
                                            <i class="icon icon-calendar"></i>
                                            <h5>Yerləşdirilmə tarixi:</h5>
                                            <span>
                                                @php
                                                    $first_date1 = explode(' ', $jobs->created_at);
                                                    $first_date = $first_date1[0];
                                                @endphp
                                                {{ $first_date }}
                                            </span>
                                        </li>
                                        <li>
                                            <i class="icon icon-expiry"></i>
                                            <h5>Bitmə tarixi:</h5>
                                            <span>
                                                @php
                                                    if ($jobs->deadline < date('Y-m-d')) {
                                                        $deadline = 'Bitmişdir';
                                                    } else {
                                                        $deadline = $jobs->deadline;
                                                    }
                                                @endphp
                                                {{ $deadline }}
                                            </span>
                                        </li>
                                        <li>
                                            <i class="icon icon-location"></i>
                                            <h5>Məkan:</h5>
                                            <span>{{ $jobs->location }}</span>
                                        </li>
                                        <li>
                                            <i class="icon icon-user-2"></i>
                                            <h5>Başlıq:</h5>
                                            <span>{{ $jobs->title }}</span>
                                        </li>
                                        <li>
                                            <i class="icon icon-salary"></i>
                                            <h5>Əmək haqqı:</h5>
                                            <span>{{ $jobs->salary }}</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Job Skills -->
                                <h4 class="widget-title">Xüsusi tələblər</h4>
                                <div class="widget-content">
                                    <ul class="job-skills">
                                        <li><a href="#">app</a></li>
                                        <li><a href="#">administrative</a></li>
                                        <li><a href="#">android</a></li>
                                        <li><a href="#">wordpress</a></li>
                                        <li><a href="#">design</a></li>
                                        <li><a href="#">react</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget company-widget">
                                <div class="widget-content">
                                    <div class="company-title">
                                        <div class="company-logo"><img
                                                src="{{ 'images/companies/' . $company->company->image }}" alt="">
                                        </div>
                                        <h5 class="company-name">{{ $company->company->company_name }}</h5>
                                        <a href="{{ route('single_company', ['id' => $company->company->id]) }}"
                                            class="profile-link">Şirkətin profilinə bax</a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
