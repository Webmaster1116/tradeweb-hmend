<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TradeWEB</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link
            href="https://fonts.googleapis.com/css?family=Quicksand"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}" />
        <link
            rel="stylesheet"
            href="{{
                asset('assets/css/font-awesome/css/font-awesome.min.css')
            }}"
        />
    </head>
    <body>
        <div class="nav-social">
            <div class="container">
                <div class="faicon-group">
                    <span class="fa fa-facebook"></span>
                    <span class="fa fa-instagram"></span>
                    <span class="fa fa-youtube-play"></span>
                </div>
            </div>
        </div>
        <header>
            <div class="header-bar">
                <div class="navbar-header">
                    <a href="/" class="header-logo"
                        ><img src="{{ asset('assets/img/home/logo.svg') }}"
                    /></a>
                </div>
                <div class="navbar-header">
                    <button
                        type="button"
                        class="navbar-toggle"
                        data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-menu">
                    <div
                        class="navbar-collapse collapse in"
                        id="bs-example-navbar-collapse-1"
                        aria-expanded="false"
                    >
                        <ul class="nav navbar-nav nav-info">
                            <li>
                                <a href="/"><span>Home</span></a>
                            </li>
                            <li>
                                <a href="about"><span>About Us</span></a>
                            </li>
                            <li>
                                <a href="service"><span>Service</span></a>
                            </li>
                            <li>
                                <a href="blog"><span>Blogs</span></a>
                            </li>
                            <li>
                                <a href="contact"><span>Contact Us</span></a>
                            </li>
                            <div>
                                <a href="list-business" class="header-list"
                                    >List your Business</a
                                >
                            </div>

                            @if (!Auth::user())
                            <div>
                                <a href="login" class="header-list header-login"
                                    >Sign In</a
                                >
                            </div>
                            @else
                            <div class="user-avatar">
                                <img
                                    src="{{
                                        asset('assets/img/home/user-avatar.svg')
                                    }}"
                                />
                                <a
                                    class="nav-link nav-avatar"
                                    data-toggle="modal"
                                    data-target="#userModal"
                                    >{{Auth::user()->first_name}}
                                    {{Auth::user()->last_name}}&nbsp
                                    <i class="fa fa-angle-down"></i
                                ></a>
                            </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer>
            <div class="container footer-menu">
                <div class="row">
                    <div
                        class="col-lg-4 hidden-md hidden-sm col-xs-12 mar_b-30"
                    >
                        <div class="footer-wrapper">
                            <div class="footer-title">
                                <img
                                    src="{{
                                        asset('assets/img/home/logo.svg')
                                    }}"
                                />
                            </div>
                            <div class="footer-wrapper">
                                <ul class="footer-wrapper-text">
                                    Lorem Ipsum is simply dummy text of the and
                                    typesetting industry. Lorem Ipsum is dummy
                                    text of the printing. Lorem Ipsum is simply
                                    dummy text of the and typesetting industry.
                                    Lorem Ipsum is dummy text of the printing.
                                    Lorem Ipsum is simply dummy text of the and
                                    typesetting industry. Lorem Ipsum is dummy
                                    text of the printing.
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 hidden-md hidden-sm col-xs-12 mar_b-30"
                    >
                        <div
                            class="
                                col-lg-5
                                hidden-md hidden-sm
                                col-xs-12
                                mar_b-30
                            "
                        >
                            <div class="footer-wrapper">
                                <div class="footer-title">
                                    <p>Quick Links</p>
                                </div>
                                <div class="footer-wrapper">
                                    <ul class="footer-resources">
                                        <li><a href="about">> About</a></li>
                                        <li><a href="#">> Carrers</a></li>
                                        <li>
                                            <a href="news">> Meet the team</a>
                                        </li>
                                        <li>
                                            <a href="#">> List your Business</a>
                                        </li>
                                        <li>
                                            <a href="contact">> Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="
                                col-lg-7
                                hidden-md hidden-sm
                                col-xs-12
                                mar_b-30
                            "
                        >
                            <div class="footer-wrapper">
                                <div class="footer-title">
                                    <p>Popular Searches</p>
                                </div>
                                <div class="footer-wrapper">
                                    <ul class="footer-resources">
                                        <li><a href="#">> Article</a></li>
                                        <li><a href="#">> Licensing</a></li>
                                        <li>
                                            <a href="#">> Council Regulation</a>
                                        </li>
                                        <li>
                                            <a href="#">> Trust & Quality</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                >> Browse All Categories</a
                                            >
                                        </li>
                                        <li><a href="#">> Homes</a></li>
                                        <li><a href="#">> Trade</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-lg-4 hidden-md hidden-sm col-xs-12 mar_b-30"
                    >
                        <div class="footer-wrapper">
                            <div class="footer-title">
                                <p>Contact US</p>
                            </div>
                            <div class="footer-wrapper">
                                <div class="footer-social">
                                    <div>
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/map-pin.svg'
                                                )
                                            }}"
                                        />Sydney, Australia
                                    </div>
                                    <div>
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/phone-call.svg'
                                                )
                                            }}"
                                        />Available 24/7
                                    </div>
                                    <div>
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/mail.svg'
                                                )
                                            }}"
                                        />info@overthereserve.com
                                    </div>
                                </div>
                                <div class="footer-social-icons">
                                    <span class="fa fa-facebook"></span>
                                    <span class="fa fa-instagram"></span>
                                    <span class="fa fa-linkedin"></span>
                                    <span class="fa fa-youtube-play"></span>
                                    <span class="fa fa-twitter"></span>
                                    <span class="fa fa-pinterest"></span>
                                </div>
                                <!-- <ul>
                                    Be the first to get the latest news about
                                    market, promotions and much more!
                                </ul>
                                <span class="footer-subscribe">
                                    <img
                                        src="{{
                                            asset(
                                                'assets/img/home/icon-subscribe-mail.svg'
                                            )
                                        }}"
                                    />
                                    <input
                                        class="subscribe-email"
                                        placeholder="Your email address"
                                    />
                                    <a href="#"
                                        ><img
                                            src="{{
                                                asset(
                                                    'assets/img/home/icon-subscribe-send.svg'
                                                )
                                            }}"
                                    /></a>
                                </span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-content">
                <div class="container">
                    <div class="row">
                        <div
                            class="
                                col-lg-5 col-md-5 col-sm-5 col-xs-12
                                mar_b-30
                            "
                        >
                            <div class="copyright text-left">
                                <p>HMEND powered by KPVE Group</p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="copyright-img text-right">
                                <a href="privacy-policy">Privacy Policy |</a>
                                <a href="terms-conditions">
                                    Terms & Conditions</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="userModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="body-content">
                            <a href="profile">Profile</a>
                        </div>
                        <div class="body-content body-logout">
                            <a href="{{ route('signout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
