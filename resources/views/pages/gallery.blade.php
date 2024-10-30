@extends('pages.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="about-main-content" style="background-image: url({{ asset('/images/the-Gallery.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="blur-bg" style="background-image: url({{ asset('/images/the-Gallery.jpg') }});"></div>
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
                            <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="{{ asset("images/tours/FB_IMG_1729388869880.jpg") }}" alt="Image 1" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">

                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="{{ asset("images/tours/FB_IMG_1729388878387.jpg") }}" alt="Image 2" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="{{ asset("images/tours/FB_IMG_1729388888339.jpg") }}" alt="Image 3" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="{{ asset("images/tours/IMG-20241011-WA0000.jpg") }}" alt="Image 1" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="{{ asset("images/tours/FB_IMG_1729388893179.jpg") }}" alt="Image 2" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="{{ asset("images/tours/FB_IMG_1729388909256.jpg") }}" alt="Image 3" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="{{ asset("images/tours/20241012_095232.jpg") }}" alt="Image 1" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="{{ asset("images/tours/IMG-20241014-WA0022.jpg") }}" alt="Image 2" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="item col-md-4 mb-1">
                            <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <img src="{{ asset("images/tours/IMG-20240727-WA0075.jpg") }}" alt="Image 3" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

