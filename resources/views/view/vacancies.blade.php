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
                        <div class="form-group col-lg-10 col-md-12 col-sm-12">
                            <span class="icon flaticon-search-1"></span>
                            <input type="text" name="searchTerm" placeholder="İş adı, açar sözlər">
                        </div>

                        <!-- Form Group -->
                        {{-- <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                            <span class="icon flaticon-map-locator"></span>
                            <input type="text" name="field_name" placeholder="Şəhər">
                        </div> --}}

                        <!-- Form Group -->
                        {{-- <div class="form-group col-lg-5 col-md-12 col-sm-12 location">
                            <span class="icon flaticon-briefcase"></span>
                            <select name="category" class="chosen-select">
                                <option value="">Bütün kateqoriyalar</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}

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
                            <form action="{{ route('vacancies') }}" method="get">
                                @csrf
                                <button type="button" class="theme-btn close-filters">X</button>
                                <!-- Filter Block -->

                                <div class="filter-block">
                                    <h4>Kateqoriya</h4>
                                    <div class="form-group">
                                        <select class="chosen-select" name="category">
                                            <option value="">Kateqoriya seç</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="icon flaticon-briefcase"></span>
                                    </div>
                                </div>

                                <div class="filter-block">
                                    <h4>Şirkət</h4>
                                    <div class="form-group">
                                        <select class="chosen-select" name="company">
                                            <option value="">Şirkət seç</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="icon flaticon-briefcase"></span>
                                    </div>
                                </div>



                                <div class="filter-block">
                                    <h4>Şəhər</h4>
                                    <div class="form-group">
                                        <select class="chosen-select" name="city">
                                            <option value="">Şəhər seç</option>
                                            <option value="Ağdaş">Ağdaş</option>
                                            <option value="Ağcabədi">Ağcabədi</option>
                                            <option value="Ağstafa">Ağstafa</option>
                                            <option value="Ağsu">Ağsu</option>
                                            <option value="Astara">Astara</option>
                                            <option value="Bakı">Bakı </option>
                                            <option value="Balakən">Balakən </option>
                                            <option value="Bərdə">Bərdə </option>
                                            <option value="Beyləqan">Beyləqan </option>
                                            <option value="Biləsuvar">Biləsuvar </option>
                                            <option value="Füzuli">Füzuli </option>
                                            <option value="Qəbələ">Qəbələ </option>
                                            <option value="Gəncə">Gəncə </option>
                                            <option value="Göranboy">Göranboy</option>
                                            <option value="Göyçay">Göyçay</option>
                                            <option value="Göygöl">Göygöl </option>
                                            <option value="Hacıqabul">Hacıqabul </option>
                                            <option value="İmişli">İmişli </option>
                                            <option value="İsmayıllı">İsmayıllı </option>
                                            <option value="Cəbrayıl">Cəbrayıl </option>
                                            <option value="Cəlilabad">Cəlilabad </option>
                                            <option value="Xaçmaz">Xaçmaz </option>
                                            <option value="Xankəndi">Xankəndi </option>
                                            <option value="Xanlar">Xanlar </option>
                                            <option value="Kürdəmir">Kürdəmir </option>
                                            <option value="Lənkəran">Lənkəran </option>
                                            <option value="Laçın">Laçın </option>
                                            <option value="Lerik">Lerik </option>
                                            <option value="Masallı">Masallı </option>
                                            <option value="Mingəçevir">Mingəçevir </option>
                                            <option value="Naftalan">Naftalan </option>
                                            <option value="Naxçıvan">Naxçıvan </option>
                                            <option value="Neftçala">Neftçala </option>
                                            <option value="Oğuz">Oğuz </option>
                                            <option value="Ordubad">Ordubad </option>
                                            <option value="Qəbələ">Qəbələ </option>
                                            <option value="Qax">Qax </option>
                                            <option value="Qazax">Qazax </option>
                                            <option value="Quba">Quba </option>
                                            <option value="Qubadlı">Qubadlı </option>
                                            <option value="Qusar">Qusar </option>
                                            <option value="Saatlı">Saatlı </option>
                                            <option value="Sabirabad">Sabirabad </option>
                                            <option value="Şabran">Şabran </option>
                                            <option value="Şəki">Şəki </option>
                                            <option value="Şamaxı">Şamaxı </option>
                                            <option value="Şəmkir">Şəmkir </option>
                                            <option value="Şirvan">Şirvan </option>
                                            <option value="Şuşa">Şuşa </option>
                                            <option value="Siyəzən">Siyəzən </option>
                                            <option value="Sumqayıt">Sumqayıt </option>
                                            <option value="Tartar">Tartar</option>
                                            <option value="Tovuz">Tovuz </option>
                                            <option value="Ucar">Ucar </option>
                                            <option value="Yardımlı">Yardımlı </option>
                                            <option value="Yevlax">Yevlax </option>
                                            <option value="Zəngilan">Zəngilan </option>
                                            <option value="Zaqatala">Zaqatala </option>
                                            <option value="Siyəzən">Siyəzən </option>
                                            <option value="Zərdab">Zərdab </option>

                                        </select>
                                        <span class="icon flaticon-briefcase"></span>
                                    </div>
                                </div>

                                <div class="filter-block">
                                    <h4>İş qrafiki</h4>
                                    <div class="form-group">
                                        <select class="chosen-select" name="work_graphic">
                                            <option value="">İş qrafiki seç</option>
                                            <option value="Full time">Full time</option>
                                            <option value="Part time">Part time</option>
                                            <option value="Freelance">Freelance</option>
                                            <option value="Distant">Distant</option>

                                        </select>
                                        <span class="icon flaticon-briefcase"></span>
                                    </div>
                                </div>

                                <!-- Filter Block -->
                                <div class="filter-block">
                                    <h4>Əmək haqqı</h4>

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

                                    <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                                        <button type="submit" class="theme-btn btn-style-one">Axtar</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <!-- Call To Action -->
                        {{-- <div class="call-to-action-four">
                            <h5>Recruiting?</h5>
                            <p>Advertise your jobs to millions of monthly users and search 15.8 million CVs in our database.
                            </p>
                            <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Start
                                    Recruiting Now</span></a>
                            <div class="image" style="background-image: url(images/resource/ads-bg-4.png);"></div>
                        </div> --}}
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
