@php $user = Auth::user(); @endphp
<section class="sidebar">
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li><a href="{{url('/')}}" target="_blank"><i class="fa fa-globe"></i> <span>Visit Site</span></a></li>

        <li class="header">MAIN APPLICATION</li>
        <li class="{{ (\Request::route()->getName() == 'admin.dashboard') ? 'active' : '' }}">
            <a href="{{url('/admin/dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>

        @if($user->hasPermissionTo('add posts') || 
            $user->hasPermissionTo('view all posts') || 
            $user->hasPermissionTo('edit posts')|| 
            $user->hasPermissionTo('delete posts')|| 
            $user->hasPermissionTo('add post categories')|| 
            $user->hasPermissionTo('edit post categories')|| 
            $user->hasPermissionTo('delete post categories')|| 
            $user->hasPermissionTo('view all post categories') || 
            $user->hasPermissionTo('add pages') || 
            $user->hasPermissionTo('edit pages')|| $user->hasPermissionTo('delete pages') || 
            $user->hasPermissionTo('view all pages') || 
            $user->hasPermissionTo('add sliders') || 
            $user->hasPermissionTo('edit sliders')|| $user->hasPermissionTo('delete sliders') || 
            $user->hasPermissionTo('view all sliders') || 
            $user->hasPermissionTo('add photo albums') || 
            $user->hasPermissionTo('edit photo albums')|| $user->hasPermissionTo('delete photo albums') || 
            $user->hasPermissionTo('view all photo albums') || 
            $user->hasPermissionTo('add videos') || 
            $user->hasPermissionTo('edit videos') || 
            $user->hasPermissionTo('delete videos') || 
            $user->hasPermissionTo('view all videos') || 
            $user->hasPermissionTo('add social links') || 
            $user->hasPermissionTo('edit social links') || 
            $user->hasPermissionTo('delete social links') || 
            $user->hasPermissionTo('view all social links') || 
            $user->hasPermissionTo('edit logos') || 
            $user->hasPermissionTo('edit header footers') || 
            $user->hasPermissionTo('add members') || 
            $user->hasPermissionTo('edit members') || 
            $user->hasPermissionTo('delete members') || 
            $user->hasPermissionTo('view all members') || 
            $user->hasPermissionTo('add widgets') || 
            $user->hasPermissionTo('edit widgets') || 
            $user->hasPermissionTo('delete widgets') || 
            $user->hasPermissionTo('view all widgets') || 
            $user->hasPermissionTo('add widget data') || 
            $user->hasPermissionTo('edit widget data') || 
            $user->hasPermissionTo('delete widget data') || 
            $user->hasPermissionTo('view all widget data') || 
            $user->hasPermissionTo('edit general site settings') || 
            $user->hasPermissionTo('add menus') || 
            $user->hasPermissionTo('edit menus') || 
            $user->hasPermissionTo('delete menus') || 
            $user->hasPermissionTo('view all menus'))
        <li class="treeview active {{  (Request::is('admin/pages*') ||
                                 Request::is('admin/posts*') || 
                                 Request::is('admin/categories*') || 
                                 Request::is('admin/subcategories*') ||
                                 Request::is('admin/sliders*')   || 
                                 Request::is('admin/logos*')  || 
                                 Request::is('admin/headerfooters*') || 
                                 Request::is('admin/social_medias*')  || 
                                 Request::is('admin/general-settings*')  || 
                                 Request::is('admin/widgets*')  || 
                                 Request::is('admin/widget-data*')  || 
                                 Request::is('admin/settings*') || 
                                 Request::is('admin/menus*')   || 
                                 Request::is('admin/members*')   || 
                                 Request::is('admin/albums*')   || 
                                 Request::is('admin/videos*')   || 
                                 Request::is('admin/member-categories*')   || 
                                 Request::is('admin/submenus*'))    ? 'active': '' }}">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Manage Website</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                {{-- @can('add posts','view all posts','edit posts','delete posts','add post categories','edit post categories','delete post categories','view all post categories') --}}
                @if($user->hasPermissionTo('add posts') || $user->hasPermissionTo('view all posts') || $user->hasPermissionTo('edit posts')|| $user->hasPermissionTo('delete posts')|| $user->hasPermissionTo('add post categories')|| $user->hasPermissionTo('edit post categories')|| $user->hasPermissionTo('delete post categories')|| $user->hasPermissionTo('view all post categories'))
                <li class="treeview {{ (Request::is('admin/posts*') || 
                                        Request::is('admin/categories*')  || 
                                        Request::is('admin/subcategories*') ) ? 'active': '' }}">
                    <a href="#"><i class="fa fa-circle-o"></i> Posts
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>

                    <ul class="treeview-menu">
                        {{-- @can('edit posts','add posts','view all posts','delete posts') --}}
                        @if($user->hasPermissionTo('edit posts')||$user->hasPermissionTo('add posts')||$user->hasPermissionTo('view all posts')||$user->hasPermissionTo('delete posts'))                        
                        <li class="{{ (\Request::route()->getName() == 'posts.index') ? 'active' : '' }}"><a href="{{route('posts.index')}}"><i class="fa fa-circle-o"></i> All Posts</a></li>
                        @endif
                        {{-- @endcan --}}
                        @can('add posts')
                        <li class="{{ (\Request::route()->getName() == 'posts.create') ? 'active': '' }}"><a href="{{route('posts.create')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
                        @endcan


                        {{-- @can('add post categories','edit post categories','delete post categories','view all post categories') --}}
                        @if($user->hasPermissionTo('add post categories') || $user->hasPermissionTo('edit post categories') || $user->hasPermissionTo('delete post categories') || $user->hasPermissionTo('view all post categories'))
                        <li class="{{ (\Request::route()->getName() == 'categories.index' || 
                                        Request::is('admin/categories*')) ? 'active' : '' }}">
                        <a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> Categories</a>
                        </li>
                        @endif
                        {{-- @endcan --}}
                        {{-- <li class="{{ (\Request::route()->getName() == 'subcategories.index' ||
                                        Request::is('admin/subcategories*')) ? 'active' : '' }}">
                        <a href="{{route('subcategories.index')}}"><i class="fa fa-circle-o"></i> Sub Categories</a>
                        </li> --}}
                    </ul>
                </li>
                @endif
                {{-- @endcan --}}

    
                {{-- @can('add pages','edit pages','delete pages','view all pages') --}}
                @if($user->hasPermissionTo('add pages') || $user->hasPermissionTo('edit pages')|| $user->hasPermissionTo('delete pages') || $user->hasPermissionTo('view all pages'))
                <li class="treeview {{ Request::is('admin/pages*') ? 'active': '' }}">
                    <a href="#"><i class="fa fa-circle-o"></i> Pages
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        {{-- @can('add pages|edit pages|delete pages|view all pages') --}}
                        @if($user->hasPermissionTo('add pages') || $user->hasPermissionTo('edit pages') || $user->hasPermissionTo('delete pages') || $user->hasPermissionTo('view all pages'))
                        <li class="{{ Request::is('admin/pages') ? 'active': '' }}"><a href="{{ route('pages.index') }}"><i class="fa fa-circle-o"></i> All Pages</a></li>
                        @endif
                        {{-- @endcan --}}
                        @can('add pages')
                        <li class="{{ Request::is('admin/pages/create') ? 'active': '' }}"><a href="{{ route('pages.create') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
                        @endcan
                    </ul>
                </li>
                @endif
                {{-- @endcan --}}
                {{-- <li class="treeview  {{ Request::is('admin/news*') ? 'active': '' }}">
                    <a href="#"><i class="fa fa-circle-o"></i> News
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>

                    <ul class="treeview-menu">
                        <li class="{{ (\Request::route()->getName() == 'news.index') ? 'active' : '' }}">
                            <a href="{{route('news.index')}}"><i class="fa fa-circle-o"></i> All News</a>
                        </li>
                        <li class="{{ (\Request::route()->getName() == 'news.create') ? 'active' : '' }}">
                            <a href="{{route('news.create')}}"><i class="fa fa-circle-o"></i> Add New</a>
                        </li>
                        <li class="{{ (\Request::route()->getName() == 'news_category.index' || Request::is('admin/news_category*')) ? 'active' : '' }}"><a href="{{route('news_category.index')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
                    </ul>
                </li> --}}


                {{-- @can('add sliders','edit sliders','delete sliders','view all sliders') --}}
                @if($user->hasPermissionTo('add sliders') || $user->hasPermissionTo('edit sliders')|| $user->hasPermissionTo('delete sliders') || $user->hasPermissionTo('view all sliders'))
                <li class="treeview  {{ Request::is('admin/sliders*') ? 'active': '' }}">
                    <a href="#"><i class="fa fa-circle-o"></i> Sliders
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>

                    <ul class="treeview-menu">
                        <li class="{{ (\Request::route()->getName() == 'sliders.index') ? 'active' : '' }}"><a href="{{route('sliders.index')}} "><i class="fa fa-circle-o"></i> All Sliders</a></li>
                        {{-- <li  class="{{ (\Request::route()->getName() == 'sliders.create') ? 'active' : '' }}"><a href="{{route('sliders.create')}}"><i class="fa fa-circle-o"></i> Add New</a></li> --}}
                    </ul>
                </li>
                @endif
                {{-- @endcan --}}



                {{-- @can('add photo albums','edit photo albums','delete photo albums','view all photo albums','add videos','edit videos','delete videos','view all videos') --}}
                @if($user->hasPermissionTo('add photo albums') || $user->hasPermissionTo('edit photo albums')|| $user->hasPermissionTo('delete photo albums') || $user->hasPermissionTo('view all photo albums') || $user->hasPermissionTo('add videos') || $user->hasPermissionTo('edit videos') || $user->hasPermissionTo('delete videos') || $user->hasPermissionTo('view all videos'))                
                <li class="treeview {{ (Request::is('admin/albums*') || Request::is('admin/videos*')) ? 'active': '' }}">
                    <a href="#"><i class="fa fa-circle-o"></i> Gallery
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        @can('add photo albums','edit photo albums','delete photo albums','view all photo albums')
                        <li class="{{ (\Request::route()->getName() == 'albums.index') ? 'active' : '' }}"><a href="{{route('albums.index')}} "><i class="fa fa-circle-o"></i> All Photo Albums</a></li>
                        @endcan
                        @can('add videos','edit videos','delete videos','view all videos')
                        <li class="{{ (\Request::route()->getName() == 'videos.index') ? 'active' : '' }}"><a href="{{route('videos.index')}} "><i class="fa fa-circle-o"></i> All Videos</a></li>
                        @endcan
                        {{-- <li  class="{{ (\Request::route()->getName() == 'sliders.create') ? 'active' : '' }}"><a href="{{route('sliders.create')}}"><i class="fa fa-circle-o"></i> Add New</a></li> --}}
                    </ul>
                </li>
                @endif
                {{-- @endcan --}}



                @if($user->hasPermissionTo('add social links') || $user->hasPermissionTo('edit social links') || $user->hasPermissionTo('delete social links') || $user->hasPermissionTo('view all social links') || $user->hasPermissionTo('edit logos') || $user->hasPermissionTo('edit header footers'))
                <li class="treeview {{ (Request::is('admin/logos*') || 
                                        Request::is('admin/headerfooters*') || 
                                        Request::is('admin/social_medias*') )? 'active': '' }}">
                    <a href="#"><i class="fa fa-circle-o"></i> Theme Options
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>

                    <ul class="treeview-menu">
                        @can('edit logos')
                        <li class="{{ (\Request::route()->getName() == 'logos.index') ? 'active' : '' }}">
                            <a href="{{ route('logos.index') }}"><i class="fa fa-circle-o"></i> Logos</a>
                        </li>
                        @endcan
                        @can('edit header footers')                        
                        <li class="{{ (\Request::route()->getName() == 'headerfooters.index') ? 'active' : '' }}">
                            <a href="{{ route('headerfooters.index') }}"><i class="fa fa-circle-o"></i> Header & Footer</a>
                        </li>
                        @endcan


                        @if($user->hasPermissionTo('add social links') || $user->hasPermissionTo('edit social links') || $user->hasPermissionTo('delete social links') || $user->hasPermissionTo('view all social links'))
                        {{-- @can('add social links','edit social links','delete social links','view all social links') --}}
                        <li class="{{ (\Request::route()->getName() == 'social_medias.index') ? 'active' : '' }}">
                            <a href="{{ route('social_medias.index') }}"><i class="fa fa-circle-o"></i> Social Media</a>
                        </li>
                        @endif
                        {{-- @endcan --}}
                    </ul>
                </li>
                @endif


                @if($user->hasPermissionTo('add widgets') || $user->hasPermissionTo('edit widgets') || $user->hasPermissionTo('delete widgets') || $user->hasPermissionTo('view all widgets') || $user->hasPermissionTo('add widget data') || $user->hasPermissionTo('edit widget data') || $user->hasPermissionTo('delete widget data') || $user->hasPermissionTo('view all widget data') || $user->hasPermissionTo('edit general site settings') || $user->hasPermissionTo('add menus') || $user->hasPermissionTo('edit menus') || $user->hasPermissionTo('delete menus') || $user->hasPermissionTo('view all menus'))
                <li class="treeview {{ (Request::is('admin/general-settings*') || Request::is('admin/widgets*')  || Request::is('admin/widget-data*') || Request::is('admin/menus*')  )? 'active': '' }}">
                    <a href=""><i class="fa fa-circle-o"></i> Settings
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        @can('edit general site settings')
                        <li class="{{ (\Request::route()->getName() == 'general-settings.index') ? 'active' : '' }}">
                            <a href="{{ route('general-settings.index') }}"><i class="fa fa-circle-o"></i> General</a>
                        </li>
                        @endcan

                        <li class="treeview {{ Request::is('admin/menus*') ? 'active' : '' }}">
                            <a href="#"><i class="fa fa-circle-o"></i> Menus<i class="fa fa-angle-left pull-right"></i></a>

                            @if($user->hasPermissionTo('add menus') || $user->hasPermissionTo('edit menus') || $user->hasPermissionTo('delete menus') || $user->hasPermissionTo('view all menus'))
                            <ul class="treeview-menu">

                                <li class="{{ (\Request::route()->getName() == 'menus.index') ? 'active' : '' }}">
                                    <a href="{{route('menus.index')}}"><i class="fa fa-circle-o"></i> All Menus</a>
                                </li>
                                @can('add menus')
                                <li class="{{ (\Request::route()->getName() == 'menus.create') ? 'active' : '' }}">
                                    <a href="{{route('menus.create')}}"><i class="fa fa-circle-o"></i> Create</a>
                                </li>
                                @endcan
                            </ul>
                            @endif
                        </li>


                        @if($user->hasPermissionTo('add widgets') || $user->hasPermissionTo('edit widgets') || $user->hasPermissionTo('delete widgets') || $user->hasPermissionTo('view all widgets') || $user->hasPermissionTo('add widget data') || $user->hasPermissionTo('edit widget data') || $user->hasPermissionTo('delete widget data') || $user->hasPermissionTo('view all widget data'))
                        <li class="treeview {{ (Request::is('admin/widgets*') || Request::is('admin/widget-data*') ) ? 'active' : '' }}">
                            <a href="#"><i class="fa fa-circle-o"></i> Widgets<i class="fa fa-angle-left pull-right"></i></a>

                            <ul class="treeview-menu">
                                @if($user->hasPermissionTo('add widget data') || $user->hasPermissionTo('edit widget data') || $user->hasPermissionTo('delete widget data') || $user->hasPermissionTo('view all widget data'))
                                <li class="{{ (\Request::route()->getName() == 'widget-data.index') ? 'active' : '' }}">
                                    <a href="{{route('widget-data.index')}}"><i class="fa fa-circle-o"></i> Widget Data</a>
                                </li>
                                @endif
                                @if($user->hasPermissionTo('add widgets') || $user->hasPermissionTo('edit widgets') || $user->hasPermissionTo('delete widgets') || $user->hasPermissionTo('view all widgets'))
                                <li class="{{ (\Request::route()->getName() == 'widgets.index') ? 'active' : '' }}">
                                    <a href="{{route('widgets.index')}}"><i class="fa fa-circle-o"></i> All Widgets</a>
                                </li>
                                @endif
                                {{-- <li class="">
                                    <a href="#"><i class="fa fa-circle-o"></i> Menu Locations</a>
                                </li> --}}
                            </ul>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                
            </ul>
        </li>
        @endif


        @if($user->hasPermissionTo('add users') || $user->hasPermissionTo('edit users') || $user->hasPermissionTo('delete users') || $user->hasPermissionTo('view all users') || $user->hasPermissionTo('give permissions to user'))
        <li class="treeview  {{ (Request::is('admin/settings*') ) ||  (Request::is('admin/users*') )||  (Request::is('admin/user-access*') )   ? 'active': ''  }} ">
            <a href="#">
                <i class="fa  fa-gears "></i>
                <span>User Settings</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Commission Setting</a></li> -->
                <li  class="{{ (\Request::route()->getName() == 'users.index') ? 'active' : ''   }} ">
                    <a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> All Users </a>
                </li>
                <li  class="{{  (Request::is('admin/users/create') )   ? 'active': ''  }} ">
                    <a href="{{route('users.create')}}"><i class="fa fa-circle-o"></i> Add User </a>
                </li>
                
            </ul>
        </li>
        @endif

    </ul>
</section>






