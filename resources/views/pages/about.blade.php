@extends('pages.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="about-main-content" style="background-image: url('{{ asset('images/aboutusbg.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="blur-bg" style="background-image: url('{{ asset('images/aboutusbg.jpg') }}');"></div>
                        <h2>Welcome To Sumith Tours</h2>
                        <div class="line-dec"></div>
{{--                        <h4>Welcome To Sumith Tours</h4>--}}
                        <p>At Sumith tours, we're passionate about creating unforgettable travel experiences.
                            With a team of dedicated experts and a love for exploration, we offer personalized
                            tours and adventures that cater to every interest and budget. Our mission is to
                            inspire and guide you on your next journey, making every moment memorable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

{{--    <div class="weekly-offers">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 offset-lg-3">--}}
{{--                    <div class="section-heading text-center">--}}
{{--                        <h2>Best Weekly Offers In Each City</h2>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="owl-weekly-offers owl-carousel">--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="assets/images/offers-01.jpg" alt="">--}}
{{--                                <div class="text">--}}
{{--                                    <h4>Havana<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>--}}
{{--                                    <h6>$420<br><span>/person</span></h6>--}}
{{--                                    <div class="line-dec"></div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Deal Includes:</li>--}}
{{--                                        <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>--}}
{{--                                        <li><i class="fa fa-plane"></i> Airplane Bill Included</li>--}}
{{--                                        <li><i class="fa fa-building"></i> Daily Places Visit</li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="main-button">--}}
{{--                                        <a href="reservation.html">Make a Reservation</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="assets/images/offers-02.jpg" alt="">--}}
{{--                                <div class="text">--}}
{{--                                    <h4>Kingston<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>--}}
{{--                                    <h6>$420<br><span>/person</span></h6>--}}
{{--                                    <div class="line-dec"></div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Deal Includes:</li>--}}
{{--                                        <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>--}}
{{--                                        <li><i class="fa fa-plane"></i> Airplane Bill Included</li>--}}
{{--                                        <li><i class="fa fa-building"></i> Daily Places Visit</li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="main-button">--}}
{{--                                        <a href="reservation.html">Make a Reservation</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="assets/images/offers-03.jpg" alt="">--}}
{{--                                <div class="text">--}}
{{--                                    <h4>George Town<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>--}}
{{--                                    <h6>$420<br><span>/person</span></h6>--}}
{{--                                    <div class="line-dec"></div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Deal Includes:</li>--}}
{{--                                        <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>--}}
{{--                                        <li><i class="fa fa-plane"></i> Airplane Bill Included</li>--}}
{{--                                        <li><i class="fa fa-building"></i> Daily Places Visit</li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="main-button">--}}
{{--                                        <a href="reservation.html">Make a Reservation</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="assets/images/offers-01.jpg" alt="">--}}
{{--                                <div class="text">--}}
{{--                                    <h4>Havana<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>--}}
{{--                                    <h6>$420<br><span>/person</span></h6>--}}
{{--                                    <div class="line-dec"></div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Deal Includes:</li>--}}
{{--                                        <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>--}}
{{--                                        <li><i class="fa fa-plane"></i> Airplane Bill Included</li>--}}
{{--                                        <li><i class="fa fa-building"></i> Daily Places Visit</li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="main-button">--}}
{{--                                        <a href="reservation.html">Make a Reservation</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="assets/images/offers-02.jpg" alt="">--}}
{{--                                <div class="text">--}}
{{--                                    <h4>Kingston<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>--}}
{{--                                    <h6>$420<br><span>/person</span></h6>--}}
{{--                                    <div class="line-dec"></div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Deal Includes:</li>--}}
{{--                                        <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>--}}
{{--                                        <li><i class="fa fa-plane"></i> Airplane Bill Included</li>--}}
{{--                                        <li><i class="fa fa-building"></i> Daily Places Visit</li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="main-button">--}}
{{--                                        <a href="reservation.html">Make a Reservation</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="assets/images/offers-03.jpg" alt="">--}}
{{--                                <div class="text">--}}
{{--                                    <h4>George Town<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>--}}
{{--                                    <h6>$420<br><span>/person</span></h6>--}}
{{--                                    <div class="line-dec"></div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Deal Includes:</li>--}}
{{--                                        <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>--}}
{{--                                        <li><i class="fa fa-plane"></i> Airplane Bill Included</li>--}}
{{--                                        <li><i class="fa fa-building"></i> Daily Places Visit</li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="main-button">--}}
{{--                                        <a href="reservation.html">Make a Reservation</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="more-about">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 align-self-center">--}}
{{--                    <div class="left-image">--}}
{{--                        <img src="assets/images/about-left-image.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>Discover More About Our Country</h2>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="info-item">--}}
{{--                                <h4>150.640 +</h4>--}}
{{--                                <span>Total Guests Yearly</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="info-item">--}}
{{--                                <h4>175.000+</h4>--}}
{{--                                <span>Amazing Accomoditations</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <h4>12.560+</h4>--}}
{{--                                        <span>Amazing Places</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <h4>240.580+</h4>--}}
{{--                                        <span>Different Check-ins Yearly</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
{{--                    <div class="main-button">--}}
{{--                        <a href="reservation.html">Discover More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

