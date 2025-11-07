@extends('layouts.app')

@section('content')

<header class="header">
    <p class="header__sub">Enjoy Exclusive Hotel Offers</p>

    <div class="header__container">
        <div class="header__logo">
            <button id="menu_movile" class="menu-m">
                <img src="{{ asset('img/menu.png') }}" alt="icono del menu" class="menu" id="menu">
            </button>

            <a href="{{ route('home') }}" class="header__logo-letter">
                <p>H</p>
            </a>
            <div class="header__logo__hotel">
                <p><strong>HOTEL</strong></p>
                <p>MIRANDA</p>
            </div>
        </div>

        <nav class="header__container__menu-pc">
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('rooms.index') }}">Rooms</a></li>
                <li><a href="{{ route('offers') }}">Offers</a></li>
                <li><a href="{{ route('contact.create') }}">Contact</a></li>
            </ul>
        </nav>

        <div class="header__icons">
            <img src="{{ asset('img/account.png') }}" alt="icono de una persona">
            <img src="{{ asset('img/search.png') }}" alt="icono de una lupa">
        </div>
    </div>

    <nav id="nav_open" class="nav_invisible">
        <ul>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('rooms.index') }}">Rooms</a></li>
            <li><a href="{{ route('offers') }}">Offers</a></li>
            <li><a href="{{ route('contact.create') }}">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="cover">
        <p>THE ULTIMATE LUXURY</p>
        <h1>Our Offers</h1>
        <div class="cover__card">
            <p><a href="{{ route('home') }}">Home</a> | <span>Offers</span></p>
        </div>
    </div>

    <section class="allOffers">
        @for ($i = 0; $i < 4; $i++)
            <div class="offers">
                <div class="offers__img">
                    <div class="offers__img--cost">
                        <p>$500<span>/Night</span></p>
                        <p>$345<span>/Night</span></p>
                    </div>
                </div>

                <div class="offers__container">
                    <div class="offers__caracteristics">
                        <p>DOUBLE BED</p>
                        <h3>Luxury Double Bed</h3>
                        <p class="offers__caracteristics--lorem">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>

                    <div class="offers__include">
                        <ul>
                            <li><img src="{{ asset('img/offers/air.svg') }}" alt=""> Air conditioner</li>
                            <li><img src="{{ asset('img/offers/breakfast.svg') }}" alt=""> Breakfast</li>
                            <li><img src="{{ asset('img/offers/clean.svg') }}" alt=""> Cleaning</li>
                            <li><img src="{{ asset('img/offers/grocery.svg') }}" alt=""> Grocery</li>
                            <li><img src="{{ asset('img/offers/shop.svg') }}" alt=""> Shop near</li>
                        </ul>

                        <ul>
                            <li><img src="{{ asset('img/offers/wifi.svg') }}" alt=""> High speed wifi</li>
                            <li><img src="{{ asset('img/offers/kitchen.svg') }}" alt=""> Kitchen</li>
                            <li><img src="{{ asset('img/offers/shower.svg') }}" alt=""> Shower</li>
                            <li><img src="{{ asset('img/offers/bed.svg') }}" alt=""> Single bed</li>
                            <li><img src="{{ asset('img/offers/towel.svg') }}" alt=""> Towels</li>
                        </ul>
                    </div>
                    <button>BOOK NOW</button>
                </div>
            </div>
        @endfor

        <div class="popular">
            <div class="popular__title">
                <p>POPULAR LIST</p>
                <p>Popular Rooms</p>
            </div>

            <div class="swiper">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="swiper-slide popular__room">
                            <div class="popular__room--img">
                                <img src="{{ asset('img/room' . ($i+1) . '.jpg') }}" alt="room image">

                                <div class="popular__room--information">
                                    <img src="{{ asset('img/bed.svg') }}" alt="">
                                    <img src="{{ asset('img/wifi.svg') }}" alt="">
                                    <img src="{{ asset('img/car.svg') }}" alt="">
                                    <img src="{{ asset('img/snow.svg') }}" alt="">
                                    <img src="{{ asset('img/gym.svg') }}" alt="">
                                    <img src="{{ asset('img/smoking.svg') }}" alt="">
                                    <img src="{{ asset('img/drink.svg') }}" alt="">
                                </div>
                            </div>
                            <h4>Minimal Duplex Room</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="popular__room--price">$345/Night <span>Booking Now</span></p>
                        </div>
                    @endfor
                </div>

                <div class="swiper-button-prev popular__prev"></div>
                <div class="swiper-button-next popular__next"></div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="footer__logo">
        <p class="footer__logo-letter">H</p>
        <div class="footer__logo-name">
            <p>HOTEL</p>
            <span>MIRANDA</span>
        </div>
    </div>
    <div class="footer__text">
        <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
    </div>

    <div class="footer__social">
        <img src="{{ asset('img/facebook.svg') }}" alt="facebook icon">
        <img src="{{ asset('img/twiter.svg') }}" alt="twitter icon">
        <img src="{{ asset('img/behance.svg') }}" alt="behance icon">
        <img src="{{ asset('img/linkedin.svg') }}" alt="linkedin icon">
        <img src="{{ asset('img/youtube.svg') }}" alt="youtube icon">
    </div>

    <div class="footer__services">
        <h5>Services.</h5>
        <div class="footer__services--list">
            <ul>
                <li>+ Resturent & Bar</li>
                <li>+ Swimming Pool</li>
                <li>+ Wellness & Spa</li>
                <li>+ Conference Room</li>
                <li>+ Cocktail Party House</li>
            </ul>
            <ul>
                <li>+ Gaming Zone</li>
                <li>+ Marriage Party</li>
                <li>+ Party Planning</li>
                <li>+ Tour Consultancy</li>
            </ul>
        </div>
    </div>

    <div class="footer__contact">
        <h5>Contact Us.</h5>
        <div class="footer__contact--info">
            <img src="{{ asset('img/phone.svg') }}" alt="phone icon">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="{{ asset('img/email.svg') }}" alt="email icon">
            <div>
                <p>Email </p>
                <p>info@hotelmiranda.com</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="{{ asset('img/location.svg') }}" alt="location icon">
            <div>
                <p>Location</p>
                <p>123 Beach Avenue, Miami</p>
            </div>
        </div>
    </div>

    <div class="footer__copy">
        <p>Copyright By@Example - 2020</p>
        <p>Terms of use | Privacy Environmental Policy</p>
    </div>
</footer>

<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
@endsection
