<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Meeta - Event & Conference HTML5 Template</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/assets/images/favicon.png')}}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="../../../css?family=Archivo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{url('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/flaticon.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/nice-select.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">



</head>

<body>


<div class="main-wrapper">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <div class="meeta-header-section meeta-header-2 meeta-header-3 meeta-header-5">

        <!-- Header Middle Start -->
        <div class="header-middle header-sticky">
            <div class="container">

                <div class="header-wrap">
                    <!-- Header Logo Start -->
                    <div class="header-logo header-logo-3">
                        <a class="logo-black" href="{{route('welcome')}}"><img src="{{url('/assets/images/logo-3.png')}}" alt="Logo"></a>
                        <a class="logo-white" href="{{route('welcome')}}"><img src="{{url('/assets/images/logo-4.png')}}" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Navigation Start -->
                    <div class="header-navigation d-none d-lg-block">
                        <ul class="main-menu">
                            <li class="active-menu"><a href="{{route('welcome')}}">Home</a>
                            </li>


                            </li>
                            <li><a href="{{route('login')}}">Login</a>

                            </li>
                            <li><a href="{{route('register')}}">Register</a>
                        </ul>
                    </div>
                    <!-- Header Navigation End -->

                    <!-- Header Meta Start -->
                    <div class="header-meta">



                        @if(auth()->check())
                            <!-- User is authenticated (logged in) -->
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <div class="header-btn d-none d-md-block">
                                    <button type="submit" class="btn-2">Logout</button>
                                </div>

                            </form>
                        @else
                            <!-- User is not authenticated (not logged in) -->
                            <div class="header-btn d-none d-md-block">
                            <a href="{{ route('login') }}" class="btn-2">Buy Ticket</a>
                            </div>
                        @endif


                        <!-- Header Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Toggle End -->

                    </div>
                    <!-- Header Meta End -->

                </div>

            </div>
        </div>
        <!-- Header Middle End -->

    </div>
    <!-- Header End -->




    <!-- Offcanvas Start-->
    <div class="offcanvas offcanvas-start" id="offcanvasExample">
        <div class="offcanvas-header">
            <!-- Offcanvas Logo Start -->
            <div class="offcanvas-logo">
                <a href="{{route('welcome')}}"><img src="{{url('/assets/images/logo-4.png')}}" alt=""></a>
            </div>
            <!-- Offcanvas Logo End -->
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
        </div>

        <!-- Offcanvas Body Start -->
        <div class="offcanvas-body">
            <div class="offcanvas-menu offcanvas-menu-2">
                <ul class="main-menu">
                    <li class="active-menu"><a href="{{route('welcome')}}">Home</a>

                    </li>

                    </li>
                    <li><a href="{{route('login')}}">Login</a>

                    </li>
                    <li><a href="{{route('register')}}">Register</a>
                </ul>
            </div>
        </div>
        <!-- Offcanvas Body End -->
    </div>
    <!-- Offcanvas End -->

    <!-- Slider Section Start  -->
    <div class="meeta-hero-section-5 d-flex align-items-center" style="background-image: url('{{ asset('assets/images/hero-5-bg.jpg') }}'); ">
        <img class="image-1" src="{{url('/assets/images/hero-5-img-1.png')}}" alt="">
        <img class="image-2" src="{{url('/assets/images/hero-5-img-2.png')}}" alt="">
        <img class="shape-1" src="{{url('/assets/images/shape/hero-5-shape-1.png')}}" alt="">
        <img class="shape-2" src="{{url('/assets/images/shape/hero-5-shape-2.png')}}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <div class="title-wrap text-center">
                            <h2 class="title" data-aos-delay="700" data-aos="fade-up">Find event</h2>
                            <h3 class="sub-title" data-aos-delay="800" data-aos="fade-up">Awesome event, conference & fest around you</h3>
                        </div>
                        <div class="search-form-wrap" data-aos-delay="900" data-aos="fade-up">
                            <div class="search-form-inner">

                                {{--                                search form--}}
                                <form class="search-form" action="{{ route('events.search') }}" method="GET">
                                    @csrf
                                    <div class="single-form">
                                        <label class="form-label"><i class="fas fa-search"></i> Event Title</label>
                                        <input name="titre" type="text" placeholder="Type Event Name">
                                    </div>
                                    <div class="single-form">
                                        <label class="form-label"><i class="fas fa-list-alt"></i> Category</label>
                                        <select name="category" id="categorySelect" onchange="redirectToCategory(this)">
                                            <option value="0">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="single-form">
                                        <label class="form-label"><i class="fas fa-map"></i> Location</label>
                                        <select name="city" id="citySelect" onchange="redirectToCity(this)">
                                            <option value="0">Select Location</option>
                                            @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->ville }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-btn">
                                        <button  class="search-btn"><i class="flaticon-loupe"></i> </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->


    <!-- Category Section Start -->
    <div class="meeta-category-section section-padding-02 ">
        <div class="container">
            <div class="meeta-category-wrap">
                <!-- Section Title Start -->
                <div class="meeta-section-title section-title-4 text-center">
                    <h2 class="main-title">Browse by <span class="title-shape-1">Category</span></h2>
                </div>
                <!-- Section Title End -->
                <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2" style="margin-bottom: 50px;">
                    @foreach($categories as $key => $category)
                        <div class="col">
                            <!-- Category Item Start -->
                            <div class="category-item cat-{{ $key+1 }}">

                                <a href="{{route('events.category', ['categoryId' => $category->id])}}"><img src="{{url('/assets/images/cat-' . ($key+1) . '.png')}}" alt=""><span>{{ $category->name }}</span></a>
                            </div>
                            <!-- Category Item End -->
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
    <!-- Category Section End -->



    <!-- Featured Section Start -->
    <div class="meeta-featured-section section-padding">
        <div class="shape-1"></div>
        <div class="shape-2" data-aos-delay="700" data-aos="zoom-in"></div>
        <div class="container">
            <div class="meeta-featured-wrap">
                <!-- Section Title Start -->
                <div class="meeta-section-title section-title-4 text-center">
                    <h2 class="main-title"><span class="title-shape-1">Featured </span>Events</h2>
                </div>
                <!-- Section Title End -->
                <div class="meeta-event-featured">
                    <div class="row">
                        @foreach($events as $event)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single Item Start -->
                                <div class="single-item">
                                    <a href="{{ route('event.single', ['id' => $event->id]) }}">
                                        <div class="featured-img">
                                            @foreach ($event->getMedia() as $mediaItem)
                                                <img src="{{ $mediaItem->getUrl() }}" alt="">
                                            @endforeach
                                            <div class="top-meta">
                                                <span class="date"><span>{{ date('d', strtotime($event->date)) }}</span>{{ date('M', strtotime($event->deadline)) }}</span>
                                            </div>
                                        </div>
                                        <div class="featured-content">


                                            <span class="category color-3">{{ $event->category->name }}</span>

                                            <h3 class="title">{{ $event->titre }}</h3>
                                            <span class="meta"><i class="fas fa-map-marker-alt"></i> {{ $event->lieu->ville }}</span>
                                        </div>
                                    </a>
                                </div>
                                <!-- Single Item End -->
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="featured-more text-center">
                    <a class="btn-2" href="#">More Featured Events</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Section End -->



    <!-- Project Start -->
    <div class="meeta-event-project section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="meeta-section-title section-title-4 text-center">
                <h2 class="main-title"><span class="title-shape-1">Upcoming</span> Events</h2>
            </div>
            <!-- Section Title End -->
        </div>
        <!-- Project Wrap Start -->
        <div class="meeta-event-project-wrap event-project-active slider-bullet">
            <div class="swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="project-item">
                            <div class="event-project-thumb" style="background-image:url('{{ asset('assets/images/up-event-1.jpg') }}');">
                            </div>
                            <div class="event-project-content">
                                <h3 class="title">Mindfull App Pi Meets Soundproof Booth 2021 summer</h3>
                                <div class="event-meta">
                                    <span><i class="far fa-clock"></i>  29 July - 30 July</span>
                                    <span><i class="fas fa-map-marker-alt"></i>   Sand diego, Canada</span>
                                </div>
                                <div class="meeta-register-countdown register-countdown-4 register-countdown-5">
                                    <div class="meeta-register-countdown-wrapper">

                                        <!-- Countdown Start -->
                                        <div class="meeta-countdown countdown" data-countdown="2024/10/24" data-format="short">
                                            <div class="single-countdown">
                                                <span class="count countdown__time daysLeft"></span>
                                                <span class="value countdown__time daysText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time hoursLeft"></span>
                                                <span class="value countdown__time hoursText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time minsLeft"></span>
                                                <span class="value countdown__time minsText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time secsLeft"></span>
                                                <span class="value countdown__time secsText"></span>
                                            </div>
                                        </div>
                                        <!-- Countdown End -->
                                    </div>
                                </div>

                                <a class="btn-2" href="#">Book Your Seat</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item">
                            <div class="event-project-thumb" style="background-image: url('{{ asset('assets/images/up-event-2.jpg') }}');">
                            </div>
                            <div class="event-project-content">
                                <h3 class="title">Mindfull App Pi Meets Soundproof Booth 2021 summer</h3>
                                <div class="event-meta">
                                    <span><i class="far fa-clock"></i>  29 July - 30 July</span>
                                    <span><i class="fas fa-map-marker-alt"></i>   Sand diego, Canada</span>
                                </div>
                                <div class="meeta-register-countdown register-countdown-4 register-countdown-5">
                                    <div class="meeta-register-countdown-wrapper">

                                        <!-- Countdown Start -->
                                        <div class="meeta-countdown countdown" data-countdown="2024/10/24" data-format="short">
                                            <div class="single-countdown">
                                                <span class="count countdown__time daysLeft"></span>
                                                <span class="value countdown__time daysText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time hoursLeft"></span>
                                                <span class="value countdown__time hoursText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time minsLeft"></span>
                                                <span class="value countdown__time minsText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time secsLeft"></span>
                                                <span class="value countdown__time secsText"></span>
                                            </div>
                                        </div>
                                        <!-- Countdown End -->
                                    </div>
                                </div>
                                <a class="btn-2" href="price.html">Book Your Seat</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item">
                            <div class="event-project-thumb" style="background-image: url('{{ asset('assets/images/up-event-3.jpg') }}');">
                            </div>
                            <div class="event-project-content">
                                <h3 class="title">Mindfull App Pi Meets Soundproof Booth 2021 summer</h3>
                                <div class="event-meta">
                                    <span><i class="far fa-clock"></i>  29 July - 30 July</span>
                                    <span><i class="fas fa-map-marker-alt"></i>   Sand diego, Canada</span>
                                </div>
                                <div class="meeta-register-countdown register-countdown-4 register-countdown-5">
                                    <div class="meeta-register-countdown-wrapper">

                                        <!-- Countdown Start -->
                                        <div class="meeta-countdown countdown" data-countdown="2024/10/24" data-format="short">
                                            <div class="single-countdown">
                                                <span class="count countdown__time daysLeft"></span>
                                                <span class="value countdown__time daysText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time hoursLeft"></span>
                                                <span class="value countdown__time hoursText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time minsLeft"></span>
                                                <span class="value countdown__time minsText"></span>
                                            </div>
                                            <div class="single-countdown">
                                                <span class="count countdown__time secsLeft"></span>
                                                <span class="value countdown__time secsText"></span>
                                            </div>
                                        </div>
                                        <!-- Countdown End -->
                                    </div>
                                </div>
                                <a class="btn-2" href="price.html">Book Your Seat</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- Project Wrap End -->
    </div>
    <!-- Project End -->





    <!-- Newsletter Section Start -->
    <div class="newsletter-section">
        <div class="container">
            <div class="newsletter-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <!-- Newsletter Text Start -->
                        <div class="newsletter-text">
                            <h3 class="title">Subscribe to our newsletter</h3>
                        </div>
                        <!-- Newsletter Text End -->
                    </div>
                    <div class="col-lg-7">
                        <!-- Newsletter Form Start -->
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Your Email">
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </form>
                        </div>
                        <!-- Newsletter Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Section End -->

    <!-- Footer Start -->
    <div class="meeta-footer-5" style="background-image: url('{{ asset('assets/images/bg/footer-5-bg.jpg') }}');">

        <!-- Footer Widget Start -->
        <div class="footer-widget text-center">
            <div class="container">

                <!-- Footer Logo Start -->
                <div class="footer-logo">
                    <a href="{{route('welcome')}}"><img src="{{url('/assets/images/footer-logo-1.png')}}" alt="Logo"></a>
                </div>
                <!-- Footer Logo End -->

                <div class="footer-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="speaker-single.html">Speaker</a></li>
                        <li><a href="event-single.html">Sponsor</a></li>
                        <li><a href="{{route('login')}}">Login</a>
                        <li><a href="{{route('register')}}">Register</a>
                    </ul>
                </div>

                <!-- Footer widget Social Start -->
                <div class="footer-widget-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <!-- Footer widget Social End -->

                <!-- Footer Copyright Start -->
                <div class="footer-copyright">
                    <p>2024 Evento. All Rights Reserved</p>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
        <!-- Footer Widget End -->

    </div>
    <!-- Footer End -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->




    <!-- JS
    ============================================ -->

    <script>
        function redirectToCategory(selectElement) {
            // Get the selected value
            var selectedValue = selectElement.value;

            // Check if a valid category is selected (not "Select Category")
            if (selectedValue !== '0') {
                // Build the URL using the route and selected category ID
                // Redirect to the URL
                window.location.href = "{{ route('events.category', ['categoryId' => ':categoryId']) }}".replace(':categoryId', selectedValue);
            }
        }
    </script>

    <script>
        function redirectToCity(selectElement) {
            // Get the selected value
            var selectedValue = selectElement.value;

            // Check if a valid city is selected (not "Select Location")
            if (selectedValue !== '0') {
                // Build the URL using the route and selected city ID
                // Redirect to the URL
                window.location.href = "{{ route('events.city', ['cityId' => ':cityId']) }}".replace(':cityId', selectedValue);
            }
        }
    </script>




    <!-- Modernizer & jQuery JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/back-to-top.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</div>
</body>

</html>
