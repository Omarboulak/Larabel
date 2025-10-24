@extends('layouts.app')

@section('content')
<header class="header">
    <div class="header__top"></div>
    <div class="header__container">
        <div class="header__logo">
            <button id="menu_movile" class="menu-m">
                <img src="../img/menu.png" alt="icono del menu" class="menu" id="menu">
            </button>

            <a href="../index.html" class="header__logo-letter">
                <p>H</p>
            </a>
            <div class="header__logo__hotel">
                <p><strong>HOTEL</strong></p>
                <p>MIRANDA</p>
            </div>
        </div>

        <div class="header__icons">
            <img src="../img/account.png" alt="icono de una persona">
            <img src="../img/search.png" alt="icono de una lupa">
        </div>
    </div>

    <nav id="nav_open" class="nav_invisible">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
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
        <h1>New details</h1>
        <div class="cover__card">
            <p>Home | <span>Blog</span></p>
        </div>
    </div> <!-- fin cover-->

    <div class="infoContact">
        <div class="infoContact__contact">
            <img src="../img/email.svg" alt="icono de un correo">
            <div>
                <p>Email</p>
                <p>info@webmail.com</p>
                <p>jobs.webmail@mail.com</p>
            </div>
        </div>

        <div class="infoContact__contact">
            <img src="../img/phone.svg" alt="icono de un movil">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
                <p>+876 766 8675 765 6</p>
            </div>
        </div>

        <div class="infoContact__contact">
            <img src="../img/location.svg" alt="icono de un mapa">
            <div>
                <p>Hotel Adress</p>
                <p>19/A, Cirikon City hall Tower New York, NYC</p>
            </div>
        </div>
    </div><!--fin Infocontact-->

    <div class="hotelImg"></div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="form">
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf

            <div class="form__contact">
                <input type="text" name="first_name" placeholder="Your full name" required>
                <img src="{{ asset('img/contact/member.svg') }}" alt="icono de una persona">
            </div>

            <div class="form__contact">
                <input type="text" name="phone" placeholder="Add phone number">
                <img src="{{ asset('img/contact/phone.svg') }}" alt="icono de un movil">
            </div>

            <div class="form__contact">
                <input type="email" name="email" placeholder="Enter email address" required>
                <img src="{{ asset('img/contact/email.svg') }}" alt="icono de un sobre">
            </div>

            <div class="form__contact">
                <input type="text" name="subject" placeholder="Enter subject">
                <img src="{{ asset('img/contact/glober.svg') }}" alt="icono de una hoja para asunto">
            </div>

            <div class="form__contact">
                <textarea name="comment" placeholder="Enter message" class="form__contact--message"></textarea>
                <img class="form__contact--pen" src="{{ asset('img/contact/pen.svg') }}" alt="icono de un boli">
            </div>

            <div class="form__submit">
                <button type="submit">Send</button>
            </div>
        </form>
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
        <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
    </div>

    <div class="footer__social">
        <img src="../img/facebook.svg" alt="icono de facebook">
        <img src="../img/twiter.svg" alt="icono de twiter">
        <img src="../img/behance.svg" alt="icono de behance">
        <img src="../img/linkedin.svg" alt="icono de linkedin">
        <img src="../img/youtube.svg" alt="icono de youtube">
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
            <img src="../img/phone.svg" alt="icono de un movil">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="../img/email.svg" alt="icono de un correo">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="../img/location.svg" alt="icono de un mapa">
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