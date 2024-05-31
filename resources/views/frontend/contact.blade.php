@extends('layouts.master')

@section('content')

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img3">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            Contact
                            <span class="watermark">Contact</span>
                        </h1>                       
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Contact Section Start -->
            <div class="rs-contact home-style1 home-style3 bg16 pt-120 md-pt-80">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-8 pr-130 md-pr-15 md-mb-50">
                            <div class="contact-img">
                                <img src="{{asset('klikticket/assets/images/contact/contact.jpg')}}" alt="Images">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget-item mb-20">
                                <div class="widget-img">
                                    <img src="{{asset('klikticket/assets/images/contact/icons/2-1.png')}}" alt="Images">
                                </div>
                                <div class="address-item">
                                    <div class="address-icon">
                                        <img src="{{asset('klikticket/assets/images/contact/icons/1.png')}}" alt="Images">
                                    </div>
                                    <div class="address-text">
                                        <h3 class="title"> Address</h3>
                                        <p class="services-txt">  
                                            Jl. Soekarno Hatta No.643, <br>
                                            Sukapura, Kec. Kiaracondong, <br>
                                            Kota Bandung, Jawa Barat 40285 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-item mb-20">
                                <div class="widget-img">
                                    <img src="{{asset('klikticket/assets/images/contact/icons/2-2.png')}}" alt="Images">
                                </div>
                                <div class="address-item">
                                    <div class="address-icon">
                                        <img src="{{asset('klikticket/assets/images/contact/icons/2.png')}}" alt="Images">
                                    </div>
                                    <div class="address-text">
                                        <h3 class="title">Email us</h3>
                                        <p class="services-txt">  
                                            support@klikticket.org <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-item">
                                <div class="widget-img">
                                    <img src="{{asset('klikticket/assets/images/contact/icons/2-3.png')}}" alt="Images">
                                </div>
                                <div class="address-item">
                                    <div class="address-icon">
                                        <img src="{{asset('klikticket/assets/images/contact/icons/3.png')}}" alt="Images">
                                    </div>
                                    <div class="address-text">
                                        <h3 class="title">Call us</h3>
                                        <p class="services-txt">  
                                            <a href="tel:(+62)09087450988">(+62) 09087450988</a><br>
                                            <a href="tel:(+62)22299111010">(+62) 22299111010</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Section Start -->
                    <div class="rs-contact pt-120 md-pt-80">
                        <div class="row y-middle">
                            <div class="col-lg-6">
                                <div class="sec-title mb-85 md-mb-50">
                                    <span class="sub-text">Any Question</span>
                                    <h2 style="color:white" class="title pb-26">
                                        Send Message
                                    </h2>
                                    <div class="heading-border-line left-style"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p style="color:white" class="margin-0">For further information, comments and suggestions, please send your message on the form below.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                                <div class="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5667974281437!2d107.64814307486122!3d-6.942262093057841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2d834ee57cb%3A0xf097d99bcccc4293!2sUniversitas%20Informatika%20Dan%20Bisnis%20Indonesia%20(UNIBI)!5e0!3m2!1sid!2sid!4v1685690481871!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-wrap">
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post" action="mailer.php">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                                </div> 
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                                </div>   
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                                </div>   
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                                </div>
                                          
                                                <div class="col-lg-12 mb-30">
                                                    <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="btn-part">                                            
                                                <div class="form-group mb-0">
                                                    <div class="submit-btn">
                                                        <input class="submit" type="submit" value="Submit Now">
                                                    </div>
                                                </div>
                                            </div> 
                                        </fieldset>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Section End -->
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
            <!-- Contact Section End --> 
    
@endsection