@push('css_custom')
<style>
    .fa{
    font-weight: 900;
}
</style>
@endpush
<div class="full_sidebar">

  @php
    $posts = App\Post::take(4)->get(); 
  @endphp
  @if(count($posts)>0)
    <h3 class="heading mt-3">Latest Posts</h3>
    <div class="post-entry-sidebar">
      <ul>
        @foreach($posts as $post)
        <li>
          <a href="">
            <img src="{{URL::asset($post->featured_image ? $post->featured_image : ($LOGOS ? $LOGOS->primary : 'frontend/images/LogoMakr_7FwHZF.png'))}}" style="width: 100px;" alt="{{$post->title}}" class="mr-4">
            <div class="text">
              <h4>{{$post->title}}</h4>
              <div class="post-meta">
                <span class="mr-2">{{date('d-m-Y', strtotime($post->publish_datetime))}}</span>
              </div>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  @endif
    <!-- END sidebar-box -->
    <div class="sidebar-box">
      <h3 class="heading">Categories</h3>
      @php 
      $categories = App\PostCategory::all(); 
      @endphp
      <ul class="categories">
        @foreach($categories as $category)
        @if(count($category->category_posts)>0)
        <li><a href="{{route('post.category',$category->id,$category->slug)}}">{{$category->title}}<span>({{count($category->category_posts)}})</span></a></li>
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
