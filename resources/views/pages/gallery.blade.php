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
                        @foreach ($galleries as $gallery)
                            <div class="item col-md-4 mb-1">
                                <div class="text" style="background-color: #efc475; border: 1px solid #f1cb85; border-radius: 10px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                    @php
                                        $filePath = 'storage/' . $gallery->image_path;
                                        $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                                    @endphp
                                    @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'bmp']))
                                        <img src="{{ asset($filePath) }}" alt="{{ $gallery->title }}" class="img-fluid" style="width: 100%; height: auto; max-width: 350px; max-height: 350px; object-fit: cover;">
                                    @elseif(in_array($fileExtension, ['mp4', 'webm', 'ogg']))
                                        <video width="100%" height="auto" controls>
                                            <source src="{{ asset($filePath) }}" type="video/{{ $fileExtension }}">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

