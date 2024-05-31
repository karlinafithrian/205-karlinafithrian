@extends('layouts.master')

@section('content')

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img1">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            About
                            <span class="watermark">About Us</span>
                        </h1>                       
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
           
            <!-- About Section Start -->
            <div class="rs-about style1 pt-120 pb-120 md-pt-80 md-pb-75">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 pr-15 md-pr-15 md-mb-50">
                            <div class="images-part">
                                <img src="{{asset('klikticket/assets/images/about/style1/about.png')}}" alt="Images">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-45 md-pl-15">
                            <div class="sec-title">
                                <span class="sub-text">About Event</span>
                                <h2 class="title pb-22">
                                    Welcome to Music Of The Spheres World Tour
                                </h2>
                                <div class="heading-border-line left-style"></div>
                                <p style="text-align: justify;" class="desc margin-0 pt-40 pb-25">
                                    Coldplay have announced their hugely-anticipated return to Asia and Australia with a special run of stadium shows in November 2023, as part of their record-breaking Music Of The Spheres World Tour. The announcement marks the band’s first ever show in Jakarta, taking place on 15 November at Gelora Bung Karno Stadium.
                                </p>
                                <!-- <div class="rs-counter about-style">
                                    <div class="row">
                                       <div class="col-lg-6 md-mb-30">
                                           <div class="counter-list">
                                               <div class="counter-icon">
                                                   <img src="{{asset('klikticket/assets/images/counter/icons/1.png')}}" alt="Counter">
                                               </div>
                                               <div class="counter-text plus">
                                                   <div class="rs-count">54</div>
                                                   <h4 class="title">Speakers</h4>
                                               </div>
                                           </div>
                                       </div> 
                                       <div class="col-lg-6">
                                           <div class="counter-list">
                                               <div class="counter-icon">
                                                   <img src="{{asset('klikticket/assets/images/counter/icons/2.png')}}" alt="Counter">
                                               </div>
                                               <div class="counter-text plus">
                                                   <div class="rs-count">70</div>
                                                   <h4 class="title">Workshops</h4>
                                               </div>
                                           </div>
                                       </div> 
                                    </div>
                                </div> -->
                                <div class="btn-part mt-35">
                                    <a class="readon btn-text ticket" href="{{url('/login')}}">
                                        <span>Buy Ticket</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Services Section Start -->
            <div class="rs-services style4 bg14 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-50">
                            <div class="sec-title mb-60">
                                <span class="sub-text">Join The Concert</span>
                                <h2 class="title pb-25">
                                    Our Provided Perks For You<br>
                                    During Concert
                                </h2>
                                <div class="heading-border-line left-style"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="services-item mb-45">
                                        <div class="services-icon">
                                            <img src="{{asset('klikticket/assets/images/event/icons/1.png')}}" alt="Images">
                                        </div>
                                        <div class="services-text">
                                            <h3 class="title"><a href="services-style1.html">Photo Booth</a></h3>
                                            <p class="services-txt">Stage access for photo opportunities from the spot where Coldplay will perform
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-item mb-45">
                                        <div class="services-icon">
                                            <img src="{{asset('klikticket/assets/images/event/icons/2.png')}}" alt="Images">
                                        </div>
                                        <div class="services-text">
                                            <h3 class="title"><a href="services-style1.html">Merchandise</a></h3>
                                            <p class="services-txt">Receive special merchandise
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-item mb-45">
                                        <div class="services-icon">
                                            <img src="{{asset('klikticket/assets/images/event/icons/3.png')}}" alt="Images">
                                        </div>
                                        <div class="services-text">
                                            <h3 class="title"><a href="services-style1.html">T-shirts</a></h3>
                                            <p class="services-txt">Receive exclusive designed ongoing gifts                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-item mb-45">
                                        <div class="services-icon">
                                            <img src="{{asset('klikticket/assets/images/event/icons/4.png')}}" alt="Images">
                                        </div>
                                        <div class="services-text">
                                            <h3 class="title"><a href="services-style1.html">After Party</a></h3>
                                            <p class="services-txt">Entry to the concert venue through a special entrance.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-item mb-45">
                                        <div class="services-icon">
                                            <img src="{{asset('klikticket/assets/images/event/icons/5.png')}}" alt="Images">
                                        </div>
                                        <div class="services-text">
                                            <h3 class="title"><a href="services-style1.html">Vouchers</a></h3>
                                            <p class="services-txt">Receive an attractive voucher</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-item">
                                        <div class="services-icon">
                                            <img src="{{asset('klikticket/assets/images/event/icons/6.png')}}" alt="Images">
                                        </div>
                                        <div class="services-text">
                                            <h3 class="title"><a href="services-style1.html">Karaoke</a></h3>
                                            <p class="services-txt">Access to the outdoor karaoke counter</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-50 md-pl-15">
                            <div class="rs-videos choose-video">
                                <div class="images-video">
                                    <img src="{{asset('klikticket/assets/images/event/about-join.png')}}" alt="images">
                                </div>
                                <div class="animate-border">
                                    <a class="popup-border" href="{{url('https://www.youtube.com/watch?v=FMvA5fyZ338')}}">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            

            <!-- Our Sponsor Section Start -->
            <div id="rs-our-sponsor" class="rs-our-sponsor style1 sponsor-about bg15 pt-120 md-pt-70">
                <div class="container">
                    <div class="sec-title text-center mb-65 md-mb-40">
                        <span class="sub-text small">Sponsored By</span>
                        <h2 class="title pb-28">
                            Partners & Sponsors
                        </h2>
                        <div class="heading-border-line"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6 mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/black/1.png')}}" alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/black/2.png')}}" alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/black/3.png')}}" alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/black/4.png')}}" alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 md-mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/black/5.png')}}" alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 md-mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/black/6.png')}}" alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/black/7.png')}}" alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/black/8.png')}}" alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center mt-63 md-mt-40">
                            <div class="btn-part">
                                <a class="readon btn-text" href="{{'/sponsors'}}">
                                    <span>Become Sponsor</span>
                                    <img src="{{asset('klikticket/assets/images/button.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter section start -->
                <div class="rs-newsletter style1 pt-120 md-pt-80 mb--110">
                    <div class="container">
                        <div class="newsletter-wrap">
                            <div class="row y-middle">
                                <div class="col-lg-6 md-mb-30">
                                    <div class="content-wrap">
                                        <div class="icon-img">
                                            <img src="{{asset('klikticket/assets/images/mail.png')}}" alt="images">
                                        </div>
                                        <h3 class="newsletter-title">
                                            Newsletter Subscribe
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <form class="newsletter-form">
                                        <input type="email" name="email" placeholder="Your email address" required="">
                                        <em class="paper-plane"><input type="submit" value="Subscribe"></em>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter section end -->
            </div>
            <!-- Our Sponsor Section Start -->
    
@endsection