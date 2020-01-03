@extends('frontend.layouts.app')
@push('css_custom')
<style>
.cus_video_div{
    border: 1px solid rgb(199, 210, 252);
    border-radius: 20px;
}
</style>
@endpush
@section('content')

<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">
          <div class="col-md-12 col-lg-8 main-content">
                <h1 class="mb-4">Video Gallery</h1>
                @foreach($videos as $video)
                {{-- <div class="col-md-12 cus_video_div mb-4" >
                    <div class="text-center" style="min-height: 270px; padding: 5px;">
                    <p>{{$video->title}}</p>
                    <iframe width="700px" height="400px" src="{{str_replace("watch?v=","embed/",URL::asset($video->video))}}" allowfullscreen=""></iframe>
                    </div>
                </div> --}}
                <div class="col-md-12 mb-4" >
                  <div class="blog-entry element-animate fadeIn element-animated" data-animate-effect="fadeIn">
                    <div  class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{str_replace("watch?v=","embed/",URL::asset($video->video))}}" allowfullscreen=""></iframe>
                    </div>

                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{URL::asset($video->user->profile->image)}}" alt="{{$video->user->name}}"> {{$video->user->name}}</span>&bullet;
                        <span class="mr-2"> {{date('d-M-Y', strtotime($video->created_at))}}</span>
                      </div>
                      <h2>{{$video->title}}</h2>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>            
            <div class="col-md-12 col-lg-4 sidebar">
                @include('frontend.partial.sidebar')
            </div>
        </div>
    </div>
</section>

@endsection
