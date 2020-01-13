<nav class="navbar navbar-expand-lg  navbar-light bg-light pb-5  navbar-fixed-top" data-toggle="affix">

    <div class="container-fluid">
        
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    
   
        <div class="collapse navbar-collapse" id="navbarMenu" style="border-radius: 0% 0% 25% 25%;">
          <ul class="navbar-nav mx-auto"  style="
          @media screen and (max-width: 1024px) {position: -webkit-sticky;  position: sticky;}">

            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>

            @foreach($MENUS as $menu)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{$menu->link}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{$menu->name}}
                </a>
                @if(count($menu->submenus) > 0)
                <div class="dropdown-menu fade" aria-labelledby="navbarDropdown">
                    @foreach($menu->submenus as $submenu)
                    @if($submenu->relational_type == "pages")
                    <a class="dropdown-item" href="{{route('page',['id'=>encrypt($submenu->relational_id), 'slug'=>strtolower($submenu->name)])}}">{{$submenu->name}}</a>
                    @elseif($submenu->relational_type == "posts")
                    <a class="dropdown-item" href="{{route('post',['id'=>encrypt($submenu->relational_id), 'slug'=>strtolower($submenu->name)])}}">{{$submenu->name}}</a>
                    @elseif($submenu->relational_type == "post_category")
                    <a class="dropdown-item" href="{{route('post.category',['id'=>encrypt($submenu->relational_id), 'slug'=>strtolower($submenu->name)])}}">{{$submenu->name}}</a>
                    @elseif($submenu->relational_type == "photo_album")
                    <a class="dropdown-item" href="{{route('gallery',['id'=>encrypt($submenu->relational_id), 'slug'=>strtolower($submenu->name)])}}">{{$submenu->name}}</a>
                    @elseif($submenu->relational_type == "photo_gallery")
                    <a class="dropdown-item" href="{{url('/')}}{{$submenu->link}}">{{$submenu->name}}</a>
                    @elseif($submenu->relational_type == "video_gallery")
                    <a class="dropdown-item" href="{{url('/')}}{{$submenu->link}}">{{$submenu->name}}</a>
                    @else
                    <a class="dropdown-item" href="{{$submenu->link}}">{{$submenu->name}}</a>
                    @endif
                    @endforeach
                </div>
                @endif
            </li>
            @endforeach
          </ul>
          
        </div>
    </div>
</nav>