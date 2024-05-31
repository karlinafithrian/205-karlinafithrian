@extends('layouts.master1')

@section('konten')
      <!-- Breadcrumbs Start -->
      <div class="rs-breadcrumbs img4">
        <div class="container">
          <div class="breadcrumbs-inner">
            <h1 class="page-title">
              Pricing Plan
              <span class="watermark">Pricing</span>
            </h1>
          </div>
        </div>
      </div>
      <!-- Breadcrumbs End -->

      <!-- Pricing Section Start -->
      <div class="rs-pricing style2 pricing-plan-style gray-bg2 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
          <div class="sec-title text-center mb-70">
            <span class="sub-text small">Pricing Plans</span>
            <h2 class="title">
              Choose Your
              <span>Ticket</span>
            </h2>
          </div>
          <div class="row">
            
            <div class="col-lg-4 col-md-7">
              <div class="rs-price-table">
                <div class="pricing-table-header">
                  <h3 class="table-title" name="nama">Ultimate Experience</h3>

                </div>
                <div class="rs-pricing-table-price">
                  <div class="pricing-table-price-tag">
                    <span class="table-price-text">IDR 11.000.000</span>
                    <span class="table-period">15 November 2023</span>

                  </div>
                </div>
                <div class="rs-pricing-table-body">
                  <ul class="pricing-table-features-list">
                    <li>
                      <i class="fa fa-check"></i>
                      <span class="feature-text">Welcome Reception</span>
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      <span class="feature-text">Free Light Stick</span>
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      <span class="feature-text">VVIP Seating</span>
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      <span class="feature-text">Custom Badge</span>
                    </li>
                  </ul>
                </div>
                <div class="btn-part">
                  <a class="readon btn-text buy-big small" href="{{('/ticket1')}}">
                    <span>Buy Now</span>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 sm-mb-30">
              <div class="rs-price-table">
                <div class="pricing-table-header">
                  <h3 class="table-title">My Universe</h3>

                </div>
                <div class="rs-pricing-table-price">
                  <div class="pricing-table-price-tag">
                    <span class="table-price-text">IDR 5.700.000</span>
                    <span class="table-period">15 November 2023</span>

                  </div>
                </div>
                <div class="rs-pricing-table-body">
                  <ul class="pricing-table-features-list">
                    <li>
                      <i class="fa fa-check"></i>
                      <span class="feature-text">Welcome Reception</span>
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      <span class="feature-text">Free light Stick</span>
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      <span class="feature-text">Regular Seating</span>
                    </li>
                    <li>
                      <i class="fa fa-close"></i>
                      <span class="feature-text">Custom Badge</span>
                    </li>
                  </ul>
                </div>
                <div class="btn-part">
                  <a class="readon btn-text buy-big small" href="{{('/ticket1')}}">
                    <span>Buy Now</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 md-mb-30">
              <div class="rs-price-table">
                <div class="pricing-table-header">
                  <h3 class="table-title" name="name">Festival</h3>
                </div>
                <div class="rs-pricing-table-price">
                  <div class="pricing-table-price-tag">
                    <span class="table-price-text" name="price">IDR 5.000.000</span>
                    <span class="table-period" name="date">15 November 2023</span>
                  </div>
                </div>
                <div class="rs-pricing-table-body">
                  <ul class="pricing-table-features-list">
                    <li>
                      <i class="fa fa-check"></i>
                      <span class="feature-text">Welcome Reception</span>
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      <span class="feature-text">Free Sticker</span>
                    </li>
                    <li>
                      <i class="fa fa-close"></i>
                      <span class="feature-text">Regular Seating</span>
                    </li>
                    <li>
                      <i class="fa fa-close"></i>
                      <span class="feature-text">Custom Badge</span>
                    </li>
                  </ul>
                </div>
                <div class="btn-part">
                  <a class="readon btn-text buy-big small" href="{{('/ticket1')}}">
                    <span>Buy Now</span>
                  </a>
                </div>
              </div>
            </div>

            
          </div>
        </div>
      <!-- Pricing Section End -->

      <!-- Pricing Section Start -->
        <!-- Newsletter section start -->
        
        <!-- Newsletter section end -->
      </div>
      <!-- Pricing Section End -->


@endsection