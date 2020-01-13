@extends('frontend.layouts.app')

@section('content')
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            @if($page->featured_image)
            <img src="{{URL::asset($page->featured_image)}}" alt="Image" class="img-fluid mb-5">
            @endif
            <div class="post-meta">
                <span class="author mr-2"><img src="{{URL::asset($page->user->profile->image ? $page->user->profile->image : 'frontend/images/person_1.jpg')}}" alt="{{$page->user->name}}" class="mr-2">{{$page->user->name}}</span>&bullet;
                @php
                if(\Carbon\Carbon::now() > \Carbon\Carbon::parse($page->publish_datetime)->addDays(3)) {
                    $readableDate = \Carbon\Carbon::parse($page->publish_datetime)->toDayDateTimeString();
                } else {
                    $readableDate = \Carbon\Carbon::parse($page->publish_datetime)->diffForHumans();
                }
                @endphp
                <span class="mr-2">{{$readableDate}}</span> &bullet;
                <span class="ml-2"><span class="fa fa-comments"></span> 0</span>
            </div>
            <h1 class="mb-4">
              {{$page->title}} {{$page->subtitle ? '('.$page->subtitle.')':''}}
            </h1>
            @if($page->post_category)
            <a class="category mb-5" href="#">{{$page->post_category->title}}</a>
            @endif
            <div class="post-content-body">
              @if($page->content_type == 1)

              <p>{!!$page->content!!}</p>

              @elseif($page->content_type == 2)

              <iframe src="http://docs.google.com/gview?url={{ URL::asset($page->content) }}&amp;embedded=true" style="width:100%; height:700px;" frameborder="0" ></iframe>

              <h3 class="text-center">Or</h3>



              <a class="btn btn-info text-center" href="{{ URL::asset($page->content) }}" download>Download</a>

              <!-- <button class="btn ml-auto">More</button> -->

              @endif
            </div>

            
            @if($page->post_category)
            <div class="pt-5">
              <p>Category:  <a href="#">{{$page->post_category->title}}</a></p>
            </div>
            @endif


            {{-- <div class="pt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard">
                    <img src="{{URL::asset('frontend/images/person_1.jpg')}}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard">
                    <img src="{{URL::asset('frontend/images/person_1.jpg')}}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard">
                        <img src="{{URL::asset('frontend/images/person_1.jpg')}}" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply rounded">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard">
                            <img src="{{URL::asset('frontend/images/person_1.jpg')}}" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply rounded">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard">
                                  <img src="{{URL::asset('frontend/images/person_1.jpg')}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>Jean Doe</h3>
                                  <div class="meta">January 9, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard">
                    <img src="{{URL::asset('frontend/images/person_1.jpg')}}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div> --}}

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <!-- END sidebar-box -->  
            <div class="sidebar-box mt-5">
              <div class="bio text-center">
                <img src="{{URL::asset($page->user->profile->image)}}" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>{{$page->user->name}}</h2>
                  <p class="info">{{$page->user->profile->bio}}</p>
                  {{-- <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p> --}}
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            @if($model == 'Post')
            @include('frontend.partial.postsidebar')
            @endif
            @include('frontend.partial.sidebar')
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    @php
      $posts = App\Post::take(4)->get(); 
    @endphp
    @if(count($posts)>0)
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Related Post</h2>
          </div>
        </div>
        <div class="row">
          @foreach($posts as $post)
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('{{URL::asset($post->featured_image)}}'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">{{$post->post_category->title}}</span>
                  <span class="mr-2">{{date('d-m-Y', strtotime($post->publish_datetime))}}</span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span></span>
                </div>
                <h3>{{$post->title}}</h3>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    @endif
    <!-- END section -->
@endsection
