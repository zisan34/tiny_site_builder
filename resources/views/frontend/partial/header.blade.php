
    <header role="banner">
      {{-- 
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-9 social">
              <a href="#"><span class="fa fa-twitter"></span></a>
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-instagram"></span></a>
              <a href="#"><span class="fa fa-youtube-play"></span></a>
            </div>
            <div class="col-3 search-top">
              <!-- <a href="#"><span class="fa fa-search"></span></a> -->
              <form action="#" class="search-top-form">
                <span class="icon fa fa-search"></span>
                <input type="text" id="s" placeholder="Type keyword to search...">
              </form>
            </div>
          </div>
        </div>
      </div>
       --}}

      
      <!--top header part start-->
      <section id="top_header" class="container-fluid">
          <div class="container-fluid p-0">
              <div class="row">
                  <div class="col-md-12 p-0">
                      <div class="top_header_content">
                          <div class="brigade_logo">
                              <img class="w-100" src="{{ asset($LOGOS->primary) }}" alt="">
                          </div>
                          <div class="header_txt">
                              <h1>{{$HEADER_FOOTERS->title}}</h1>
                              <h2>{{$HEADER_FOOTERS->subtitle}}</h2>
                          </div>
                          <div class="camp_logo">
                              <img class="w-100" src="{{ asset($LOGOS->secondary) }}" alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>



      @if(count($TOP_SLIDERS)>0)
      <section class="pt-0 pb-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

              <div class="owl-carousel owl-theme home-slider">
              @foreach($TOP_SLIDERS as $slider)
                <div>
                  <a href="blog-single.html" class="a-block d-flex align-items-center height-lg w-100 img-fluid" style="background-image: url({{URL::asset($slider->image) }}); ">
                    <div class="text half-to-full">
                      {{-- <span class="category mb-5">Food</span> --}}
                      <div class="post-meta">
                        
                        {{-- <span class="author mr-2"><img src="{{URL::asset('frontend/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet; --}}
                        {{-- <span class="mr-2">March 15, 2018 </span> &bullet; --}}
                        {{-- <span class="ml-2"><span class="fa fa-comments"></span> 3</span> --}}
                        
                      </div>
                      <h3>{{$slider->caption}}</h3>
                    </div>
                  </a>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif


    @include('frontend.partial.nav')

    </header>