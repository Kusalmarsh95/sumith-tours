@extends('pages.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="about-main-content" style="background-image: url('/images/CampingPlaces.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="blur-bg" style="background-image: url('/images/CampingPlaces.jpg');"></div>
                        <h2>CAMPING SITE</h2>
                        <div class="line-dec"></div>
                        {{--                        <h2>Welcome To Caribbean</h2>--}}
                        <p>Reconnect with nature at our serene camping site, where comfort meets the
                            great outdoors. Enjoy spacious, well-equipped tents, scenic views, and a
                            range of activities from stargazing to hiking. Perfect for families, friends,
                            and solo adventurers seeking a peaceful retreat in nature.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <div class="cities-town">
        <div class="container">
            <div class="row">
                <div class="slider-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Memories of <em>Camping Site</em></h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="owl-cites-town owl-carousel">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="images/cities-01.jpg" alt="">
                                        <h4>Jungle</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <img src="images/cities-02.jpg" alt="">
                                        <h4>Sea</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <img src="images/cities-03.jpg" alt="">
                                        <h4>Fort</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <img src="images/cities-04.jpg" alt="">
                                        <h4>Mountain</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="main-button text-center">
                                <a href="deals.html">Make a Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

