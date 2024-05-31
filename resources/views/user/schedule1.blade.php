@extends('layouts.master1')

@section('konten')

 <!-- Breadcrumbs Start -->
 <div class="rs-breadcrumbs img3">
    <div class="container">
      <div class="breadcrumbs-inner">
        <h1 class="page-title">
          Schedule
          <span class="watermark">Schedule</span>
        </h1>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->

  <!-- Our Event Schedule Start -->
  <div id="rs-events-schedule" class="rs-events-schedule rs-events-schedule3 pt-120 md-pt-65">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="events-schedule-tabs">
            <!-- Nav tabs -->
            <ul class="nav eventday-list">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#sunday">Day 1 <span>2023-11-15</span></a>
              </li>
            </ul>
            <div class="events-schedule-contents tab-content schedule-one">
              <div class="tab-pane events-shedule-des active show" id="sunday">
                <div class="events-items">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="event-author">
                        <div class="speak-date">
                          <i class="flaticon-clock-1"></i>
                          <div class="date">11:00-13:00</div>
                          <div class="hall-room">Open Gate</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="event-shedule-info">
                        <div class="rs-topic-content">
                          <h3 class="event-title">Check Ticket by Event Organizer</h3>
                          <p>Check SoundSystem and Greet the audience .</p>
                        </div>
                        <div class="all-seack">
                          <div class="speak-image">
                            <div class="tooltip">
                              <a href="#"><img src="{{asset('klikticket/assets/images/tab/a.png')}}" alt="Images" /></a>
                              <span class="tooltiptext">Pk Entertainment</span>
                            </div>
                          </div>
                          <div class="speak-image">
                            <div class="tooltip">
                              <a href="#"><img src="{{asset('klikticket/assets/images/tab/b.png')}}" alt="Images" /></a>
                              <span class="tooltiptext">Third Eye Entertainment</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="events-items highlight">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="event-author">
                        <div class="speak-date">
                          <i class="flaticon-clock-1"></i>
                          <div class="date">14:00-14:30</div>
                          <div class="hall-room">Opening from Event Organizer</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="event-shedule-info">
                        <div class="rs-topic-content">
                          <h3 class="event-title">Opening from Event Organizer</h3>
                          <p>Greetings All Audience.</p>
                        </div>
                        <div class="all-seack">
                          <div class="speak-image">
                            <div class="tooltip">
                              <a href="#"><img src="{{asset('klikticket/assets/images/tab/3.jpg')}}" alt="Images" /></a>
                              <span class="tooltiptext">Bianca CEO PK</span>
                            </div>
                          </div>
                          <div class="speak-image">
                            <div class="tooltip">
                              <a href="#"><img src="{{asset('klikticket/assets/images/tab/4.jpg')}}" alt="Images" /></a>
                              <span class="tooltiptext">Nicole CEO TEM</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="events-items">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="event-author">
                        <div class="speak-date">
                          <i class="flaticon-clock-1"></i>
                          <div class="date">14:30-17:00</div>
                          <div class="hall-room">Performance Guest Star</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="event-shedule-info">
                        <div class="rs-topic-content">
                          <h3 class="event-title">Performance Guest Star</h3>
                          <p>Perfomance by Isyana Sarasvati ,Tulus,Sheila on 7 etc</p>
                        </div>
                        <div class="all-seack">
                          <div class="speak-image">
                            <div class="tooltip">
                              <a href="#"><img src="{{asset('klikticket/assets/images/tab/5.jpg')}}" alt="Images" /></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="events-items highlight">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="event-author">
                        <div class="speak-date">
                          <i class="flaticon-clock-1"></i>
                          <div class="date">18.30</div>
                          <div class="hall-room">Concert Starts</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="event-shedule-info">
                        <div class="rs-topic-content">
                          <h3 class="event-title">Concerts Starts</h3>
                          <p>All Coldplay members enter the stage.</p>
                        </div>
                        <div class="all-seack">
                          <div class="speak-image">
                            <div class="tooltip">
                              <a href="#"><img src="{{asset('klikticket/assets/images/tab/c.jpeg')}}" alt="Images" /></a>
                              <span class="tooltiptext">Chris Martin</span>
                            </div>
                          </div>
                          <div class="speak-image">
                            <div class="tooltip">
                              <a href="#"><img src="{{asset('klikticket/assets/images/tab/d.jpeg')}}" alt="Images" /></a>
                              <span class="tooltiptext">All Personil</span>
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
                  <img src="{{asset('klikticket/assets/images/mail.png')}}" alt="images" />
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
  <!-- Our Event Schedule End -->
    
@endsection