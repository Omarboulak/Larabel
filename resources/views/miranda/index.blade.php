@extends('layouts.app')

@section('content')
<header class="header">
    <div class="header__container">
        <div class="header__logo">
            <button id="menu_movile">
                <img src="img/menu.png" alt="icono del menu" class="menu" id="menu">
            </button>
            <a href="index.html" class="header__logo-letter">
                <p>H</p>
            </a>
            <div class="header__logo__hotel">
                <p><strong>HOTEL</strong></p>
                <p>MIRANDA</p>
            </div>
        </div>

        <div class="header__icons">
            <img src="img/account.png" alt="icono de una persona">
            <img src="img/search.png" alt="icono de una lupa">
        </div>
    </div>

    <nav id="nav_open" class="nav_invisible">
        <ul>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('rooms.index') }}">Rooms</a></li>
            <li><a href="{{ route('offers') }}">Offers</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
    </nav>
</header>

<main>
    <div class="cover">
        <p>THE ULTIMATE LUXYRY EXPERIENCE</p>
        <h1>The Perfect Base For You</h1>
        <button>TAKE A TOUR</button>
        <button class="cover__more">LEARN MORE</button>
    </div> <!-- fin cover-->

    <div class="date">
        <form action="put">
            <label for="Arribal">Arribal Date</label>
            <input type="date">

            <label for="LeDeparture">LeDeparture Date</label>
            <input type="date">

            <button type="submit">CHECK AVALIABILITY</button>
        </form>
    </div>

    <div class="discover">
        <h6>About Us</h6>
        <h2>Discover Our Underground.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat.</p>
        <button>BOOK NOW</button>

        <div class="discover__team">
            <div class="discover__team__img"></div>

            <img src="img/index/team.svg" alt="icono de personas">
            <p class="discover__team__strong">Strong Team</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

        </div>

        <div class="discover__luxury">
            <div class="discover__luxury__img">
                <img src="img/rooms/luxury-room.jpg" alt="habitacion de lujo" class="room-img">
            </div>
            <div class="discover__luxury__content">
                <img src="img/index/luxury.svg" alt="icono de un calendario">
                <p class="discover__luxury__strong">Luxury Room</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>

        </div>
    </div>

    <div class="pickedRooms">
        <h6>ROOMS</h6>
        <h2>Hand Picked Rooms</h2>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="room">
                        <div class="room__img">
                            <img src="img/rooms/double-bed.jpg" alt="" class="room-img">

                            <div class="room__information">
                                <img src="img/bed.svg" alt="icono de una cama">
                                <img src="img/wifi.svg" alt="icono de wifi">
                                <img src="img/car.svg" alt="icono de coche">
                                <img src="img/snow.svg" alt="icono de un copo de nieve">
                                <img src="img/gym.svg" alt="icono de una pesa">
                                <img src="img/smoking.svg" alt="icono de un cigarro tachado">
                                <img src="img/drink.svg" alt="icono de una bebida">
                            </div>
                        </div>
                        <h4>Minimal Duplex Room</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <p class="room__price">$345/Night <span>Booking Now</span></p>
                    </div><!-- fin room-->
                </div>

                <div class="swiper-slide">
                    <div class="room">
                        <div class="room__img">
                            <img src="img/rooms/room.jpg" alt="" class="room-img">

                            <div class="room__information">
                                <img src="img/bed.svg" alt="icono de una cama">
                                <img src="img/wifi.svg" alt="icono de wifi">
                                <img src="img/car.svg" alt="icono de coche">
                                <img src="img/snow.svg" alt="icono de un copo de nieve">
                                <img src="img/gym.svg" alt="icono de una pesa">
                                <img src="img/smoking.svg" alt="icono de un cigarro tachado">
                                <img src="img/drink.svg" alt="icono de una bebida">
                            </div>
                        </div>
                        <h4>Minimal Duplex Room</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <p class="room__price">$345/Night <span>Booking Now</span></p>
                    </div><!-- fin room-->
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>

    <div class="luxuryPlace">
        <h6>INTRO VIDEO</h6>
        <h2>Meet With Our Luxury Place.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat you have to understand this.</p>

        <div class="luxuryPlace__img">
            <img src="img/rooms/luxury-room.jpg" alt="" class="room-img">
        </div>
        <button>Book Now</button>
    </div>

    <div class="features">
        <div class="features__title">
            <p>FACILITIES</p>
            <p>Core Features</p>
        </div>
        <div class="swiper">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="features__cont">
                        <img src="img/about/rating.svg" alt="">
                        <p>Have High Rating</p>
                        <p class="features__cont__lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed
                            do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        <p>01</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="features__cont">
                        <img src="img/index/hours.svg" alt="">
                        <p>Quiet Hours</p>
                        <p class="features__cont__lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed
                            do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        <p>02</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="features__cont">
                        <img src="img/index/location.svg" alt="">
                        <p>Best Locations</p>
                        <p class="features__cont__lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        <p>03</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="features__cont">
                        <img src="img/index/cancellation.svg" alt="">
                        <p>Free Cancellation</p>
                        <p class="features__cont__lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        <p>04</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="features__cont">
                        <img src="img/index/payments.svg" alt="">
                        <p>Payment Options</p>
                        <p class="features__cont__lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        <p>05</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="features__cont">
                        <img src="img/index/offers.svg" alt="">
                        <p>Special Offers</p>
                        <p class="features__cont__lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        <p>06</p>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="foods">
        <div class="foods__donut">
            <img src="img/index/donut.svg" alt="imagen de un donut">
        </div>

        <h6>Menu</h6>
        <h2>Our Foods Menu</h2>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <div class="foods__menu">
                        <div class="foods__menu__img">
                            <img src="img/eggs.jpg" alt="" class="room-img">
                        </div>
                        <div class="foods__menu__description">
                            <p>Eggs & Bacon</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="foods__menu">
                        <div class="foods__menu__img">
                            <img src="img/tea.jpg" alt="" class="room-img">
                        </div>
                        <div class="foods__menu__description">
                            <p>Tea or Coffee</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="foods__menu">
                        <div class="foods__menu__img">
                            <img src="img/oatmeal.jpg" alt="" class="room-img">
                        </div>
                        <div class="foods__menu__description">
                            <p>Chia Oatmeal</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="foods__menu">
                        <div class="foods__menu__img"></div>
                        <div class="foods__menu__description">
                            <p>Eggs & Bacon</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="foods__menu">
                        <div class="foods__menu__img"></div>
                        <div class="foods__menu__description">
                            <p>Tea or Coffee</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="foods__menu">
                        <div class="foods__menu__img"></div>
                        <div class="foods__menu__description">
                            <p>Chia Oatmeal</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="foods__menu">
                        <div class="foods__menu__img"></div>
                        <div class="foods__menu__description">
                            <p>Eggs & Bacon</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="foods__menu">
                        <div class="foods__menu__img"></div>
                        <div class="foods__menu__description">
                            <p>Tea or Coffee</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="foods__menu">
                        <div class="foods__menu__img"></div>
                        <div class="foods__menu__description">
                            <p>Chia Oatmeal</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="foods__images">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="foods__images__img">
                            <img src="img/pizza.jpg" alt="" class="room-img">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="foods__images__img">
                            <img src="img/pasta.jpg" alt="" class="room-img">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="foods__images__img">
                            <img src="img/tarta.jpg" alt="" class="room-img">
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="caracteristics">
        <div class="caracteristics__contain">
            <img src="img/index/cohete.svg" alt="icono de un cohete">
            <p>84K<span>+</span></p>
            <P>Projects are Completed</P>
        </div>

        <div class="caracteristics__contain">
            <img src="img/index/backers.svg" alt="icono de tres personas">
            <p>10M<span>+</span></p>
            <P>Active Backers Around World</P>
        </div>

        <div class="caracteristics__contain">
            <img src="img/index/served.svg" alt="icono de una persona con un grafico">
            <p>02K<span>+</span></p>
            <P>Categories Served</P>
        </div>

        <div class="caracteristics__contain">
            <img src="img/index/idea.svg" alt="icono de un libro abierto">
            <p>100M<span>+</span></p>
            <P>Projects are Completed</P>
        </div>


        <div class="caracteristics__contain">
            <img src="img/index/cohete.svg" alt="icono de un cohete">
            <p>84K<span>+</span></p>
            <P>Projects are Completed</P>
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
        <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut
            labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
        </p>
    </div>

    <div class="footer__social">
        <img src="img/facebook.svg" alt="icono de facebook">
        <img src="img/twiter.svg" alt="icono de twiter">
        <img src="img/behance.svg" alt="icono de behance">
        <img src="img/linkedin.svg" alt="icono de linkedin">
        <img src="img/youtube.svg" alt="icono de youtube">
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
            <img src="img/phone.svg" alt="icono de un movil">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="img/email.svg" alt="icono de un correo">
            <div>
                <p>Phone Number </p>
                <p>+987 876 765 76 577</p>
            </div>
        </div>
        <div class="footer__contact--info">
            <img src="img/location.svg" alt="icono de un mapa">
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