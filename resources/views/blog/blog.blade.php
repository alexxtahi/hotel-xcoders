<!DOCTYPE html>
<html lang="zxx">

<!-- Head Section Begin -->
@include('includes.head')
<!-- Head Section End -->

<body>
    <!-- Header Section Begin -->
    @include('includes.header')
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="{{ asset('template/img/breadcrumb-bg.jpg') }}"">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Notre Blog</h1>
                        <div class="breadcrumb__links">
                            <a href="{{ url('/') }}">Accueil</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="blog__item__large">
                        <div class="blog__item__large__pic">
                            <img src="{{ asset('template/img/blog/blog-large.jpg') }}"" alt="">
                            <div class="tag">Hotel</div>
                        </div>
                        <div class="blog__item__large__text">
                            <p><i class="fa fa-clock-o"></i> 01th March, 2019</p>
                            <h4><a href="#">Classifieds are usually the first place you think of when you are</a></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ asset('template/img/blog/blog-1.jpg') }}"" alt="">
                                    <div class="tag">Event</div>
                                </div>
                                <div class="blog__item__text">
                                    <p><i class="fa fa-clock-o"></i> 02th March, 2019</p>
                                    <h5><a href="#">Guests think these services would be</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ asset('template/img/blog/blog-2.jpg') }}"" alt="">
                                    <div class="tag">Travel</div>
                                </div>
                                <div class="blog__item__text">
                                    <p><i class="fa fa-clock-o"></i> 03th March, 2019</p>
                                    <h5><a href="#">Europe's 2018 hotel strengths belie</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ asset('template/img/blog/blog-3.jpg') }}"" alt="">
                                    <div class="tag">Restaurant</div>
                                </div>
                                <div class="blog__item__text">
                                    <p><i class="fa fa-clock-o"></i> 04th March, 2019</p>
                                    <h5><a href="#">Tribute Portfolio opens The Alida in</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ asset('template/img/blog/blog-4.jpg') }}"" alt="">
                                    <div class="tag">Hotel</div>
                                </div>
                                <div class="blog__item__text">
                                    <p><i class="fa fa-clock-o"></i> 05th March, 2019</p>
                                    <h5><a href="#">Rocco Forte Hotels unveils its second</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ asset('template/img/blog/blog-5.jpg') }}"" alt="">
                                    <div class="tag">Travel</div>
                                </div>
                                <div class="blog__item__text">
                                    <p><i class="fa fa-clock-o"></i> 07th March, 2019</p>
                                    <h5><a href="#">The Ritz-Carlton, St. Louis renovates</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ asset('template/img/blog/blog-4.jpg') }}"" alt="">
                                    <div class="tag">Restaurant</div>
                                </div>
                                <div class="blog__item__text">
                                    <p><i class="fa fa-clock-o"></i> 08th March, 2019</p>
                                    <h5><a href="#">NexPoint Hospitality Trust to acquire</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pagination__number blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">Next <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Section Begin -->
                @include('components.blog-sidebar')
                <!-- Footer Section End -->

            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    @include('includes.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('includes.js')
</body>

</html>
