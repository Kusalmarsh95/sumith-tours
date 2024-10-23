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
                    <p>Tour itinerary

                        7th of October Arriving at 5.Am

                        Visit the negambo fish market
                        Walking around the negambo town
                        Drive to Wilpattu for afternoon safari
                        Overnight stay in Sigiriya


                        8th
                        Sigiriya rock fortress
                        Village tour with traditional lunch
                        Elephant safari at minneriye national park ( To see Wild Elephant )
                        Climb pidurangala rock to see sunset.
                        Traditional Ayurveda spa
                        Overnight stay in sigiriya

                        09th
                        Drive to Kandy
                        Dambulla cave temple visit( one of most beautiful temple in Asia)
                        Spice Garden
                        Kandy city tour
                        Traditional dancing show
                        Over stay in kandy

                        10th
                        Drive to  kithulgal for water rafting and cannyoning
                        Devon waterfall and ST  clair waterfall
                        Overnight stay in nuwaraeliya

                        11th
                        Tea plantation and factory visit
                        Gregory park
                        Horse riding
                        Horton's plains national park walking track 9km.one of the most beautiful landscape ,plants,animals ,view point ,waterfall ,grass land
                        Overnight stay in nuwareliya

                        12th
                        No ride

                        13th
                        Train ride to ella
                        Cookery Class
                        Overnight stay in ella

                        14th
                        Climb Ella rock
                        Nine arch bridage
                        Climb little adam's peak
                        Zipline
                        Ravana pool club
                        Overnight stay in ella

                        15th
                        Upper Diyaluma waterfall
                        Underground cave with blue water pond. ( Nil Diya Pokuna)
                        Ravana waterfall


                        16th
                        Drive ro Mirissa
                        Secret waterfall


                        End of tour
                    </p>
{{--                    <div class="main-button">--}}
{{--                        <a href="reservation.html">Discover More</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

