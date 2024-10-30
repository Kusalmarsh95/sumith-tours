@extends('pages.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="second-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Welcome to our Adventure Tour services, where adrenaline meets the great outdoors!</h4>
                    <h2>Find Preferred Deal From Here</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="cities-town">
        <div class="container">
            <div class="row">
                <div class="slider-content">
                    <div class="visit-country">
                        <div class="container">
                            <div class="row">
                                <div class="section-heading">
                                    <h2>Travel with us Now</h2>
                                    <p>Discover the Sri Lanka's top destinations with our expert travel guides!
                                        We offer insider tips on must-see attractions, local cuisine, and cultural
                                        experiences. Plan your perfect trip with personalized itineraries, practical advice,
                                        and travel inspiration for every kind of adventurer.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <div class="image">
                                                                <img src="{{ asset("images/adventure_01.jpg") }}" alt="">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-7">
                                                            <div class="right-content">
                                                                <h4>Adventure Tour</h4>
{{--                                                                <span>Up Country</span>--}}
                                                                <p>Embark on an unforgettable adventure tour, exploring rugged terrains, wild landscapes,
                                                                    and thrilling outdoor activities. Our expertly guided tours promise excitement and
                                                                    breathtaking experiences for thrill-seekers of all levels.</p>
{{--                                                                <ul class="info">--}}
{{--                                                                    <li><i class="fa fa-user"></i> 56 Travellers</li>--}}
{{--                                                                    <li><i class="fa fa-globe"></i> 3 Districts</li>--}}
{{--                                                                    <li><i class="fa fa-home"></i> 4 Days</li>--}}
{{--                                                                </ul>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <div class="image">
                                                                <img src="{{ asset("images/safari_01.jpg") }}" alt="">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-7">
                                                            <div class="right-content">
                                                                <h4>Safari</h4>
{{--                                                                <span>Forests</span>--}}
                                                                <p>Experience the wild like never before with our safari tours!
                                                                    Journey through stunning landscapes, encounter majestic wildlife,
                                                                    and immerse yourself in nature. Our tours offer an exhilarating
                                                                    blend of adventure and tranquility.</p>
{{--                                                                <ul class="info">--}}
{{--                                                                    <li><i class="fa fa-user"></i> 86 Travellers</li>--}}
{{--                                                                    <li><i class="fa fa-globe"></i> 2 Jungles</li>--}}
{{--                                                                    <li><i class="fa fa-home"></i> 3 Days</li>--}}
{{--                                                                </ul>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="item last-item">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <div class="image">
                                                                <img src="{{ asset("images/snorkeling_01.jpg") }}" alt="">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-7">
                                                            <div class="right-content">
                                                                <h4>Snorkeling</h4>
{{--                                                                <span>Under Water</span>--}}
                                                                <p>Combine the thrill of a safari with the beauty of underwater exploration on our
                                                                    snorkeling tours! Dive into crystal-clear waters to discover vibrant marine
                                                                    life and stunning coral reefs, all while enjoying the excitement of a guided adventure.</p>
{{--                                                                <ul class="info">--}}
{{--                                                                    <li><i class="fa fa-user"></i> 105 Travellers</li>--}}
{{--                                                                    <li><i class="fa fa-globe"></i> 4 Water areas</li>--}}
{{--                                                                    <li><i class="fa fa-home"></i> 2 Days</li>--}}
{{--                                                                </ul>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="item last-item">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <div class="image">
                                                                <img src="{{ asset("images/camping.jpg") }}" alt="">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-7">
                                                            <div class="right-content">
                                                                <h4>Camping site</h4>
{{--                                                                <span>Under Water</span>--}}
                                                                <p>A Camping Site offers an immersive outdoor experience where visitors
                                                                    can connect with nature and enjoy activities like campfire gatherings.
                                                                    camping sites are perfect for adventure enthusiasts looking to escape urban life,
                                                                    soak in natural beauty, and create memorable outdoor experiences.</p>
{{--                                                                <ul class="info">--}}
{{--                                                                    <li><i class="fa fa-user"></i> 105 Travellers</li>--}}
{{--                                                                    <li><i class="fa fa-globe"></i> 4 Water areas</li>--}}
{{--                                                                    <li><i class="fa fa-home"></i> 2 Days</li>--}}
{{--                                                                </ul>--}}
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
        </div>
    </div>

    <script>
        $(".option").click(function(){
            $(".option").removeClass("active");
            $(this).addClass("active");
        });
    </script>
@endsection

