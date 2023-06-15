@extends('layouts.app')

@section('title')
    Namizədlər
@endsection

@section('view.resumes')
    <br><br><br><br>
    <!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Showing All Resumes</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Resumes</li>
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
                    <div class="inner-column">
                        <div class="filters-outer">
                            <button type="button" class="theme-btn close-filters">X</button>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Search by Keywords</h4>
                                <div class="form-group">
                                    <input type="text" name="listing-search" placeholder="By Resumes">
                                    <span class="icon flaticon-search-3"></span>
                                </div>
                            </div>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Location</h4>
                                <div class="form-group">
                                    <input type="text" name="listing-search" placeholder="City or postcode">
                                    <span class="icon flaticon-map-locator"></span>
                                </div>
                                <p>Radius around selected destination</p>
                                <div class="range-slider-one">
                                    <div class="area-range-slider"></div>
                                    <div class="input-outer">
                                        <div class="amount-outer"><span class="area-amount"></span>km</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Category</h4>
                                <div class="form-group">
                                    <select class="chosen-select">
                                        <option>Choose a category</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Industrial</option>
                                        <option>Apartments</option>
                                    </select>
                                    <span class="icon flaticon-briefcase"></span>
                                </div>
                            </div>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Candidate Gender</h4>
                                <div class="form-group">
                                    <select class="chosen-select">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>other</option>
                                    </select>
                                    <span class="icon flaticon-heart-1"></span>
                                </div>
                            </div>

                            <!-- Checkboxes Ouer -->
                            <div class="checkbox-outer">
                                <h4>Date Posted</h4>
                                <ul class="checkboxes">
                                    <li>
                                        <input id="check-1" type="checkbox" name="check">
                                        <label for="check-1">All</label>
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
                                <h4>Experience</h4>
                                <ul class="checkboxes">
                                    <li>
                                        <input id="check-f" type="checkbox" name="check">
                                        <label for="check-f">0-2 Years</label>
                                    </li>
                                    <li>
                                        <input id="check-g" type="checkbox" name="check">
                                        <label for="check-g">10-12 Years</label>
                                    </li>
                                    <li>
                                        <input id="check-h" type="checkbox" name="check">
                                        <label for="check-h">12-16 Years</label>
                                    </li>
                                    <li>
                                        <input id="check-i" type="checkbox" name="check">
                                        <label for="check-i">16-20 Years</label>
                                    </li>
                                    <li>
                                        <input id="check-j" type="checkbox" name="check">
                                        <label for="check-j">20-25 Years</label>
                                    </li>
                                    <li>
                                        <button class="view-more"><span class="icon flaticon-plus"></span> View
                                            More</button>
                                    </li>
                                </ul>
                            </div>

                            <!-- Checkboxes Ouer -->
                            <div class="checkbox-outer">
                                <h4>Education Levels</h4>
                                <ul class="checkboxes">
                                    <li>
                                        <input id="check-2" type="checkbox" name="check">
                                        <label for="check-2">Certificate</label>
                                    </li>
                                    <li>
                                        <input id="check-3" type="checkbox" name="check">
                                        <label for="check-3">Diploma</label>
                                    </li>
                                    <li>
                                        <input id="check-4" type="checkbox" name="check">
                                        <label for="check-4">Associate Degree</label>
                                    </li>
                                    <li>
                                        <input id="check-5" type="checkbox" name="check">
                                        <label for="check-5">Bachelor Degree</label>
                                    </li>
                                    <li>
                                        <input id="check-6" type="checkbox" name="check">
                                        <label for="check-6">Master’s Degree</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="ls-outer">
                        <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                        <!-- ls Switcher -->
                        <div class="ls-switcher">
                            <div class="showing-result">
                                <div class="text">Showing <strong>41-60</strong> of <strong>944</strong> jobs</div>
                            </div>
                            <div class="sort-by">
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
                            </div>
                        </div>


                        <div class="row">
                            <!-- Candidate block Four -->
                            <div class="candidate-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <ul class="job-other-info">
                                        <li class="green">Featured</li>
                                    </ul>
                                    <span class="thumb"><img src="images/resource/candidate-1.png"
                                            alt=""></span>
                                    <h3 class="name"><a href="#">Floyd Miles</a></h3>
                                    <span class="cat">UI Designer</span>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                        <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                    </ul>
                                    <ul class="post-tags">
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Digital</a></li>
                                    </ul>
                                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                                </div>
                            </div>

                            <!-- Candidate block Four -->
                            <div class="candidate-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <ul class="job-other-info">
                                        <li class="green">Featured</li>
                                    </ul>
                                    <span class="thumb"><img src="images/resource/candidate-2.png"
                                            alt=""></span>
                                    <h3 class="name"><a href="#">Darrell Steward</a></h3>
                                    <span class="cat">UI Designer</span>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                        <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                    </ul>
                                    <ul class="post-tags">
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Digital</a></li>
                                    </ul>
                                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                                </div>
                            </div>

                            <!-- Candidate block Four -->
                            <div class="candidate-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <ul class="job-other-info">
                                        <li class="green">Featured</li>
                                    </ul>
                                    <span class="thumb"><img src="images/resource/candidate-3.png"
                                            alt=""></span>
                                    <h3 class="name"><a href="#">Brooklyn Simmons</a></h3>
                                    <span class="cat">UI Designer</span>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                        <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                    </ul>
                                    <ul class="post-tags">
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Digital</a></li>
                                    </ul>
                                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                                </div>
                            </div>

                            <!-- Candidate block Four -->
                            <div class="candidate-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <ul class="job-other-info">
                                        <li class="green">Featured</li>
                                    </ul>
                                    <span class="thumb"><img src="images/resource/candidate-4.png"
                                            alt=""></span>
                                    <h3 class="name"><a href="#">Jane Cooper</a></h3>
                                    <span class="cat">UI Designer</span>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                        <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                    </ul>
                                    <ul class="post-tags">
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Digital</a></li>
                                    </ul>
                                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                                </div>
                            </div>

                            <!-- Candidate block Four -->
                            <div class="candidate-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <ul class="job-other-info">
                                        <li class="green">Featured</li>
                                    </ul>
                                    <span class="thumb"><img src="images/resource/candidate-5.png"
                                            alt=""></span>
                                    <h3 class="name"><a href="#">Ralph Edwards</a></h3>
                                    <span class="cat">UI Designer</span>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                        <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                    </ul>
                                    <ul class="post-tags">
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Digital</a></li>
                                    </ul>
                                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                                </div>
                            </div>

                            <!-- Candidate block Four -->
                            <div class="candidate-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <ul class="job-other-info">
                                        <li class="green">Featured</li>
                                    </ul>
                                    <span class="thumb"><img src="images/resource/candidate-6.png"
                                            alt=""></span>
                                    <h3 class="name"><a href="#">Ronald Richards</a></h3>
                                    <span class="cat">UI Designer</span>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                        <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                    </ul>
                                    <ul class="post-tags">
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Digital</a></li>
                                    </ul>
                                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                                </div>
                            </div>

                            <!-- Candidate block Four -->
                            <div class="candidate-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <ul class="job-other-info">
                                        <li class="green">Featured</li>
                                    </ul>
                                    <span class="thumb"><img src="images/resource/candidate-7.png"
                                            alt=""></span>
                                    <h3 class="name"><a href="#">Robert Fox</a></h3>
                                    <span class="cat">UI Designer</span>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                        <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                    </ul>
                                    <ul class="post-tags">
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Digital</a></li>
                                    </ul>
                                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                                </div>
                            </div>

                            <!-- Candidate block Four -->
                            <div class="candidate-block-four col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <ul class="job-other-info">
                                        <li class="green">Featured</li>
                                    </ul>
                                    <span class="thumb"><img src="images/resource/candidate-8.png"
                                            alt=""></span>
                                    <h3 class="name"><a href="#">Esther Howard</a></h3>
                                    <span class="cat">UI Designer</span>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                        <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                    </ul>
                                    <ul class="post-tags">
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Digital</a></li>
                                    </ul>
                                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <nav class="ls-pagination">
                            <ul>
                                <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="current-page">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Listing Page Section -->
@endsection
