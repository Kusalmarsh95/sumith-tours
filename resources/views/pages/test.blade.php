@extends('pages.app')
@section('content')
    <div class="visit-country">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h2>Travel with us Now</h2>
                        <p>Discover Sri Lanka's top destinations with our expert travel guides! We offer insider tips on must-see attractions, local cuisine, and cultural experiences. Plan your perfect trip with personalized itineraries, practical advice, and travel inspiration for every kind of adventurer.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="items">
                        <!-- Page 1 Content -->
                        <div class="page-content" data-page="1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5">
                                                <div class="image">
                                                    <img src="assets/images/country-01.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-7">
                                                <div class="right-content">
                                                    <h4>Adventure Tour</h4>
                                                    <span>Up Country</span>
                                                    <div class="main-button">
                                                        <a href="/about">Explore More</a>
                                                    </div>
                                                    <p>Embark on an unforgettable adventure tour, exploring rugged terrains, wild landscapes, and thrilling outdoor activities. Our expertly guided tours promise excitement and breathtaking experiences for thrill-seekers of all levels.</p>
                                                    <ul class="info">
                                                        <li><i class="fa fa-user"></i> 56 Travellers</li>
                                                        <li><i class="fa fa-globe"></i> 3 Districts</li>
                                                        <li><i class="fa fa-home"></i> 4 Days</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more items as needed -->
                            </div>
                        </div>

                        <!-- Page 2 Content -->
                        <div class="page-content" data-page="2" style="display: none;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5">
                                                <div class="image">
                                                    <img src="assets/images/country-02.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-7">
                                                <div class="right-content">
                                                    <h4>Safari</h4>
                                                    <span>Forests</span>
                                                    <div class="main-button">
                                                        <a href="/about">Explore More</a>
                                                    </div>
                                                    <p>Experience the wild like never before with our safari tours! Journey through stunning landscapes, encounter majestic wildlife, and immerse yourself in nature. Our tours offer an exhilarating blend of adventure and tranquility.</p>
                                                    <ul class="info">
                                                        <li><i class="fa fa-user"></i> 86 Travellers</li>
                                                        <li><i class="fa fa-globe"></i> 2 Jungles</li>
                                                        <li><i class="fa fa-home"></i> 3 Days</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more items as needed -->
                            </div>
                        </div>

                        <!-- Page 3 Content -->
                        <div class="page-content" data-page="3" style="display: none;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5">
                                                <div class="image">
                                                    <img src="assets/images/country-03.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-7">
                                                <div class="right-content">
                                                    <h4>Snorkeling</h4>
                                                    <span>Under Water</span>
                                                    <div class="main-button">
                                                        <a href="/about">Explore More</a>
                                                    </div>
                                                    <p>Combine the thrill of a safari with the beauty of underwater exploration on our snorkeling tours! Dive into crystal-clear waters to discover vibrant marine life and stunning coral reefs, all while enjoying the excitement of a guided adventure.</p>
                                                    <ul class="info">
                                                        <li><i class="fa fa-user"></i> 105 Travellers</li>
                                                        <li><i class="fa fa-globe"></i> 4 Water areas</li>
                                                        <li><i class="fa fa-home"></i> 2 Days</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more items as needed -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="side-bar-map">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!3m1!1e3!4m6!3m5!1s0x3ae408ff88887e79:0xaf12e79ffbd980d7!8m2!3d6.4746288!4d80.876319!16zL20vMDJzMHlj?entry=ttu&g_ep=EgoyMDI0MDkxNi4wIKXMDSoASAFQAw%3D%3D" width="100%" height="550px" frameborder="0" style="border:0; border-radius: 23px; " allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-numbers">
                        <li><a href="#" class="prev-page"><i class="fa fa-arrow-left"></i></a></li>
                        <li><a href="#" class="page-link" data-page="1">1</a></li>
                        <li><a href="#" class="page-link" data-page="2">2</a></li>
                        <li><a href="#" class="page-link" data-page="3">3</a></li>
                        <li><a href="#" class="next-page"><i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Banner Switching Function
        function bannerSwitcher() {
            let next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
            if (next.length) next.prop('checked', true);
            else $('.sec-1-input').first().prop('checked', true);
        }

        let bannerTimer = setInterval(bannerSwitcher, 5000);

        $('nav .controls label').click(function() {
            clearInterval(bannerTimer);
            bannerTimer = setInterval(bannerSwitcher, 5000);
        });

        // Pagination Functionality
        document.addEventListener('DOMContentLoaded', function () {
            const pageLinks = document.querySelectorAll('.page-link');
            const pages = document.querySelectorAll('.page-content');
            const prevButton = document.querySelector('.prev-page');
            const nextButton = document.querySelector('.next-page');
            let currentPage = 1;
            const totalPages = pages.length;

            function showPage(pageNumber) {
                pages.forEach(page => page.style.display = 'none');
                const pageToShow = document.querySelector(`.page-content[data-page="${pageNumber}"]`);
                if (pageToShow) {
                    pageToShow.style.display = 'block';
                }

                // Update active class for pagination
                pageLinks.forEach(link => link.classList.remove('active'));
                const activeLink = document.querySelector(`.page-link[data-page="${pageNumber}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }

            pageLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    const pageNumber = parseInt(this.getAttribute('data-page'));
                    if (pageNumber !== currentPage) {
                        currentPage = pageNumber;
                        showPage(currentPage);
                    }
                });
            });

            prevButton.addEventListener('click', function (event) {
                event.preventDefault();
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            nextButton.addEventListener('click', function (event) {
                event.preventDefault();
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Show the first page on load
            showPage(1);
        });
    </script>



@endsection
