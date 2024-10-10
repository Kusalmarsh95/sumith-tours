@extends('pages.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="about-main-content" style="background-image: url({{ asset('/images/aboutusbg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="blur-bg" style="background-image: url({{ asset('/images/aboutusbg.jpg') }});"></div>
                        <h2>Discover More About Our Country</h2>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <div class="more-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-image">
                        <img src="{{ asset('/images/Sri-Lanka-Tourist.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Details of October Tour</h2>
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="info-item">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6>7th October</h6>
                                        <span>Arriving at 5 am</span>
                                        <span>Visit the negambo fish market</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="info-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>50+</h4>
                                        <span>Amazing Places</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4>10,000+</h4>
                                        <span>Different Check-ins Yearly</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
{{--                    <div class="main-button">--}}
{{--                        <a href="reservation.html">Discover More</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

