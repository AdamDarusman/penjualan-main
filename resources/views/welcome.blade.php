<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/favicon.jpg" type="image/png">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="style.css">

    <title>Photos and Typography</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">WISATA</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#discover" class="nav__link">Typography</a>
                    </li>
                    <li class="nav__item">
                        <a href="#place" class="nav__link">Photos</a>
                    </li>
                </ul>

                <div class="nav__dark">
                    <!-- Theme change button -->
                    <span class="change-theme-name">Dark mode</span>
                    <i class="ri-moon-line change-theme" id="theme-button"></i>
                </div>

                <i class="ri-close-line nav__close" id="nav-close"></i>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <img src="assets/img/home9.jpg" alt="" class="home__img">

            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__data-subtitle">Holiday with fun with Wisata</span>
                    <h1 class="home__data-title">Let's go on <br> <b> Vacation </b> to your <br> <b> Dream Tour</b></h1>
                    <a href="{{ route('login') }}" class="button">Login</a>
                    <a href="{{ route('register') }}" class="button">Registrasi</a>
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/adam.darusman.7/" target="_blank" class="home__social-link">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/adm_drsmn/" target="_blank" class="home__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </div>

                <div class="home__info">
                    <div>
                        <span class="home__info-title">6 of the best tours</span>
                        <a href="#place" class="button button--flex button--link home__info-button">
                            Visit <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="home__info-overlay">
                        <img src="assets/img/home11.jpg" alt="" class="home__info-img">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">Why do you have to <br>Wisata?</h2>
                    <p class="about__description">because we provide some of the best tours with the best service and
                        facilities and of course the prices will adjust to what you want, we also make you take a
                        vacation without having to bother bringing your own things and finding your own place.
                    </p>
                    <a href="#discover" class="button">See More</a>
                </div>

                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="assets/img/about1.jpg" alt="" class="about__img-one">
                    </div>

                    <div class="about__img-overlay">
                        <img src="assets/img/about2.jpg" alt="" class="about__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== DISCOVER ====================-->
        <section class="discover section" id="discover">

            <h2 class="section__title">this is a recommendation of<br>the best tourist attractions.</h2>

            <div class="discover__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== DISCOVER 1 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/about1.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Curuk</h2>
                            <span class="discover__description">Afternoon</span>
                        </div>
                    </div>

                    <!--==================== DISCOVER 2 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/about2.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Pantai</h2>
                            <span class="discover__description">Morning</span>
                        </div>
                    </div>

                    <!--==================== DISCOVER 3 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/place3.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Mountain</h2>
                            <span class="discover__description">Morning</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== EXPERIENCE ====================-->
        <section class="experience section">
            <h2 class="section__title">We Have Many Places To Visit<br> and Have Used Wisata</h2>

            <div class="experience__container container grid">
                <div class="experience__content grid">
                    <div class="experience__data">
                        <h2 class="experience__number">476</h2>
                        <span class="experience__description">Mountain <br> Tours</span>
                    </div>

                    <div class="experience__data">
                        <h2 class="experience__number">646</h2>
                        <span class="experience__description">Beach <br> Tours</span>
                    </div>

                    <div class="experience__data">
                        <h2 class="experience__number">5747</h2>
                        <span class="experience__description">People Who Already <br> Use the Wisata</span>
                    </div>
                </div>

                <div class="experience__img grid">
                    <div class="experience__overlay">
                        <img src="assets/img/home11.jpg" alt="" class="experience__img-one">
                    </div>

                    <div class="experience__overlay">
                        <img src="assets/img/about2.jpg" alt="" class="experience__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VIDEO ====================-->
        <section class="video section">
            <h2 class="section__title">Video About Wisata</h2>

            <div class="video__container container">
                <p class="video__description">You will be interested if you see this video.
                </p>

                <div class="video__content">
                    <video id="video-file">
                        <source src="assets/video/vidio.mp4" type="video/mp4">
                    </video>

                    <button class="button button--flex video__button" id="video-button">
                        <i class="ri-play-line video__button-icon" id="video-icon"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--==================== PLACES ====================-->
        <section class="place section" id="place">
            <h2 class="section__title">some pes you can visit <br> with your family</h2>

            {{-- <div class="place__container container grid"> --}}
            <!--==================== PLACES CARD 1 ====================-->
            {{-- @forelse ($paketWisata as $paket)
                    <div class="place__card">
                        <img src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto1 }}" class="place__img">

                        <div class="place__content">
                            <span class="place__rating">
                                <!--<i class="ri-star-line place__rating-icon"></i>-->
                                <span class="place__rating-number"></span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">{{ $paket->nama_paket }}</h3>
                                <span class="place__subtitle">{{ $paket->deskripsi }}</span>
                                <span class="place__price">{{ $paket->fasilitas }}</span>
                            </div>
                        </div>

                        <!--<button class="button button--flex place__button">
                                <i class="ri-arrow-right-line"></i>
                            </button>-->
                    </div>
                @empty
                    No Data Found
                @endforelse --}}

            <!--==================== PLACES CARD 2 ====================-->
            <div class="flex">
                @forelse ($paketWisata as $paket)
                    <div class="container-card">
                        <div class="img-container-card">
                            <img style="width: 500px; height: 200px; object-fit: cover"
                                src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto1 }}">
                        </div>
                        <div class="content-container-card">
                            <h2>{{ $paket->nama_paket }}</h2>
                            <h1>{{ \Illuminate\Support\Str::limit($paket->deskripsi, 100, '...') }}</h1>
                            <p>{{ $paket->fasilitas }}</p>
                            <a href="{{ route('detail', ['id' => $paket->id]) }}" class="btn-card">Read More</a>
                            <p><br /></p>
                        </div>
                    </div>
                @empty
                    No Data Found
                @endforelse

            </div>

            {{-- <div class="place__card">
                    <img src="assets/img/place2.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <!--<i class="ri-star-line place__rating-icon"></i>-->
                            <span class="place__rating-number"></span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Theory Room</h3>
                            <span class="place__subtitle">School</span>
                            <span class="place__price">Afternoon</span>
                        </div>
                    </div> --}}

            <!--<button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>-->
            {{-- </div> --}}

            <!--==================== PLACES CARD 3 ====================-->
            {{-- <div class="place__card">
                    <img src="assets/img/place3.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <!--<i class="ri-star-line place__rating-icon"></i>-->
                            <span class="place__rating-number"></span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Backyard</h3>
                            <span class="place__subtitle">Home</span>
                            <span class="place__price">Afternoon</span>
                        </div>
                    </div> --}}

            <!--<button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>-->
            {{-- </div> --}}

            <!--==================== PLACES CARD 4 ====================-->
            {{-- <div class="place__card">
                    <img src="assets/img/place4.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <!--<i class="ri-star-line place__rating-icon"></i>-->
                            <span class="place__rating-number"></span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Roof</h3>
                            <span class="place__subtitle">Home</span>
                            <span class="place__price">Afternoon</span>
                        </div>
                    </div> --}}

            <!--<button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>-->
            {{-- </div> --}}

            <!--==================== PLACES CARD 5 ====================-->
            {{-- <div class="place__card">
                    <img src="assets/img/place5.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <!--<i class="ri-star-line place__rating-icon"></i>-->
                            <span class="place__rating-number"></span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">School Garden</h3>
                            <span class="place__subtitle">School</span>
                            <span class="place__price">Afternoon</span>
                        </div>
                    </div> --}}

            <!--<button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>-->
            {{-- </div> --}}

            <!--==================== PLACES CARD 6 ====================-->
            {{-- <div class="place__card">
                    <img src="assets/img/place6.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <!--<i class="ri-star-line place__rating-icon"></i>-->
                            <span class="place__rating-number"></span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Backyard</h3>
                            <span class="place__subtitle">Home</span>
                            <span class="place__price">Night</span>
                        </div>
                    </div> --}}

            <!--<button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>-->
            {{-- </div> --}}
            </div>
        </section>

        <!--==================== SUBSCRIBE ====================-->
        <!--<section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                        <p class="subscribe__description">Subscribe to our newsletter and get a
                            special 30% discount.
                        </p>

                        <form action="" class="subscribe__form">
                            <input type="text" placeholder="Enter email" class="subscribe__input">

                            <button class="button">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </section>-->

        <!--==================== SPONSORS ====================-->
        <!--<section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors1.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors2.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors3.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors4.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors5.png" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>-->
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <!--<div class="footer__data">
                        <h3 class="footer__title">Travel</h3>
                        <p class="footer__description">Travel you choose the <br> destination,
                            we offer you the <br> experience.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Support Center</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>-->

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2022 adamhtml. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>
