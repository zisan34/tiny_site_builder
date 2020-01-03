@extends('frontend.layouts.app')
@section('content')

<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">
                <h1 class="mb-4">{{$gallery->title}}</h1>
                <p>{{$gallery->caption}}</p>
                <div class="row">
                    @foreach($gallery->images as $image)
                    <a class="col-md-4 gallery_images" href="{{URL::asset($image->image)}}" data-lightbox="roadtrip" data-title="{{$image->album->title}}">
                        <div class="gallery_img">
                            <img class="w-100" src="{{URL::asset($image->image)}}" alt="">
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>            
            <div class="col-md-12 col-lg-4">
                @include('frontend.partial.sidebar')
            </div>
        </div>
    </div>
</section>

@endsection