
              @php
                $posts = App\Post::take(4)->get(); 
              @endphp
              @if(count($posts)>0)
              <section class="mt-5">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="mb-3 ">Related Post</h2>
                  </div>
                </div>
                <div class="row">
                  @foreach($posts as $post)
                  <div class="col-md-6 col-lg-6">
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
              </section>
              @endif