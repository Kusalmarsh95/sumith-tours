@extends('pages.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="about-main-content" style="background-image: url('/images/amazon-review.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="blur-bg" style="background-image: url('/images/amazon-review.png');"></div>
                        <h2>Customer Reviews</h2>
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
                        <div class="row mb-1">
                            <div class="item col-md-6">
                                <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed ; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                                    <h6>Jack nile</h6>
                                    <div class="line-dec"></div>
                                    <ul>
                                        <p>comment</p>
                                    </ul>
                                    <ul>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </ul>
                                </div>
                            </div>
                            <div class="item col-md-6">
                                <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed ; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                                    <h6>Jack nile</h6>
                                    <div class="line-dec"></div>
                                    <ul>
                                        <p>comment</p>
                                    </ul>
                                    <ul>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="item col-md-6">
                                <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed ; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                                    <h6>Jack nile</h6>
                                    <div class="line-dec"></div>
                                    <ul>
                                        <p>comment</p>
                                    </ul>
                                    <ul>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </ul>
                                </div>
                            </div>
                            <div class="item col-md-6">
                                <div class="text" style="background-color: #c6f1f2; border: 1px solid #a4ebed ; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                                    <h6>Jack nile</h6>
                                    <div class="line-dec"></div>
                                    <ul>
                                        <p>comment</p>
                                    </ul>
                                    <ul>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="reservation-form">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="reservation-form" name="gs" role="search" action="{{ route('reservation.store') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h4>Your <em>Comment</em></h4>
                                                </div>
                                                <div class="col-lg-6">
                                                    <fieldset>
                                                        <label for="name" class="form-label">Your Name</label>
                                                        <input type="text" name="name" class="Name" placeholder="Name" autocomplete="on" required>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-6">
                                                    <fieldset>
                                                        <label for="country" class="form-label">Your Country</label>
                                                        <input type="text" name="country" class="Country" placeholder="Country" autocomplete="on" required>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <label for="category" class="form-label">Comment</label>
                                                        <input type="text" name="country" class="Country" placeholder="Country" autocomplete="on" required>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-6 mx-auto">
                                                    <fieldset>
{{--                                                        <label for="date" class="form-label">Rating</label>--}}
                                                        <div class=" d-flex justify-content-center mt-1">
                                                            <div class=" text-center mb-2">
                                                                <div class="rating">
                                                                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                                                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                                                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                                                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                                                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mx-auto">
                                                <fieldset>
                                                    <button type="submit" class="main-button">Submit</button>
                                                </fieldset>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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

