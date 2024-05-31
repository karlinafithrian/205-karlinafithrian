@extends('layouts.master1')

@section('konten')

   <div class="main-content">
    <!-- Banner Section Start -->
            <div class="rs-banner banner-home-style4">
                <div class="container">
                    <div class="content-wrap">
                        <div class="title-inner">
                            <h2 class="title">15 Nov 2023 | JAKARTA</h2>
                        </div>
                        <h1 class="music wow fadeInDown">COLDPLAY</h1>
                        <h2 class="year wow fadeInLeft"></h2>
                        <div class="event_counter2">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="banner-counter5">
                                        <div class="timecounter-inner">
                                            <div class="coming-soon-part2">
                                                <div class="coming-soon-text">
                                                    <div data-animation-in="slideInLeft"
                                                        data-animation-out="animate-out fadeOut" class="CountDownTimer"
                                                        data-date="11/15/2023 09:00"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
    
            <!-- About Section Start -->
            <div class="rs-about style2 bg17">
                <div class="container">
                    <div class="left-side">
                        <img class="wow fadeInLeft" src="{{asset('klikticket/assets/images/about/style2/1.png')}}" alt="Images">
                    </div>
                    <div class="right-side">
                        <img class="wow fadeInRight" src="{{asset('klikticket/assets/images/about/style2/2.png')}}" alt="Images">
                    </div>
                    <div class="sec-title text-center mb-60">
                        <h2 style="font-family:'Kaotican Alphabet'" class="title title2 title3 text-middle title4 pb-40">
                            WORLD TOUR
                        </h2>
                        <p class="desc-big">The band have just announced a special worldwide cinema presentation<br> of
                            their spectacular Music Of The Spheres World Tour concert,<br> filmed during the sold out, ten
                            night run at Gelora Bung Karno Stadium Jakarta at the end of last year.</p>
                    </div>
                    <div class="rs-videos about-video">
                        <div class="animate-border">
                            <a class="popup-border" href="{{url('https://www.youtube.com/watch?v=SOKNyvwLm88')}}">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->
    
            <!-- Team Section Start -->
            <div class="rs-team style8">
                <div class="container">
                    <div class="sec-title text-center mb-60">
                        <h2 style="font-family:'Kaotican Alphabet'" class="title title2 title3 text-middle title4">
                            Special Performers
                        </h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                        data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="3"
                        data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="2"
                        data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="3"
                        data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1"
                        data-mobile-device-nav="false" data-mobile-device-dots="true">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="#"><img src="{{asset('klikticket/assets/images/team/home4/1.jpg')}}" alt="Team"></a>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3 class="title-name"><a href="#">A Sky Full of Stars</a></h3>
                                    <!-- <div class="team-title">Musician</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="#"><img src="{{asset('klikticket/assets/images/team/home4/2.jpg')}}" alt="Team"></a>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3 class="title-name"><a href="#">Viva la Vida</a></h3>
                                    <!-- <div class="team-title">Singer</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="#"><img src="{{asset('klikticket/assets/images/team/home4/3.jpg')}}" alt="Team"></a>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3 class="title-name"><a href="#">Yellow</a></h3>
                                    <!-- <div class="team-title">Singer</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="#"><img src="{{asset('klikticket/assets/images/team/home4/4.jpg')}}" alt="Team"></a>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3 class="title-name"><a href="#">Fix You</a></h3>
                                    <!-- <div class="team-title">Music Director</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="#"><img src="{{asset('klikticket/assets/images/team/home4/5.jpg')}}" alt="Team"></a>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3 class="title-name"><a href="#">The Scientist</a></h3>
                                    <!-- <div class="team-title">Priyanka Chopra</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="#"><img src="{{asset('klikticket/assets/images/team/home4/6.jpg')}}" alt="Team"></a>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3 class="title-name"><a href="#">Hymn For The Weekend</a></h3>
                                    <!-- <div class="team-title">Singer</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="#"><img src="{{asset('klikticket/assets/images/team/home4/7.jpg')}}" alt="Team"></a>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3 class="title-name"><a href="#">Something Just Like This</a></h3>
                                    <!-- <div class="team-title">Music</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="#"><img src="{{asset('klikticket/assets/images/team/home4/8.jpg')}}" alt="Team"></a>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3 class="title-name"><a href="#">Clocks</a></h3>
                                    <!-- <div class="team-title">Singer</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-line">
                    <div class="line-animate left-side">
                        <img class="wow fadeInLeft" src="{{asset('klikticket/assets/images/team/home4/line/1.png')}}" alt="Images">
                    </div>
                    <div class="line-animate right-side">
                        <img class="wow fadeInRight" src="{{asset('klikticket/assets/images/team/home4/line/2.png')}}" alt="Images">
                    </div>
                </div>
            </div>
    
            <!-- Counter Start Here -->
            <!-- <div class="rs-counter about-style home-style2 blue-bg2 pt-120 pb-120 md-pt-80 md-pb-80">
                    <div class="container">
                        <div class="row">
                           <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                               <div class="counter-list">
                                   <div class="counter-icon">
                                       <img src="assets/images/counter/icons/1.png" alt="Counter">
                                   </div>
                                   <div class="counter-text plus">
                                       <div class="rs-count">30</div>
                                       <h4 class="title">Event Artists</h4>
                                   </div>
                               </div>
                           </div> 
                           <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                               <div class="counter-list">
                                   <div class="counter-icon">
                                       <img src="assets/images/counter/icons/2.png" alt="Counter">
                                   </div>
                                   <div class="counter-text plus">
                                       <div class="rs-count">24</div>
                                       <h4 class="title">Hours of Music</h4>
                                   </div>
                               </div>
                           </div> 
                           <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                               <div class="counter-list">
                                   <div class="counter-icon">
                                       <img src="assets/images/counter/icons/3.png" alt="Counter">
                                   </div>
                                   <div class="counter-text plus">
                                       <div class="rs-count">5</div>
                                       <h4 class="title">Event Stages</h4>
                                   </div>
                               </div>
                           </div> 
                           <div class="col-lg-3 col-md-6 col-sm-6">
                               <div class="counter-list">
                                   <div class="counter-icon">
                                       <img src="assets/images/counter/icons/4.png" alt="Counter">
                                   </div>
                                   <div class="counter-text plus">
                                       <div class="rs-count">12</div>
                                       <h4 class="title">Music Bands</h4>
                                   </div>
                               </div>
                           </div> 
                        </div>
                    </div>
                </div> -->
            <!-- Counter End Here -->
    
            <!-- Our Event Schedule Start -->
            <div id="rs-events-schedule"
                class="rs-events-schedule rs-events-schedule4 blue-bg3 pt-150 pb-120 md-pt-110 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center mb-60">
                        <h2 style="font-family:'Kaotican Alphabet'" class="title title2 title3 text-middle title4">
                            Event Schedule
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="events-schedule-tabs">
                                <!-- Nav tabs -->
                                <!-- <ul class="nav eventday-list">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#sunday">Day 1 <span>2022-03-13</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#monday">Day 2 <span>2022-03-14</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tuesday">Day 3 <span>2022-03-14</span></a>
                                        </li>
                                    </ul> -->
                                <div class="events-schedule-contents tab-content schedule-one">
                                    <div class="tab-pane events-shedule-des active show" id="sunday">
                                        <div class="events-shedule-subitmes">
                                            <table class="schedule-3">
                                                <tbody>
                                                    <tr>
                                                        <th>TIME</th>
                                                        <th>DESCRIPTION</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">12:00</td>
                                                        <td>
                                                            Main gate opens
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">13:30</td>
                                                        <td>
                                                            Queue starts for soundcheck session for special ticket holders
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">14:30</td>
                                                        <td>
                                                            Gate opens for soundcheck session
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">15:30</td>
                                                        <td>
                                                            Soundcheck session begins
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">16:00</td>
                                                        <td>
                                                            Gate opens for general ticket holders
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">18:30</td>
                                                        <td>
                                                            Concert starts
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane events-shedule-des" id="monday">
                                        <div class="events-shedule-subitmes">
                                            <table class="schedule-3">
                                                <tbody>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>Bands</th>
                                                        <th>Artists</th>
                                                        <th>Stages</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">10:00-12:00</td>
                                                        <td>
                                                            Best Of Armin
                                                        </td>
                                                        <td class="speak-image-td">
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/1.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Salman Khan</span>
                                                                </div>
                                                            </div>
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/2.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Natalie Portman</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="td__room_color">Stage 1</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">12:00-1:00</td>
                                                        <td>
                                                            Relaxing Classical
                                                        </td>
                                                        <td class="speak-image-td">
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/3.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Akshay Kumar</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="td__room_color">Stage 2</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">1:00-2:00</td>
                                                        <td>
                                                            Band Festival
                                                        </td>
                                                        <td class="speak-image-td">
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/4.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Aamir Khan</span>
                                                                </div>
                                                            </div>
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/5.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Ranbir Kapoor</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="td__room_color">Stage 5</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane events-shedule-des" id="tuesday">
                                        <div class="events-shedule-subitmes">
                                            <table class="schedule-3">
                                                <tbody>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>Bands</th>
                                                        <th>Artists</th>
                                                        <th>Stages</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">10:00-12:00</td>
                                                        <td>
                                                            Solo Performance
                                                        </td>
                                                        <td class="speak-image-td">
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/1.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Salman Khan</span>
                                                                </div>
                                                            </div>
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/2.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Natalie Portman</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="td__room_color">Stage 3</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">12:00-1:00</td>
                                                        <td>
                                                            Relaxing Classical
                                                        </td>
                                                        <td class="speak-image-td">
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/3.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Akshay Kumar</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="td__room_color">Stage 4</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td__time_color">1:00-3:00</td>
                                                        <td>
                                                            Alternative Hits
                                                        </td>
                                                        <td class="speak-image-td">
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/4.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Aamir Khan</span>
                                                                </div>
                                                            </div>
                                                            <div class="speak-image">
                                                                <div class="tooltip"><a href="#"><img
                                                                            src="{{asset('klikticket/assets/images/tab/home4/5.jpg')}}"
                                                                            alt="Images"></a>
                                                                    <span class="tooltiptext">Ranbir Kapoor</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="td__room_color">Stage 1</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-line">
                    <div class="line-animate right-side">
                        <img class="wow fadeInRight" src="{{asset('klikticket/assets/images/team/home4/line/3.png')}}" alt="Images">
                    </div>
                </div>
            </div>
            <!-- Our Event Schedule End -->
    
            <!-- Our Sponsor Section Start -->
            <div id="rs-our-sponsor"
                class="rs-our-sponsor style1 home4-sponsor-style bg18 pt-150 pb-120 md-pt-110 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center mb-60">
                        <h2 style="font-family:'Kaotican Alphabet'" class="title title2 title3 text-middle title4">
                            Event Sponsorship
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6 mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/1.png')}}"
                                                alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/2.png')}}"
                                                alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/3.png')}}"
                                                alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/4.png')}}"
                                                alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 md-mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/5.png')}}"
                                                alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 md-mb-20">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/6.png')}}"
                                                alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/7.png')}}"
                                                alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="logo-item">
                                <div class="grid-figure">
                                    <div class="logo-img">
                                        <a href="#"><img src="{{asset('klikticket/assets/images/event/sponsor/8.png')}}"
                                                alt="logo-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Sponsor Section Start -->
    
            <!-- Pricing Section Start -->
            <div class="rs-pricing main-home pricing-plan-style3 pt-150 blue-bg2 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-4 pl-32 md-pl-15">
                            <div class="pricing-img">
                                <img src="{{asset('klikticket/assets/images/pricing/vocal-artists.png')}}" alt="Images">
                            </div>
                        </div>
                        <div class="col-lg-8 pl-70 md-pl-15 price-responsive">
                            <div class="sec-title mb-60">
                                <h2 style="font-family:'Kaotican Alphabet'" class="title title2 title3 title4">
                                    Tickets Available
                                </h2>
                            </div>
                            <ul class="price-list-item">
                                <li class="price-list mb-30">
                                    <div class="price-grid-item">
                                        <div class="top-shape"></div>
                                        <div class="price-list-text">
                                            <div class="price-list-header">
                                                <span class="price-list-title">Ultimate Experience</span>
                                            </div>
                                            <span class="event-date"></span>
                                        </div>
                                        <div class="price-list-price">
                                            <span>IDR 11.000.000</span>
                                        </div>
                                        <div class="btn-part">
                                            <a class="readon btn-text buy-now" href="{{asset('/pricing_plan1')}}">
                                                <span>Book Now</span>
                                            </a>
                                        </div>
                                        <div class="bottom-shape"></div>
                                    </div>
                                </li>
                                <li class="price-list mb-30">
                                    <div class="price-grid-item">
                                        <div class="top-shape"></div>
                                        <div class="price-list-text">
                                            <div class="price-list-header">
                                                <span class="price-list-title">My Universe</span>
                                            </div>
                                            <span class="event-date"></span>
                                        </div>
                                        <div class="price-list-price">
                                            <span>IDR 5.700.000</span>
                                        </div>
                                        <div class="btn-part">
                                            <a class="readon btn-text buy-now" href="{{asset('/pricing_plan1')}}">
                                                <span>Book Now</span>
                                            </a>
                                        </div>
                                        <div class="bottom-shape"></div>
                                    </div>
                                </li>
                                <li class="price-list">
                                    <div class="price-grid-item">
                                        <div class="top-shape"></div>
                                        <div class="price-list-text">
                                            <div class="price-list-header">
                                                <span class="price-list-title">Cat 1</span>
                                            </div>
                                            <span class="event-date"></span>
                                        </div>
                                        <div class="price-list-price">
                                            <span>IDR 5.000.000</span>
                                        </div>
                                        <div class="btn-part">
                                            <a class="readon btn-text buy-now" href="{{asset('/pricing_plan1')}}">
                                                <span>Book Now</span>
                                            </a>
                                        </div>
                                        <div class="bottom-shape"></div>
                                    </div>
                                </li>
                                <br>
                                
                            </ul>
                            <div class="btn-part">
                                <a class="readon btn-text buy-now" href="{{asset('/pricing_plan1')}}">
                                    <span>More Tickets</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing Section End -->
    
        </div>
        <!-- Main content End -->
@endsection


