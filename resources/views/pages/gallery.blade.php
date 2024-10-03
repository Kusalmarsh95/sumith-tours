@extends('pages.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="about-main-content" style="background-image: url('/images/the-Gallery.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="blur-bg" style="background-image: url('/images/the-Gallery.jpg');"></div>
                        <h2>Image Gallery</h2>
                        <div class="line-dec"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cities-town">
        <div class="container">
            <div class="row">
                <div class="slider-content">
                    <div class="row">
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="images/boattour.jpg" alt="Image 1" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="images/feedfish.jpg" alt="Image 2" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="images/girls-koh-nang.jpg" alt="Image 3" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="images/boattour.jpg" alt="Image 1" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="images/feedfish.jpg" alt="Image 2" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="images/girls-koh-nang.jpg" alt="Image 3" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="weekly-offers">--}}
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
@endsection

