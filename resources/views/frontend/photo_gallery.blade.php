@extends('frontend.layouts.app')
@push('css_custom')
<style>
    .album_thumb{
        height: 300px;
    }
</style>
@endpush

@section('content')

<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">
                <h1 class="mb-4">Photo Gallery</h1>
                <h4>Albums:</h4>
                <div class="row">
                    @foreach($albums as $album)
                    <div class="col-md-6 col-lg-6">
                      <a href="{{route('gallery',encrypt($album->id))}}" class="blog-entry element-animate fadeIn element-animated" data-animate-effect="fadeIn">
                        <img class="album_thumb" src="{{$album->cover_image ? URL::asset($album->cover_image) : URL::asset($album->image->image)}}" alt="{{$album->title}}">
                        <div class="blog-content-body">
                          <div class="post-meta">
                            <span class="author mr-2"><img src="{{URL::asset($album->user->profile->image)}}" alt="{{$album->user->name}}"> {{$album->user->name}}</span>&bullet;
                            <span class="mr-2"> {{date('d-M-Y', strtotime($album->created_at))}}</span>
                          </div>
                          <h2>{{$album->title}}</h2>
                        </div>
                      </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 col-lg-4 sidebar">
                @include('frontend.partial.sidebar')
            </div>
        </div>
    </div>
</section>

@endsection
