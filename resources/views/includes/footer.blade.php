<footer class="footer set-bg" data-setbg="{{ asset('template/img/footer-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo__carousel owl-carousel">
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{ asset('template/img/logo/logo-1.png') }}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{ asset('template/img/logo/logo-2.png') }}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{ asset('template/img/logo/logo-3.png') }}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{ asset('template/img/logo/logo-4.png') }}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{ asset('template/img/logo/logo-5.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer__content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{ asset('template/img/logo.png') }}" alt=""></a>
                        </div>
                        <h4>(+225) 456-78-91096</h4>
                        <ul>
                            <li>Ernser Vista Suite 437, NY</li>
                            <li>Info.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                    <div class="footer__widget">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Réservation</a></li>
                            <li><a href="#">A propos</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Services</a></li>
                            <li><a href="{{ route('rooms') }}">Nos chambres</a></li>
                            <li><a href="#">Restaurants</a></li>
                            <li><a href="#">Tarifs</a></li>
                            <li><a href="#">Localisation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <div class="footer__newslatter">
                        <h4>Abonnez vous à notre newsletter</h4>
                        <form action="#">
                            <input type="text" placeholder="Votre adresse mail">
                            <button type="submit">S'abonner</button>
                        </form>
                        <div class="footer__newslatter__find">
                            <h5>Retrouvez nous sur:</h5>
                            <div class="footer__newslatter__find__links">
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-map-o"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-forumbee"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
