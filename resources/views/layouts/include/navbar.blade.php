<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header header-transparent">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row-table">
                    <div class="col-cell header-logo">
                        <div class="logo-area">
                            <a href="index4.html">
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
                                            <a href="{{url('/index')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/about')}}">About</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Event</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{asset('/event')}}">Coldplay</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="last-item menu-item-has-children">
                                                    <a href="{{asset('/schedule')}}">Schedule</a>
                                                </li>
                                                <li><a href="{{asset('/gallery')}}">Gallery</a></li>
                                                <li><a href="{{asset('/pricing_plan')}}">Pricing Plan</a></li>
                                                <li><a href="{{asset('/faqs')}}">Faqs</a></li>
                                                <li><a href="{{asset('/sponsors')}}">Sponsors</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{asset('/contact')}}">Contact</a>
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
                                <li class="btn-quote">
                                    <a href="{{asset('login')}}" class="quote-button">Login</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    {{-- MOBILE SLIDEBAR --}}
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
                    {{-- MOBILE SLIDEBAR --}}
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Mobile Menu start -->
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>