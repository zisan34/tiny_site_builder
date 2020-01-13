@push('css_custom')
<style>
    .fa{
    font-weight: 900;
}
</style>
@endpush
<div class="full_sidebar">

    <h3 class="heading mt-3">Latest Posts</h3>
    <div class="post-entry-sidebar">
      <ul>
        <li>
          <a href="">
            <img src="{{URL::asset('frontend/images/img_2.jpg')}}" alt="Image placeholder" class="mr-4">
            <div class="text">
              <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
              <div class="post-meta">
                <span class="mr-2">March 15, 2018 </span>
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="">
            <img src="{{URL::asset('frontend/images/img_4.jpg')}}" alt="Image placeholder" class="mr-4">
            <div class="text">
              <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
              <div class="post-meta">
                <span class="mr-2">March 15, 2018 </span>
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="">
            <img src="{{URL::asset('frontend/images/img_12.jpg')}}" alt="Image placeholder" class="mr-4">
            <div class="text">
              <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
              <div class="post-meta">
                <span class="mr-2">March 15, 2018 </span>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </div>
    <!-- END sidebar-box -->
    <div class="sidebar-box">
      <h3 class="heading">Categories</h3>
      @php 
      $categories = App\PostCategory::all(); 
      @endphp
      <ul class="categories">
        @foreach($categories as $category)
        @if(count($category->category_posts)>0)
        <li><a href="{{route('post.category',encrypt($category->id),$category->slug)}}">{{$category->title}}<span>({{count($category->category_posts)}})</span></a></li>
        @endif
        @endforeach
      </ul>
    </div>
    <!-- END sidebar-box -->

    <div class="sidebar-box">
      <h3 class="heading">Tags</h3>
      <ul class="tags">
        <li><a href="#">Travel</a></li>
        <li><a href="#">Adventure</a></li>
        <li><a href="#">Food</a></li>
        <li><a href="#">Lifestyle</a></li>
        <li><a href="#">Business</a></li>
        <li><a href="#">Freelancing</a></li>
        <li><a href="#">Travel</a></li>
        <li><a href="#">Adventure</a></li>
        <li><a href="#">Food</a></li>
        <li><a href="#">Lifestyle</a></li>
        <li><a href="#">Business</a></li>
        <li><a href="#">Freelancing</a></li>
      </ul>
    </div>

</div>
