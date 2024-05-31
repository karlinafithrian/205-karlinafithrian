@extends('layouts.master')

@section('content')

      <!-- Breadcrumbs Start -->
      <div class="rs-breadcrumbs img3">
        <div class="container">
          <div class="breadcrumbs-inner">
            <h1 class="page-title">
              Faq
              <span class="watermark">Faq</span>
            </h1>
          </div>
        </div>
      </div>
      <!-- Breadcrumbs End -->

      <!-- Faq Section Start -->
      <div class="rs-faq gray-bg4 pt-120 md-pt-80">
        <div class="container">
          <div class="row y-middle">
            <div class="col-lg-7 md-mb-50">
              <div class="content-part">
                <div class="faq-content">
                  <div id="accordion" class="accordion">
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">Who is this event for?</a>
                      </div>
                      <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                          For youth People who search the cheapest concert ticket.Thank You for visiting our website . We hope your visit can be useful and provide convenience in accessing and using the services available on our application
                          or website. We continuously strive to improve our services and would appreciate any criticism, suggestion and feedback from You. Please submit your criticism, suggestion or feedback through support@clicktiket.com
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">Who will be Guestar?</a>
                      </div>
                      <div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                        <div class="card-body">Absolutely Coldplay Concert in GBK.Can't wait for this event</div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">How do I book this ticket?</a>
                      </div>
                      <div id="collapseThree" class="collapse" data-bs-parent="#accordion" style="">
                        <div class="card-body">
                          klickticket.com provides and organizes system and integrated online booking facility ("Service"), reservation/booking including but not limited with: EVENT & TO DO ("Product") that allow You to search for
                          information on product You want, as well as booking and purchase, simultaneously conducts online and secure payment system through various facilities..
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">Is there a concert app I can download?</a>
                      </div>
                      <div id="collapseFour" class="collapse" data-bs-parent="#accordion" style="">
                        <div class="card-body">
                          We just provide the best prices to the Products which You can order from this website. Please note that the published price may be subject to certain terms and conditions, therefore You must check and understand
                          these terms and conditions related to such certain price before making a purchase.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false">Payment</a>
                      </div>
                      <div id="collapseFive" class="collapse" data-bs-parent="#accordion" style="">
                        <div class="card-body">
                          For every booking ticket or purchase confirmed, We will send You a Confirmation Letter via email that consists the detail of your reservation or purchase and your payment receipt. You are responsible to print it
                          and keep the information to yourself. The Confirmation Letter is a very important document and You need to have it in order to use or take the product your purchased. Our Providers and We reserve the rights to
                          refuse service to anyone, if You cannot provide any prove that You have a valid reservation that is fully paid of the Product, and You hereby release tiket.com from any kind of losses that occurs due to the
                          unavailability to use such Products..
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false">Cancellation and Modification</a>
                      </div>
                      <div id="collapseSix" class="collapse" data-bs-parent="#accordion" style="">
                        <div class="card-body">
                          For every canceled reservation made, We will provide you a refund subject to the terms and conditions as follows: Refund will be made at the amount and time in accordance with the policy and cancellation conditions
                          imposed by Providers and/or us by time to time. The number of funds returned to You is not greater than the nominal amount You have paid to tiket.com when you completed the purchase transaction for klikticket’s
                          Product , adjusted to the policy imposed by each Providers and/or us. For payments made with credit cards or paylater, the refunds will be done through the credit card or paylater used on transactions of tiket.com
                          product with regard to the conditions as determined by the bank issuing the credit card or the relevant paylater providers..
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 pl-30 md-pl-15">
              <div class="rs-contact home-style1 faq-home-style">
                <div class="contact-widget">
                  <div class="sec-title mb-40">
                    <h2 class="title title2 white-color">Quick Contact</h2>
                  </div>
                  <div id="form-messages"></div>
                  <form id="contact-form" method="post" action="mailer.php">
                    <fieldset>
                      <div class="row">
                        <div class="col-lg-12 mb-20">
                          <input class="from-control" type="text" id="name" name="name" placeholder="Your Name" required="" />
                        </div>
                        <div class="col-lg-12 mb-20">
                          <input class="from-control" type="text" id="email" name="email" placeholder="Your E-Mail" required="" />
                        </div>
                        <div class="col-lg-12 mb-20">
                          <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="" />
                        </div>
                        <div class="col-lg-12 mb-20">
                          <textarea class="from-control" id="message" name="message" placeholder="Message Here" required=""></textarea>
                        </div>
                      </div>
                      <div class="form-group mb-0">
                        <div class="submit-btn">
                          <input class="submit" type="submit" value="Submit Now" />
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Privacy policy Section Start -->
          <div class="rs-privacy-policy pt-120 md-pt-80">
            <div class="privacy-wrap pb-130 md-pb-90">
              <div class="sec-title mb-50">
                <h2 class="title title2">Privacy policy</h2>
              </div>
              <div class="privacy-content">
                <ul class="check-list">
                  <li>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.
                  </li>
                  <li>Readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</li>
                  <li>
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and
                    web page editors It is a long established fact that a reader will be distracted by the Readable content of a page when looking at its layout.
                  </li>
                  <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages</li>
                  <li>
                    Many desktop publishing packages and web page editors. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that
                    it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                  </li>
                </ul>
              </div>
            </div>
            <div class="privacy-wrap pb-130 md-pb-90">
              <div class="sec-title mb-50">
                <h2 class="title title2">Terms & Conditions</h2>
              </div>
              <div class="privacy-content">
                <ul class="check-list">
                  <li>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.
                  </li>
                  <li>Readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</li>
                  <li>
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and
                    web page editors It is a long established fact that a reader will be distracted by the Readable content of a page when looking at its layout.
                  </li>
                  <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages</li>
                </ul>
              </div>
            </div>
            <div class="privacy-wrap">
              <div class="sec-title mb-50">
                <h2 class="title title2">Covid 19 Safety Measures</h2>
              </div>
              <div class="privacy-content measures">
                <ul class="covid-safety-item">
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Social Distancing</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">RT-PCR Lab</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Temperature Checks</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Contactless Service</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Corona Guidelines</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Face Masks Required</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Corona Guidelines</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Hand Hygiene Stations</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Limited Capacity</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Organisers wear masks</span>
                  </li>
                  <li>
                    <span class="list-icon"><i class="fa fa-check"></i></span>
                    <span class="list-text">Sanitisation before the show</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Privacy policy Section Start -->
        </div>
        <!-- Newsletter section start -->
        <div class="rs-newsletter style1 pt-120 md-pt-80 mb--110">
          <div class="container">
            <div class="newsletter-wrap">
              <div class="row y-middle">
                <div class="col-lg-6 md-mb-30">
                  <div class="content-wrap">
                    <div class="icon-img">
                      <img src="assets/images/mail.png" alt="images" />
                    </div>
                    <h3 class="newsletter-title">Newsletter Subscribe</h3>
                  </div>
                </div>
                <div class="col-lg-6">
                  <form class="newsletter-form">
                    <input type="email" name="email" placeholder="Your email address" required="" />
                    <em class="paper-plane"><input type="submit" value="Subscribe" /></em>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Newsletter section end -->
      </div>
      <!-- Faq Section End -->
    
@endsection