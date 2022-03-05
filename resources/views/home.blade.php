<!DOCTYPE html>
<html lang="zxx">

<!-- Head Section Begin -->
@include('includes.head')
<!-- Head Section End -->

<body>
    <!-- Header Section Begin -->
    @include('includes.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="{{ asset('template/img/hero.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <h5>Bienvenue chez les X</h5>
                        <h2>Expérimentez le meilleur pour vos vacances.</h2>
                    </div>
                    {{-- Formulaire de réservation --}}
                    @include('components.reservation-form')
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h5>A propos de nous</h5>
                            <h2>Welcome Hiroto Hotel In Street L’Abreuvoir</h2>
                        </div>
                        <p class="first-para">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p class="last-para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque.</p>
                        <img src="{{ asset('template/img/home-about/sign.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home__about__pic">
                        <img src="{{ asset('template/img/home-about/home-about.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('template/img/services/services-1.png') }}" alt="">
                        <h4>Free Wi-Fi</h4>
                        <p>The massive investment in a hotel or resort requires constant reviews and control in order to
                            make it a successful investment.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('template/img/services/services-2.png') }}" alt="">
                        <h4>Premium Pool</h4>
                        <p>Choose from 4 unique ready made concepts, let us help you create the concept perfect for you
                            or let HCA.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('template/img/services/services-3.png') }}" alt="">
                        <h4>Coffee Maker</h4>
                        <p>HCA's Owner's Representation is taking care of just these important factors, may it be
                            through regular site visits and spot checks.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('template/img/services/services-4.png') }}" alt="">
                        <h4>Bar Wine</h4>
                        <p>For properties with third party management companies, HCA Consultants will as well administer
                            the terms and conditions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('template/img/services/services-5.png') }}" alt="">
                        <h4>TV HD</h4>
                        <p>We provide a critical analysis of a hotel's marketing strategy, bench-marking it against
                            industry and competitive practices.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('template/img/services/services-6.png') }}" alt="">
                        <h4>Restaurant</h4>
                        <p>A hotel and restaurant investment deserves careful and market oriented financial planning and
                            projections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="home-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Nos appartements</h5>
                        <h2>Explorez Notre Hotêl</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="{{ asset('template/img/home-room/hr-1.jpg') }}">
                        <div class="home__room__title">
                            <h4>Deluxe Room</h4>
                            <h2><sup>$</sup>55<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="{{ asset('template/img/home-room/hr-2.jpg') }}">
                        <div class="home__room__title">
                            <h4>Deluxe Room</h4>
                            <h2><sup>$</sup>85<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="{{ asset('template/img/home-room/hr-3.jpg') }}">
                        <div class="home__room__title">
                            <h4>Deluxe Room</h4>
                            <h2><sup>$</sup>94<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="{{ asset('template/img/home-room/hr-4.jpg') }}">
                        <div class="home__room__title">
                            <h4>Deluxe Room</h4>
                            <h2><sup>$</sup>71<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="home__explore">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3>Vous préparez votre prochain trip ? Economisez plus de 25% sur votre hotêl</h3>
                    </div>
                    <div class="col-lg-3 col-md-4 text-center">
                        <a href="#" class="primary-btn">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial__pic">
                        <img src="{{ asset('template/img/testimonial-left.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__text">
                        <div class="section-title">
                            <h5>Témoignanges</h5>
                            <h2>Ce que les clients disent à propos de nous...</h2>
                        </div>
                        <div class="testimonial__slider__content">
                            <div class="testimonial__slider owl-carousel">
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Ridchard Houston</h5>
                                                    <span>Director Colorlib</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>John Smith</h5>
                                                    <span>Director Colorlib</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Jack Kelly</h5>
                                                    <span>Director Colorlib</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Richard Hobson</h5>
                                                    <span>Director Colorlib</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-num" id="snh-1"></div>
                            <div class="slider__progress"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Chooseus Section Begin -->
    <div class="chooseus spad set-bg" data-setbg="{{ asset('template/img/chooseus-bg.jpg') }}">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h5>Pourquoi nous choisr ?</h5>
                            <h2>Contactez nous maintenant pour avoir le meilleur deal sur la prochaine réservation</h2>
                        </div>
                        <a href="#" class="primary-btn">Réserver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chooseus Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery spad">
        <div class="gallery__text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="section-title">
                            <h5>Notre gallerie</h5>
                            <h2>Explorez un endroit hors du commun</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="gallery__title">
                            <p>Découvrez ici quelques clichés de notre petit paradis du repos.</p>
                            <a href="#" class="primary-btn">Voir la gallerie <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery__slider owl-carousel">
            <div class="gallery__item small__item set-bg" data-setbg="{{ asset('template/img/gallery/gallery-1.jpg') }}"></div>
            <div class="gallery__item set-bg" data-setbg="{{ asset('template/img/gallery/gallery-2.jpg') }}"></div>
            <div class="gallery__item set-bg" data-setbg="{{ asset('template/img/gallery/gallery-3.jpg') }}"></div>
            <div class="gallery__item set-bg" data-setbg="{{ asset('template/img/gallery/gallery-4.jpg') }}"></div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Actualités & événements</h5>
                        <h2>En ce moment sur notre Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                    <div class="latest__blog__pic set-bg" data-setbg="{{ asset('template/img/latest-blog/lb-1.jpg') }}"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                    <div class="latest__blog__text">
                        <div class="label">Hotel</div>
                        <h5>Ut enim ad minim veniam, quis nostrud</h5>
                        <p><i class="fa fa-clock-o"></i> 19th March, 2019</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                    <div class="latest__blog__pic set-bg" data-setbg="{{ asset('template/img/latest-blog/lb-2.jpg') }}"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                    <div class="latest__blog__text">
                        <div class="label">Restaurant</div>
                        <h5>Ut enim ad minim veniam, quis nostrud</h5>
                        <p><i class="fa fa-clock-o"></i> 22th March, 2019</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                    <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                        data-setbg="{{ asset('template/img/latest-blog/lb-3.jpg') }}"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                    <div class="latest__blog__text">
                        <div class="label">Travel</div>
                        <h5>Ut enim ad minim veniam, quis nostrud</h5>
                        <p><i class="fa fa-clock-o"></i> 25th March, 2019</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                    <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                        data-setbg="{{ asset('template/img/latest-blog/lb-4.jpg') }}"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                    <div class="latest__blog__text">
                        <div class="label">Booking</div>
                        <h5>Ut enim ad minim veniam, quis nostrud</h5>
                        <p><i class="fa fa-clock-o"></i> 29th March, 2019</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    @include("includes.footer")
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('includes.js')
</body>

</html>
