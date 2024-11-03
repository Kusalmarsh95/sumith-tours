@extends('pages.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="second-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Book Prefered Deal Here</h4>
                    <h2>Make Your Reservation</h2>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uttersi labore et dolore magna aliqua is ipsum suspendisse ultrices gravida</p>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="more-info reservation-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4>Make a Phone Call</h4>
                        <a href="#">+94 76 6679247</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Contact Us via Email</h4>
                        <a href="#">tourssumith@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Visit Our Offices</h4>
                        <a href="#">45/C,Alakotuwa,Hondiyadenya,Gampola, Sri Lanka</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <div class="reservation-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="reservation-form" name="gs" role="search" action="{{ route('all-reservations.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Make Your <em>Reservation</em></h4>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" name="name" class="Name" placeholder="Name" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="number" class="form-label">WhatsApp Phone Number</label>
                                    <input type="text" name="number" class="Number" placeholder="+xxx xxx xxx" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" class="Email" placeholder="example@mail.com" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="country" class="form-label">Your Country</label>
                                    <input type="text" name="country" class="Country" placeholder="Country" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="category" class="form-label">Tour Category</label>
                                    <select name="category" class="form-select" aria-label="Default select example" id="category" onChange="this.form.click()">
                                        <option selected>Select Category</option>
                                        <option value="Adventure Tour">Adventure Tour</option>
                                        <option value="Safari">Safari</option>
                                        <option value="Snorkeling">Snorkeling</option>
{{--                                        <option value="4+">4+</option>--}}
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="date" class="form-label">Check In Date</label>
                                    <input type="date" name="date" class="date" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 mx-auto">
                                <fieldset>
                                    <button type="submit" class="main-button">Make Your Reservation Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
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

