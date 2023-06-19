@extends('layouts.app')

@section('title')
    Şirkətlər
@endsection

@section('view.companies')
    <br><br><br><br>
    <!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Şirkətlər</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">SEARCHJOB.AZ</a></li>
                    <li>Şirkətlər</li>
                </ul>
            </div>
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
                    <div class="inner-column pd-right">
                        <form action="{{ route('companies') }}" method="get">
                            <div class="filters-outer">
                                <button type="button" class="theme-btn close-filters">X</button>

                                <!-- Filter Block -->
                                <div class="filter-block">
                                    <h4>Açar sözü ilə axtar</h4>
                                    <div class="form-group">
                                        <input type="text" name="company" placeholder="Şirkət adı">
                                        <span class="icon flaticon-search-3"></span>
                                    </div>
                                </div>

                                <!-- Filter Block -->
                                <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                                    <button type="submit" class="theme-btn btn-style-one">Axtar</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="ls-outer">
                        <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                        <!-- ls Switcher -->
                        {{-- <div class="ls-switcher">
                            <div class="showing-result">
                                <div class="text">Ümumi <strong>{{ $company_count }}</strong> şirkət</div>
                            </div>

                        </div> --}}


                        <div class="row">
                            @if ($companies->isEmpty())
                                {{-- <div class="alert-danger">Axtardığınız sorğu üzrə nəticə tapılmadı..</div> --}}
                                {{-- <img src="images/searchnotfound.jpg" style="max-width:250px; justify-content: center;" --}}
                                <div style="display: flex; justify-content: center;">
                                    <img src="images/nosearch.avif" style="max-width:500px;" alt="">
                                </div>
                            @endif
                            <!-- Company Block Four -->
                            @foreach ($companies as $company)
                                <div class="company-block-four col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                        <span class="featured">Featured</span>
                                        <span class="company-logo"><img src="{{ 'images/companies/' . $company->image }}"
                                                alt="{{ $company->company_name }}"></span>
                                        <h4><a
                                                href="{{ route('single_company', ['id' => $company->id]) }}">{{ $company->company_name }}</a>
                                        </h4>
                                        <ul class="job-info">

                                            <li>
                                                <?php
                                                    if($company->location == null){?>
                                                <span class="icon flaticon-map-locator"></span> Təyin edilməyib
                                                <?php } else {?>
                                                <span class="icon flaticon-map-locator"></span> {{ $company->location }}
                                                <?php } ?>
                                            </li>
                                        </ul>
                                        {{-- <div class="job-type">{{ $jobs->count }} vakansiya</div> --}}
                                    </div>
                                </div>
                            @endforeach


                        </div>

                        <!-- Pagination -->
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Listing Page Section -->
@endsection
