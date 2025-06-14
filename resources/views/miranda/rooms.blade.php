@extends('layouts.app')

@section('content')
<header class="header">
    <div class="header__container">
        <div class="header__logo">
            <button id="menu_movile">
                <img src="{{ asset('img/menu.png') }}" alt="icono del menu" class="menu" id="menu">
            </button>
            <p class="header__logo-letter">H</p>
            <div class="header__logo__hotel">
                <p><strong>HOTEL</strong></p>
                <p>MIRANDA</p>
            </div>
        </div>

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
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="cover">
        <p>THE ULTIMATE LUXYRY</p>
        <h1>Ultimate Room</h1>
        <div class="cover__card">
            <p>Home | <span>Rooms</span></p>
        </div>
    </div> <!-- fin cover-->

    <div class="info-rooms">
        <div class="swiper swiper-num">
            <div class="swiper-wrapper">

                @foreach($rooms as $room)
                <div class="swiper-slide">
                    <div class="room">
                        <div class="room__img">
                            <img src="{{ asset('img/rooms/' . $room->photos) }}" alt="Foto de habitacion">

                            <div class="room__information">
                                <img src="{{ asset('img/bed.svg') }}" alt="icono cama">
                                <img src="{{ asset('img/wifi.svg') }}" alt="icono wifi">
                                <img src="{{ asset('img/car.svg') }}" alt="icono coche">
                                <img src="{{ asset('img/snow.svg') }}" alt="icono nieve">
                                <img src="{{ asset('img/gym.svg') }}" alt="icono gym">
                                <img src="{{ asset('img/smoking.svg') }}" alt="icono no fumar">
                                <img src="{{ asset('img/drink.svg') }}" alt="icono bebida">
                            </div>
                        </div>
                        <h4>{{ $room->room_type }}</h4>
                        <p>{{ $room->description }}</p>
                        <p class="room__price">${{ $room->price }}<span>Booking Now</span></p>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev">
                <img src="{{ asset('img/prev.svg')}}" alt="">
            </div>
            <div class="swiper-button-next">
                <img src="{{ asset('img/next.svg')}}" alt="">
            </div>
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
    </div><!--fin footer logo-->
    <div class="footer__text">
        <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
    </div>

    <div class="footer__social">
        <img src="{{ asset('img/facebook.svg')}}" alt="icono de facebook">
        <img src="{{ asset('img/twiter.svg')}}" alt="icono de twiter">
        <img src="{{ asset('img/behance.svg')}}" alt="icono de behance">
        <img src="{{ asset('img/linkedin.svg')}}" alt="icono de linkedin">
        <img src="{{ asset('img/youtube.svg')}}" alt="icono de youtube">
    </div><!--fin social-->

    <div class="footer__services">
        <h5>Services.</h5>
        <div class="footer__services--list">
            <ul>
                <li>+ Resturent & Bar </li>
                <li>+ Swimming Pool </li>
                <li>+ Wellness & Spa </li>
                <li>+ Restaurant </li>
                <li>+ Conference Room </li>
                <li>+ Coctail Party House</li>
            </ul>
            <ul>
                <li>+ Gaming Zone </li>
                <li>+ Marrige Party </li>
                <li>+ Party Planning </li>
                <li>+ Tour Consultancy</li>
            </ul>
        </div>
    </div><!--fin services-->

    <div class="footer__contact">
        <h5>Contact Us.</h5>
        <div class="footer__contact--info">
            <img src="{{ asset('img/phone.svg')}}" alt="icono de un movil">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="{{ asset('img/email.svg')}}" alt="icono de un correo">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="{{ asset('img/location.svg')}}" alt="icono de un mapa">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
            </div>
        </div>
    </div><!--fin contact-->

    <div class="footer__copy">
        <p>Copyright By@Example - 2020</p>
        <p>Terms of use | Privacy Environmental Policy</p>
    </div>
</footer>

@endsection