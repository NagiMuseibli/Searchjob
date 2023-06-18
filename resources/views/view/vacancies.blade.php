@extends('layouts.app')
@section('title')
    Vakansiyalar
@endsection
@section('view.vacancies')
    <br><br><br><br>
    <!--Page Title-->
    <section class="page-title style-two">
        <div class="auto-container">
            <!-- <div class="title-outer">
                                                                                                                                                                                                                                                                                                                                              <h1>Find Jobs</h1>
                                                                                                                                                                                                                                                                                                                                              <ul class="page-breadcrumb">
                                                                                                                                                                                                                                                                                                                                                  <li><a href="index.html">Home</a></li>
                                                                                                                                                                                                                                                                                                                                                  <li>Jobs</li>
                                                                                                                                                                                                                                                                                                                                              </ul>
                                                                                                                                                                                                                                                                                                                                          </div> -->

            <!-- Job Search Form -->
            <div class="job-search-form">
                <form method="get" action="{{ route('vacancies') }}">
                    @csrf
                    <div class="row">
                        <!-- Form Group -->
                        <div class="form-group col-lg-5 col-md-12 col-sm-12">
                            <span class="icon flaticon-search-1"></span>
                            <input type="text" name="searchTerm" placeholder="İş adı, açar sözlər, və ya şirkət">
                        </div>

                        <!-- Form Group -->
                        {{-- <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                            <span class="icon flaticon-map-locator"></span>
                            <input type="text" name="field_name" placeholder="Şəhər">
                        </div> --}}

                        <!-- Form Group -->
                        <div class="form-group col-lg-5 col-md-12 col-sm-12 location">
                            <span class="icon flaticon-briefcase"></span>
                            <select name="category" class="chosen-select">
                                <option value="">Bütün kateqoriyalar</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                            <button type="submit" class="theme-btn btn-style-one">Axtar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Job Search Form -->
        </div>
    </section>
    <!--End Page Title-->

    <!-- Listing Section -->
    <section class="ls-section">
        <div class="auto-container">
            <div class="filters-backdrop"></div>

            <div class="row">

                <!-- Filters Column -->
                <div class="filters-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="filters-outer">
                            <button type="button" class="theme-btn close-filters">X</button>

                            <!-- Switchbox Outer -->
                            <div class="switchbox-outer">
                                <h4>Job type</h4>
                                <ul class="switchbox">
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                            <span class="title">Freelance</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                            <span class="title">Full Time</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                            <span class="title">Internship</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                            <span class="title">Part Time</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                            <span class="title">Temporary</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <!-- Checkboxes Ouer -->
                            <div class="checkbox-outer">
                                <h4>Date Posted</h4>
                                <ul class="checkboxes">
                                    <li>
                                        <input id="check-f" type="checkbox" name="check">
                                        <label for="check-f">All</label>
                                    </li>
                                    <li>
                                        <input id="check-a" type="checkbox" name="check">
                                        <label for="check-a">Last Hour</label>
                                    </li>
                                    <li>
                                        <input id="check-b" type="checkbox" name="check">
                                        <label for="check-b">Last 24 Hours</label>
                                    </li>
                                    <li>
                                        <input id="check-c" type="checkbox" name="check">
                                        <label for="check-c">Last 7 Days</label>
                                    </li>
                                    <li>
                                        <input id="check-d" type="checkbox" name="check">
                                        <label for="check-d">Last 14 Days</label>
                                    </li>
                                    <li>
                                        <input id="check-e" type="checkbox" name="check">
                                        <label for="check-e">Last 30 Days</label>
                                    </li>
                                </ul>
                            </div>

                            <!-- Checkboxes Ouer -->
                            <div class="checkbox-outer">
                                <h4>Experience Level</h4>
                                <ul class="checkboxes square">
                                    <li>
                                        <input id="check-ba" type="checkbox" name="check">
                                        <label for="check-ba">All</label>
                                    </li>
                                    <li>
                                        <input id="check-bb" type="checkbox" name="check">
                                        <label for="check-bb">Internship</label>
                                    </li>
                                    <li>
                                        <input id="check-bc" type="checkbox" name="check">
                                        <label for="check-bc">Entry level</label>
                                    </li>
                                    <li>
                                        <input id="check-bd" type="checkbox" name="check">
                                        <label for="check-bd">Associate</label>
                                    </li>
                                    <li>
                                        <input id="check-be" type="checkbox" name="check">
                                        <label for="check-be">Mid-Senior level4</label>
                                    </li>
                                    <li>
                                        <button class="view-more"><span class="icon flaticon-plus"></span> View
                                            More</button>
                                    </li>
                                </ul>
                            </div>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Salary</h4>

                                <div class="range-slider-one salary-range">
                                    <div class="salary-range-slider"></div>
                                    <div class="input-outer">
                                        <div class="amount-outer">
                                            <span class="amount salary-amount">
                                                $<span class="min">0</span>
                                                $<span class="max">0</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Tags</h4>
                                <ul class="tags-style-one">
                                    <li><a href="#">app</a></li>
                                    <li><a href="#">administrative</a></li>
                                    <li><a href="#">android</a></li>
                                    <li><a href="#">wordpress</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">react</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Call To Action -->
                        <div class="call-to-action-four">
                            <h5>Recruiting?</h5>
                            <p>Advertise your jobs to millions of monthly users and search 15.8 million CVs in our database.
                            </p>
                            <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Start
                                    Recruiting Now</span></a>
                            <div class="image" style="background-image: url(images/resource/ads-bg-4.png);"></div>
                        </div>
                        <!-- End Call To Action -->
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="ls-outer">
                        <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                        <!-- ls Switcher -->
                        <div class="ls-switcher">
                            {{-- <div class="showing-result">
                                <div class="text">Ümumi <strong>{{ $job_count }}</strong> vakansiya</div>
                            </div> --}}
                            {{-- <div class="sort-by">
                                <select class="chosen-select">
                                    <option>New Jobs</option>
                                    <option>Freelance</option>
                                    <option>Full Time</option>
                                    <option>Internship</option>
                                    <option>Part Time</option>
                                    <option>Temporary</option>
                                </select>

                                <select class="chosen-select">
                                    <option>Show 10</option>
                                    <option>Show 20</option>
                                    <option>Show 30</option>
                                    <option>Show 40</option>
                                    <option>Show 50</option>
                                    <option>Show 60</option>
                                </select>
                            </div> --}}
                        </div>

                        @if ($jobs->isEmpty())
                            {{-- <div class="alert-danger">Axtardığınız sorğu üzrə nəticə tapılmadı..</div> --}}
                            {{-- <img src="images/searchnotfound.jpg" style="max-width:250px; justify-content: center;" --}}
                            <div style="display: flex; justify-content: center;">
                                <img src="images/nosearch.avif" style="max-width:500px;" alt="">
                            </div>
                        @endif

                        <!-- Job Block -->
                        @foreach ($jobs as $job)
                            <div class="job-block">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img
                                                src="{{ 'images/companies/' . $job->company->image }}"
                                                alt=""></span>
                                        <h4><a
                                                href="{{ route('vacancy_show', ['id' => $job->id]) }}">{{ $job->title }}</a>
                                        </h4>
                                        <ul class="job-info">
                                            <li><span class="icon flaticon-briefcase"></span>
                                                {{ $job->category->name }}
                                            </li>
                                            <li><span class="icon flaticon-map-locator"></span> {{ $job->location }}
                                            </li>
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
                                            <li class="privacy">{{ $job->work_hour }}</li>
                                            <li class="time">{{ $job->company->company_name }}</li>
                                            <li class="required"><i class="fa fa-eye"> {{ $job->count }}</i></li>
                                        </ul>

                                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <!-- Pagination -->

                        <nav class="pagination">
                            {{ $jobs->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Listing Page Section -->
@endsection
