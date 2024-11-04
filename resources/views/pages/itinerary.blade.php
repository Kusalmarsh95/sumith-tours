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
                <div class="col-lg-5 align-self-center">
                    <div class="left-image">
                        <img src="{{ asset('/images/Sri-Lanka-Tourist.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h2>Details of October Tour</h2>
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach($itineraries as $itinerary)
                                <div class="info-item">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h6>{{ \Carbon\Carbon::parse($itinerary->date)->format('jS \of F') }}</h6>
                                            <span>{{ $itinerary->description }}</span><br>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>7<sup>th</sup> October</h6>--}}
{{--                                        <span>Visit the Negambo fish market</span><br>--}}
{{--                                        <span>Walking around the negambo town</span><br>--}}
{{--                                        <span>Drive to Wilpattu for afternoon safari</span><br>--}}
{{--                                        <span>Overnight stay in Sigiriya</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>8<sup>th</sup> October</h6>--}}
{{--                                        <span>Sigiriya rock fortress</span><br>--}}
{{--                                        <span>Village tour with traditional lunch</span><br>--}}
{{--                                        <span>Elephant safari at minneriye national park (To see Wild Elephant)</span><br>--}}
{{--                                        <span>Climb pidurangala rock to see sunset</span><br>--}}
{{--                                        <span>Traditional Ayurveda spa</span><br>--}}
{{--                                        <span>Overnight stay in sigiriya</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>9<sup>th</sup> October</h6>--}}
{{--                                        <span>Drive to Kandy</span><br>--}}
{{--                                        <span>Dambulla cave temple visit(one of most beautiful temple in Asia)</span><br>--}}
{{--                                        <span>Spice Garden</span><br>--}}
{{--                                        <span>Kandy city tour</span><br>--}}
{{--                                        <span>Traditional dancing show</span><br>--}}
{{--                                        <span>Overnight stay in kandy</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>10<sup>th</sup> October</h6>--}}
{{--                                        <span>Drive to  kithulgal for water rafting and cannyoning</span><br>--}}
{{--                                        <span>Devon waterfall and ST  clair waterfall</span><br>--}}
{{--                                        <span>Overnight stay in Nuwaraeliya</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>11<sup>th</sup> October</h6>--}}
{{--                                        <span>Tea plantation and factory visit</span><br>--}}
{{--                                        <span>Gregory park</span><br>--}}
{{--                                        <span>Horse riding</span><br>--}}
{{--                                        <span>Horton's plains national park walking track 9km. One of the most beautiful--}}
{{--                                            landscape ,plants,animals ,view point ,waterfall ,grass land</span><br>--}}
{{--                                        <span>Overnight stay in Nuwaraeliya</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>12<sup>th</sup> October</h6>--}}
{{--                                        <span>No ride</span><br>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>13<sup>th</sup> October</h6>--}}
{{--                                        <span>Train ride to Ella</span><br>--}}
{{--                                        <span>Cookery Class</span><br>--}}
{{--                                        <span>Overnight stay in Ella</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>14<sup>th</sup> October</h6>--}}
{{--                                        <span>Climb Ella rock</span><br>--}}
{{--                                        <span>Nine arch bridge</span><br>--}}
{{--                                        <span>Climb little adam's peak</span><br>--}}
{{--                                        <span>Zipline</span><br>--}}
{{--                                        <span>Ravana pool club</span><br>--}}
{{--                                        <span>Overnight stay in Ella</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>15<sup>th</sup> October</h6>--}}
{{--                                        <span>Upper Diyaluma waterfall</span><br>--}}
{{--                                        <span>Underground cave with blue water pond (Nil Diya Pokuna)</span><br>--}}
{{--                                        <span>Ravana waterfall</span><br>--}}
{{--                                        <span>Overnight stay in Ella</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="info-item">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <h6>16<sup>th</sup> October</h6>--}}
{{--                                        <span>Drive ro Mirissa</span><br>--}}
{{--                                        <span>Secret waterfall</span><br>--}}
{{--                                        <span>End of Tour</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

