<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header header-transparent">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row-table">
                    <div class="col-cell header-logo">
                        <div class="logo-area">
                            <a href="{{asset('/index1')}}">
                                <img class="normal-logo" src="{{asset('klikticket/assets/images/logo-light.png')}}" alt="logo">
                                <img class="sticky-logo" src="{{asset('klikticket/assets/images/logo-dark.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu hidden-md">
                                    <ul class="nav-menu">
                                        <li class="menu-item-has-children current-menu-item">
                                            <a href="{{url('/index1')}}">Home</a>

                                        </li>
                                        <li>
                                            <a href="{{url('/about1')}}">about</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Event</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{asset('/event1')}}">Coldplay</a></li>

                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="last-item menu-item-has-children">
                                                    <a href="{{asset('/schedule1')}}">Schedule</a>
                                                </li>
                                                <li><a href="{{asset('/gallery1')}}">Gallery</a></li>
                                                <li><a href="{{asset('/pricing_plan1')}}">Pricing Plan</a></li>
                                                <li><a href="{{asset('/faqs1')}}">Faqs</a></li>
                                                <li><a href="{{asset('/sponsors1')}}">Sponsors</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="{{asset('/contact1')}}">Contact</a>
                                        </li>
                                    </ul>
                                    <!-- //.nav-menu -->
                                </nav>
                            </div>
                            <!-- //.main-menu -->
                        </div>
                    </div>

                    <div class="col-cell">
                        <div class="expand-btn-inner">
                            <ul>
                                <li class="humburger">
                                    <a id="nav-expander" class="nav-expander bar" href="#">
                                        <div class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <!-- Menu End -->

        <!-- Canvas Menu start -->
        <nav class="right_menu_togle menu-wrap-off  hidden-md">
            <div class="close-btn">
                <a id="nav-close" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <div class="rs-offcanvas-inner">
                <div class="canvas-logo">
                    <a href="{{asset('/index1')}}"><img src="{{asset('klikticket/assets/images/logo-light.png')}}" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    <p>We're the cheapest marketplace for tickets to live events.Grab your ticket in here and enjoyed your Favorite Singer!</p>
                </div>
                <div class="canvas-contact">
                    <div class="address-area">
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Address</h4>
                                <em>Jl. Soekarno Hatta No.643, <br>
                                    Sukapura, Kec. Kiaracondong, <br>
                                    Kota Bandung, Jawa Barat 40285</em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Email</h4>
                                <em><a href="mailto:support@klikticket.org">support@klikticket.com</a></em>
                            </div>
                         </div>
                        <div class="address-list">
                            <div class="info-icon">
                              <i class="flaticon-call"></i>
                            </div>
                            <div class="info-content">
                              <h4 class="title">Phone</h4>
                              <em>+6209087450988</em>
                            </div>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Canvas Menu end -->

        <!-- Canvas Mobile Menu start -->
        {{-- <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
            <div class="close-btn">
                <a id="nav-close2" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <ul class="nav-menu">
                <li class="menu-item-has-children current-menu-item">
                    <a href="{{asset('/index1')}}">Home</a>
                </li>
                <li>
                    <a href="{{asset('/about1')}}">About</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Event</a>
                    <ul class="sub-menu">
                        <li><a href="{{asset('klikticket/speaker1.html')}}">Coldplay</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="last-item menu-item-has-children">
                            <a href="{{asset('/schedule-light1')}}">Schedule</a>
                        </li>
                        <li><a href="{{asset('/gallery1')}}">Gallery</a></li>
                        <li><a href="{{asset('/pricing-plan1')}}">Pricing Plan</a></li>
                        <li><a href="{{asset('/faqs1')}}">Faqs</a></li>
                        <li><a href="{{asset('/sponsors1')}}">Sponsors</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{asset('/contact1')}}">Contact</a>
                </li>
            </ul>
            <!-- //.nav-menu -->
            <div class="canvas-contact">
                <div class="address-area">
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Address</h4>
                            <em>Jl. Soekarno Hatta No.643, <br>
                                Sukapura, Kec. Kiaracondong, <br>
                                Kota Bandung, Jawa Barat 40285</em>
                        </div>
                    </div>
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Email</h4>
                            <em><a href="mailto:support@reactheme.com">support@klikticket.com</a></em>
                        </div>
                    </div>
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Phone</h4>
                            <em>+6209087450988</em>
                        </div>
                    </div>
                </div>
            </div>
        </nav> --}}
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
