@extends('layouts.app')
@section('title')
    Searchjob
@endsection

@section('view.home')
    <!-- Banner Section-->
    <section class="banner-section">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInUp" data-wow-delay="1000ms">
                        <div class="title-box">
                            <h3>Burada Sizin üçün<span class="colored">
                                    @php
                                        $count = count($jobs);
                                    @endphp
                                    {{ $count }}
                                </span> Vakansiya var!<br></h3>
                            <div class="text">İş, Məşğulluq və Karyera İmkanları Tapın</div>
                        </div>

                        <!-- Job Search Form -->
                        <div class="job-search-form">
                            <form method="get" action="{{ route('vacancies') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <span class="icon flaticon-search-1"></span>
                                        <input type="text" name="searchTerm"
                                            placeholder="İş adı, açar sözlər, və ya şirkət">
                                    </div>
                                    <!-- Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 btn-box">
                                        <button type="submit" class="theme-btn btn-style-one"><span
                                                class="btn-title">Axtar</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Job Search Form -->

                        <!-- Popular Search -->
                        {{-- <div class="popular-searches">
                            <span class="title">Popular Searches : </span>
                            <a href="#">Designer</a>,
                            <a href="#">Developer</a>,
                            <a href="#">Web</a>,
                            <a href="#">IOS</a>,
                            <a href="#">PHP</a>,
                            <a href="#">Senior</a>,
                            <a href="#">Engineer</a>,
                        </div> --}}
                        <!-- End Popular Search -->
                    </div>
                </div>

                <div class="image-column col-lg-5 col-md-12">
                    <div class="image-box">
                        <figure class="main-image wow fadeIn" data-wow-delay="500ms"><img
                                src="images/resource/banner-img-1.png" alt=""></figure>

                        <!-- Info BLock One -->
                        <div class="info_block anm wow fadeIn" data-wow-delay="1000ms" data-speed-x="2" data-speed-y="2">
                            <span class="icon flaticon-email-3"></span>
                            <p>İş Sorğuları</p>
                        </div>

                        <!-- Info BLock Two -->
                        <div class="info_block_two anm wow fadeIn" data-wow-delay="2000ms" data-speed-x="1"
                            data-speed-y="1">
                            <p>0 Namizəd</p>
                            <div class="image"><img src="images/resource/multi-peoples.png" alt=""></div>
                        </div>

                        <!-- Info BLock Three -->
                        <div class="info_block_three anm wow fadeIn" data-wow-delay="1500ms" data-speed-x="4"
                            data-speed-y="4">
                            <span class="icon flaticon-briefcase"></span>
                            <p>0 Şirkət</p>
                            {{-- <span class="sub-text">0</span> --}}
                            <span class="right_icon fa fa-check"></span>
                        </div>

                        <!-- Info BLock Four -->
                        <div class="info_block_four anm wow fadeIn" data-wow-delay="2500ms" data-speed-x="3"
                            data-speed-y="3">
                            <span class="icon flaticon-file"></span>
                            <div class="inner">
                                <p>CV-nizi yükləyin</p>
                                <span class="sub-text">It only takes a few seconds</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section-->

    <!-- Job Categories -->
    <section class="job-categories">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Məşhur Kateqoriyalar</h2>
            </div>

            <div class="row wow fadeInUp">

                @foreach ($categories as $category)
                    <div class="category-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <span class="icon flaticon-web-programming"></span>
                                <h4><a href="{{ route('vacancies') }}"
                                        value="{{ $category->name }}">{{ $category->name }}</a></h4>
                                {{-- <p>({{ $count_job }} aktiv vakansiya)</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Job Categories -->

    <!-- Job Section -->
    <section class="job-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Yeni vakansiyalar</h2>
                <div class="text">Dəyərinizi bilin və həyatınıza uyğun işi tapın</div>
            </div>

            <div class="row wow fadeInUp">
                <!-- Job Block -->
                @foreach ($jobs as $job)
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <span class="company-logo"><img src="{{ 'images/companies/' . $job->company->image }}"
                                        alt=""></span>
                                <h4><a href="{{ route('vacancy_show', ['id' => $job->id]) }}">{{ $job->title }}</a>
                                </h4>
                                <ul class="job-info">
                                    <li><span class="icon flaticon-briefcase"></span> {{ $job->category->name }}</li>
                                    <li><span class="icon flaticon-map-locator"></span> {{ $job->location }}</li>
                                    <li><span class="icon flaticon-clock-3"></span>
                                        @php
                                            $date = explode(' ', $job->created_at);
                                            $date = $date[0];
                                            $date = explode('-', $date);
                                            $date = "$date[2].$date[1].$date[0]";
                                            
                                        @endphp
                                        {{ $date }}
                                    </li>
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

            <div class="btn-box">
                <a href="{{ route('vacancies') }}" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Daha
                        çox</span></a>
            </div>
        </div>
    </section>
    <!-- End Job Section -->

    <!-- Testimonial Section -->

    <!-- End Testimonial Section -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="sponsors-outer wow fadeInUp">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                @foreach ($companies as $company)
                    <li class="slide-item">
                        <figure class="image-box"><a href="{{ route('single_company', ['id' => $company->id]) }}"><img
                                    src="{{ 'images/companies/' . $company->image }}" alt=""></a>
                        </figure>
                    </li>
                @endforeach



            </ul>
        </div>
    </section>
    <!-- End Clients Section-->

    <!-- About Section -->

    <!-- End About Section -->

    <!-- News Section -->

    <!-- End News Section -->

    <!-- App Section -->

    <!-- End App Section -->

    <!-- Call To Action -->

    <!-- End Call To Action -->
@endsection
