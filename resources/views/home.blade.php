@extends ('layouts.template')

@section ('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="row">
                <!-- Start Banner Hero -->
                <div class="banner-wrapper bg-light">
                    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

                        <!-- Start slider -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <div class="py-5 row d-flex align-items-center">
                                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                                Develop <strong>Strategies</strong> for
                                                <br>your business
                                            </h1>
                                            <p class="banner-body text-muted py-3 mx-0 px-0">
                                                Work Bucket is a website for looking a business opportunities.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End slider -->

                    </div>
                </div>
                <!-- End Banner Hero -->
                <!-- Start Service -->
                <section class="service-wrapper py-3">
                    <div class="container-fluid pb-3">
                        <div class="row">
                            <h2 class="h2 text-center col-12 py-5 semi-bold-600">Services</h2>
                            <div class="service-header col-2 col-lg-3 text-end light-300">
                                <i class='bx bx-gift h3 mt-1'></i>
                            </div>
                            <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                                <h2 class="h3 pb-4 typo-space-line">Make Success for future</h2>
                            </div>
                        </div>
                        <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
                        There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed.</p>
                    </div>
                    
                </section>
                <div>
                    <section class="container overflow-hidden py-5">
                        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
                            <!-- Start Recent Work -->
                            <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                                <a href="{{url('/pass')}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                    <img class="service card-img" src="template2/img/services-01.jpg" alt="Card image">
                                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                        <div class="service-work-content text-left text-light">
                                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">UI/UX design</span>
                                            <p class="card-text">Make your own creativity</p>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- End Recent Work -->

                            <!-- Start Recent Work -->
                            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                                <a href="{{url('/pass2')}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                    <img class="card-img" src="template2/img/services-02.jpg" alt="Card image">
                                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                        <div class="service-work-content text-left text-light">
                                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Social Media</span>
                                            <p class="card-text">Build your public relation</p>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- End Recent Work -->

                            <!-- Start Recent Work -->
                            <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                                <a href="{{url('/pass3')}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                    <img class="card-img" src="template2/img/services-03.jpg" alt="Card image">
                                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                        <div class="service-work-content text-left text-light">
                                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Marketing</span>
                                            <p class="card-text">For those who love promoting</p>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- End Recent Work -->

                            <!-- Start Recent Work -->
                            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                                <a href="{{url('/pass4')}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                    <img class="card-img" src="template2/img/services-04.jpg" alt="Card image">
                                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                        <div class="service-work-content text-left text-light">
                                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Graphic</span>
                                            <p class="card-text">Create visual content</p>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- End Recent Work -->

                            <!-- Start Recent Work -->
                            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                                <a href="{{url('/pass5')}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                    <img class="card-img" src="template2/img/services-05.jpg" alt="Card image">
                                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                        <div class="service-work-content text-left text-light">
                                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Digital Marketing</span>
                                            <p class="card-text">Like marketing, but digital</p>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- End Recent Work -->

                            <!-- Start Recent Work -->
                            <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                                <a href="{{url('/pass6')}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                    <img class="card-img" src="template2/img/services-06.jpg" alt="Card image">
                                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                        <div class="service-work-content text-left text-light">
                                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Market Research</span>
                                            <p class="card-text">Research a new product or service</p>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- End Recent Work -->

                            <!-- Start Recent Work -->
                            <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                                <a href="{{url('/pass7')}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                    <img class="card-img" src="template2/img/services-07.jpg" alt="Card image">
                                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                        <div class="service-work-content text-left text-light">
                                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Business</span>
                                            <p class="card-text">Engage in buy and selling</p>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- End Recent Work -->

                            <!-- Start Recent Work -->
                            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
                                <a href="{{url('/pass8')}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                    <img class="card-img" src="template2/img/services-08.jpg" alt="Card image">
                                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                        <div class="service-work-content text-left text-light">
                                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Branding</span>
                                            <p class="card-text">Creating a positive perception of a brand</p>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- End Recent Work -->
                        </div>
                    </section>
                    <!-- Start View Work -->
                    <section class="bg-secondary">
                        <div class="container py-5">
                            <div class="row d-flex justify-content-center text-center">
                                <div class="col-lg-2 col-12 text-light align-items-center">
                                    <i class='display-1 bx bxs-box bx-lg'></i>
                                </div>
                                <div class="col-lg-7 col-12 text-light pt-2">
                                    <h3 class="h4 light-300">Great transformations successful</h3>
                                    <p class="light-300">Create your own business now.</p>
                                </div>
                                <div class="col-lg-3 col-12 pt-4">
                                    <a href="{{url('/discussion')}}" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Start from now</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End View Work -->

                    <!-- Start Recent Work -->
                    <section class="py-5 mb-5">
                        <div class="container">
                            <div class="recent-work-header row text-center pb-5">
                                <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Popular Works</h2>
                            </div>
                            <div class="row gy-5 g-lg-5 mb-4">

                                <!-- Start Recent Work -->
                                <div class="col-md-4 mb-3">
                                    <a href="{{url('/pass2')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                        <img class="recent-work-img card-img" src="template2/img/recent-work-01.jpg" alt="Card image">
                                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <h3 class="card-title light-300">Social Media</h3>
                                                <p class="card-text">Build your public relation</p>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Recent Work -->

                                <!-- Start Recent Work -->
                                <div class="col-md-4 mb-3">
                                    <a href="{{url('/pass5')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                        <img class="recent-work-img card-img" src="template2/img/recent-work-02.jpg" alt="Card image">
                                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <h3 class="card-title light-300">Digital Marketing</h3>
                                                <p class="card-text">Like marketing, but digital</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <a href="{{url('/pass')}}" class="recent-work card border-0 shadow-lg overflow-hidden">
                                        <img class="recent-work-img card-img" src="template2/img/recent-work-06.jpg" alt="Card image">
                                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                                <h3 class="card-title light-300">UI/UX Design</h3>
                                                <p class="card-text">Make your own creativity</p>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Recent Work -->

                            </div>
                        </div>
                    </section>
                    <!-- End Recent Work -->
                </div>
            </div>
        </div>
    </main>
    @endsection