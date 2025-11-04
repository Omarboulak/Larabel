@extends('layouts.app')

@section('content')
<header class="header">
    <p class="header__sub">We Make Your Feel Comfortable</p>

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
        <p>THE ULTIMATE LUXYRY</p>
        <h1>About Us</h1>
        <div class="cover__card">
            <p>Home | <span>About</span></p>
        </div>
    </div>

    <div class="about">
        <div class="about__video"></div>
        <p>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</p>
    </div>

    <div class="services">
        <div>
            <img src="{{ asset('img/about/breakfast.svg') }}" alt="icono de un cafe con tostada">
            <p>BREAKFAST</p>
        </div>
        <div>
            <img src="{{ asset('img/about/plane.svg') }}" alt="icono de un avion">
            <p>AIRPORT PICKUP</p>
        </div>
        <div>
            <img src="{{ asset('img/about/guide.svg') }}" alt="icono de un mapa">
            <p>CITY GUIDE</p>
        </div>
        <div>
            <img src="{{ asset('img/about/room.svg') }}" alt="icono de una habitacion de lujo">
            <p>LUXURY ROOM</p>
        </div>
    </div>

    <div class="restaurant">
        <div class="restaurant__img"></div>
        <p>RESTAURANT</p>
        <h3>Get Restaurant Facilities & Many Other More</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        <button>TAKE A TOUR</button>
    </div>

    <div class="features">
        <div class="features__title">
            <p>FACILITIES</p>
            <p>Core Features</p>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide features__slide">
                    <div class="features__slide--opacity">
                        <img src="{{ asset('img/about/rating.svg') }}" alt="">
                        <p>Have High Rating</p>
                        <p class="features__slide--lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        <p>01</p>
                    </div>
                </div>

                <div class="swiper-slide features__slide">
                    <div class="features__slide--opacity">
                        <img src="{{ asset('img/about/rating.svg') }}" alt="">
                        <p>Have High Rating</p>
                        <p class="features__slide--lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        <p>02</p>
                    </div>
                </div>

                <div class="swiper-slide features__slide">
                    <div class="features__slide--opacity">
                        <img src="{{ asset('img/about/rating.svg') }}" alt="">
                        <p>Have High Rating</p>
                        <p class="features__slide--lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        <p>03</p>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="facts">
        <p class="facts__counter">COUNTER</p>
        <h2>Some Fun Facts</h2>

        <div class="facts__things">
            <img src="{{ asset('img/about/users.svg') }}" alt="">
            <div class="facts_things--text">
                <p>8000</p>
                <p>Happy users</p>
            </div>
            <img src="{{ asset('img/about/arrow.svg') }}" alt="icono de una flecha">
        </div>
        <div class="facts__things">
            <img src="{{ asset('img/about/reviews.svg') }}" alt="">
            <div class="facts_things--text">
                <p>10M</p>
                <p>Reviews & Appreciate</p>
            </div>
            <img src="{{ asset('img/about/arrow.svg') }}" alt="icono de una flecha">
        </div>
        <div class="facts__things">
            <img src="{{ asset('img/about/world.svg') }}" alt="">
            <div class="facts_things--text">
                <p>100</p>
                <p>Country Coverage</p>
            </div>
            <img src="{{ asset('img/about/arrow.svg') }}" alt="icono de una flecha">
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="facts__img"></div>
                </div>
                <div class="swiper-slide">
                    <div class="facts__img"></div>
                </div>
            </div>

            <div class="swiper-pagination facts__pagination"></div>
        </div>
    </div>
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
        <img src="{{ asset('img/facebook.svg') }}" alt="icono de facebook">
        <img src="{{ asset('img/twiter.svg') }}" alt="icono de twiter">
        <img src="{{ asset('img/behance.svg') }}" alt="icono de behance">
        <img src="{{ asset('img/linkedin.svg') }}" alt="icono de linkedin">
        <img src="{{ asset('img/youtube.svg') }}" alt="icono de youtube">
    </div>

    <div class="footer__services">
        <h5>Services.</h5>
        <div class="footer__services--list">
            <ul>
                <li>+ Resturent & Bar</li>
                <li>+ Swimming Pool</li>
                <li>+ Wellness & Spa</li>
                <li>+ Restaurant</li>
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
            <img src="{{ asset('img/phone.svg') }}" alt="icono de un movil">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="{{ asset('img/email.svg') }}" alt="icono de un correo">
            <div>
                <p>Email </p>
                <p>info@hotelmiranda.com</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="{{ asset('img/location.svg') }}" alt="icono de un mapa">
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
