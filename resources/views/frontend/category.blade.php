@extends('frontend.layouts.app')

@section('content')
    <section class="site-section pt-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h2 class="mb-4">Category: {{$post_category->title}}</h2>

            @if($post_category->description)
            <div class="col-md-12">
              <p>
                  {{$post_category->description}}
              </p>
            </div>
            @endif
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

              <div class="col-md-12">

                @php
                $categorized_posts = [];
                if(count($post_category->subcategory_posts)>0)
                  $categorized_posts = $post_category->subcategory_posts;
                elseif(count($post_category->category_posts)>0)
                  $categorized_posts = $post_category->category_posts;
                @endphp
                @if(count($categorized_posts)>0)

                @foreach($categorized_posts as $post)

                @php
                if(\Carbon\Carbon::now() > \Carbon\Carbon::parse($post->publish_datetime)->addDays(3)) {
                    $readableDate = \Carbon\Carbon::parse($post->publish_datetime)->toDateString();
                }
                else {
                    $readableDate = \Carbon\Carbon::parse($post->publish_datetime)->diffForHumans();
                }
                @endphp
                <div class="post-entry-horzontal">
                  <a href="{{route('post',$post->id,$post->slug)}}">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{URL::asset($post->featured_image ? $post->featured_image : 'uploads/post/Random-image.jpg')}}); background-size: cover;"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{URL::asset($post->user->profile->image)}}" alt="{{$post->user->name}}"> {{$post->user->name}}</span>&bullet;
                        <span class="mr-2">{{$readableDate}} </span> &bullet;
                        <span class="mr-2">{{$post->post_category->title}}</span> &bullet;
                        @if($post->post_sub_category)
                        <span class="mr-2">{{$post->post_sub_category->title}}</span> &bullet;
                        @endif
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>{{$post->title}}</h2>
                    </span>
                  </a>
                </div>
                @endforeach
                @endif
                <!-- END post -->

                {{-- <div class="post-entry-horzontal">
                  <a href="#">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{URL::asset('frontend/images/img_11.jpg')}});"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{URL::asset('frontend/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="mr-2">Food</span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                    </span>
                  </a>
                </div> --}}
                <!-- END post -->
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                  </ul>
                </nav>
              </div>
            </div>

            

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            
            @include('frontend.partial.postsidebar')
            @include('frontend.partial.sidebar')

          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>
@endsection