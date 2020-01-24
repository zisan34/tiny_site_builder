@extends('frontend.layouts.app')

@section('content')
<!--bottom content part start-->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-9" style="padding-top: 30px;">
            <!--welcome part start-->
            <section id="full_welcome">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="m-0 mb-3">
                                <div class="serv_title text-center">
                                    <h1>{{$welcome_page ? $welcome_page->title : env('APP_NAME')}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--welcome part end-->

            <!--notice part start-->
            <div class="row">
                <div class="col-md-12">
                    <div class="notice">
                        <div class="about_us">
                            <div class="main_notice" style="text-align: justify;">
                               <span id="welcome_content">{!!$welcome_page ? $welcome_page->content : ''!!}</span>
                               <a style="color: #049ba2;" href="{{$welcome_page ? route('page',$welcome_page->id, $welcome_page->slug) : '#'}}" >Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--welcome part start-->
            @if($QUOTE)
            <section id="full_welcome">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="serv_box p-0 pl-2 pr-2">
                                <div class="serv_title text-center p-0">
                                    <!-- <h1 style="font-style: italic;">"পরিষ্কার থাকবো, পরিষ্কার রাখবো "</h1> -->
                                    <marquee>
                                        <h1 style="font-style: italic; font-size: 26px; height: 50px; line-height: 60px; margin:0px;">{{$QUOTE->quote}}</h1>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            <!--welcome part end-->

            <!--service part start-->
            <section id="full_service">
                <div class="container">
                    <div class="row">
                        @foreach($categories as $category)
                        @if(count($category->category_posts) > 0)
                        <div class="col-md-6">
                            <div class="serv_box">
                                <div class="serv_icon">
                                </div>
                                <div class="serv_title">
                                    <span><h5>{{$category->title}} <small><a href="{{route('post.category', $category->id, $category->slug)}}" class="text-light pull-right">See All</a></small> </h5></span>
                                </div>
                                <div class="serv_list">
                                    <ul class="list-group list-group-flush"  style="height: 370px; overflow-y: scroll; width: 100%;">
                                        @php $i=0; @endphp
                                        @foreach($category->limited_post as $post)
                                        <li class="list-group-item list-group-item-action">
                                            <a target="_blank" href="{{route('post',$post->id, $post->slug)}}">
                                                @if($i == 0)
                                                <span style="color: red;">(New)</span>
                                                @endif<br> <!-- Default 3 days -->
                                                <strong>{{$post->title}}</strong> 
                                                <br>
                                                <span>
                                                @php
                                                if(\Carbon\Carbon::now() > \Carbon\Carbon::parse($post->publish_datetime)->addDays(3)) {

                                                    $readableDate = \Carbon\Carbon::parse($post->publish_datetime)->toDayDateTimeString();

                                                } else {

                                                    $readableDate = \Carbon\Carbon::parse($post->publish_datetime)->diffForHumans();
                                                }
                                                @endphp
                                                {{$readableDate}}
                                                </span>
                                            </a>
                                        </li>
                                        @php $i++; @endphp
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </section>
            <!--service part end-->

            <!--spotlight part start-->
            @if($welcome_settings->enable_middle_sliders == 1 && count($MIDDLE_SLIDERS)>0)
            <section class="pt-4 pb-4">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="title">
                        <h3>SPOTLIGHT</h3>
                    </div>
                    <div class="owl-carousel owl-theme home-slider">
                    @foreach($MIDDLE_SLIDERS as $slider)
                      <div>
                        <img class="w-100" src="{{ asset($slider->image) }}" alt="">
                      </div>
                    @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </section>
            @endif
            <!--spotlight part end-->

            <!--service part start-->
            <section id="full_service" class="pb-5">
                <div class="container">
                    <div class="row">
                        @if($welcome_settings->enable_recent_video == 1 && $LATEST_VIDEO != NULL)
                        <div class="col-md-6">
                            <div class="serv_box">
                                <div class="serv_icon">
                                </div>
                                <div class="serv_title">
                                    <span><h5>Latest Video<small><a href="{{route('video_gallery')}}" class="text-light pull-right">View More</a></small> </h5></span>
                                </div>
                                <div class="serv_list" style="min-height: 270px; padding: 5px;">
                                    <iframe width="100%" height="240px" src="{{str_replace("watch?v=","embed/",URL::asset($LATEST_VIDEO->video))}}" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if($welcome_settings->enable_recent_images == 1 && count($LATEST_IMAGES)>0)

                        <div class="col-md-6">
                            <div class="serv_box">
                                <div class="serv_icon">
                                </div>
                                <div class="serv_title">
                                    <span><h5>Latest Photo<small><a href="{{route('photo_gallery')}}" class="text-light pull-right">View More</a></small> </h5></span>
                                </div>
                                <div class="serv_list" style="margin: 10px;">
                                    <div class="row">
                                        @foreach($LATEST_IMAGES as $image)
                                        <a class="col-md-4 home_gallery" href="{{ asset($image->image) }}" data-lightbox="roadtrip" data-title="{{$image->album->title}}">
                                            <img class="w-100" src="{{ asset($image->image) }}" alt="{{$image->album->title}}">
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </section>
        </div>
        <div class="col-sm-8 offset-sm-2 offset-lg-0 col-lg-3">
            @include('frontend.partial.sidebar')
        </div>
    </div>
</div>
<!--bottom content part end-->


@endsection



@push('js_custom')

<script>

    $(document).ready(function(e){

        // e.preventDetault();



        var getWelcomeContnetWords = $('#welcome_content').text().split(" ");

        $('#welcome_content').text(getSplitContent(getWelcomeContnetWords, 120));



        

    });

</script>

@endpush






