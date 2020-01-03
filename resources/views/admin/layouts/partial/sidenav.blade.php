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

        @if(Gate::check('add posts') || 
            Gate::check('view all posts') || 
            Gate::check('edit posts')|| 
            Gate::check('delete posts')|| 
            Gate::check('add post categories')|| 
            Gate::check('edit post categories')|| 
            Gate::check('delete post categories')|| 
            Gate::check('view all post categories') || 
            Gate::check('add pages') || 
            Gate::check('edit pages')|| Gate::check('delete pages') || 
            Gate::check('view all pages') || 
            Gate::check('add sliders') || 
            Gate::check('edit sliders')|| Gate::check('delete sliders') || 
            Gate::check('view all sliders') || 
            Gate::check('add photo albums') || 
            Gate::check('edit photo albums')|| Gate::check('delete photo albums') || 
            Gate::check('view all photo albums') || 
            Gate::check('add videos') || 
            Gate::check('edit videos') || 
            Gate::check('delete videos') || 
            Gate::check('view all videos') || 
            Gate::check('add social links') || 
            Gate::check('edit social links') || 
            Gate::check('delete social links') || 
            Gate::check('view all social links') || 
            Gate::check('edit logos') || 
            Gate::check('edit header footers') || 
            Gate::check('add members') || 
            Gate::check('edit members') || 
            Gate::check('delete members') || 
            Gate::check('view all members') || 
            Gate::check('add widgets') || 
            Gate::check('edit widgets') || 
            Gate::check('delete widgets') || 
            Gate::check('view all widgets') || 
            Gate::check('add widget data') || 
            Gate::check('edit widget data') || 
            Gate::check('delete widget data') || 
            Gate::check('view all widget data') || 
            Gate::check('edit general site settings') || 
            Gate::check('add menus') || 
            Gate::check('edit menus') || 
            Gate::check('delete menus') || 
            Gate::check('view all menus'))
        <li class="treeview {{  (Request::is('admin/pages*') ||
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
                @if(Gate::check('add posts') || Gate::check('view all posts') || Gate::check('edit posts')|| Gate::check('delete posts')|| Gate::check('add post categories')|| Gate::check('edit post categories')|| Gate::check('delete post categories')|| Gate::check('view all post categories'))
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
                        @if(Gate::check('edit posts')||Gate::check('add posts')||Gate::check('view all posts')||Gate::check('delete posts'))                        
                        <li class="{{ (\Request::route()->getName() == 'posts.index') ? 'active' : '' }}"><a href="{{route('posts.index')}}"><i class="fa fa-circle-o"></i> All Posts</a></li>
                        @endif
                        {{-- @endcan --}}
                        @can('add posts')
                        <li class="{{ (\Request::route()->getName() == 'posts.create') ? 'active': '' }}"><a href="{{route('posts.create')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
                        @endcan


                        {{-- @can('add post categories','edit post categories','delete post categories','view all post categories') --}}
                        @if(Gate::check('add post categories') || Gate::check('edit post categories') || Gate::check('delete post categories') || Gate::check('view all post categories'))
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
                @if(Gate::check('add pages') || Gate::check('edit pages')|| Gate::check('delete pages') || Gate::check('view all pages'))
                <li class="treeview {{ Request::is('admin/pages*') ? 'active': '' }}">
                    <a href="#"><i class="fa fa-circle-o"></i> Pages
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        {{-- @can('add pages|edit pages|delete pages|view all pages') --}}
                        @if(Gate::check('add pages') || Gate::check('edit pages') || Gate::check('delete pages') || Gate::check('view all pages'))
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
                @if(Gate::check('add sliders') || Gate::check('edit sliders')|| Gate::check('delete sliders') || Gate::check('view all sliders'))
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
                @if(Gate::check('add photo albums') || Gate::check('edit photo albums')|| Gate::check('delete photo albums') || Gate::check('view all photo albums') || Gate::check('add videos') || Gate::check('edit videos') || Gate::check('delete videos') || Gate::check('view all videos'))                
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



                @if(Gate::check('add social links') || Gate::check('edit social links') || Gate::check('delete social links') || Gate::check('view all social links') || Gate::check('edit logos') || Gate::check('edit header footers'))
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


                        @if(Gate::check('add social links') || Gate::check('edit social links') || Gate::check('delete social links') || Gate::check('view all social links'))
                        {{-- @can('add social links','edit social links','delete social links','view all social links') --}}
                        <li class="{{ (\Request::route()->getName() == 'social_medias.index') ? 'active' : '' }}">
                            <a href="{{ route('social_medias.index') }}"><i class="fa fa-circle-o"></i> Social Media</a>
                        </li>
                        @endif
                        {{-- @endcan --}}
                    </ul>
                </li>
                @endif


                @if(Gate::check('add members') || Gate::check('edit members') || Gate::check('delete members') || Gate::check('view all members'))
                {{-- @can('add members','edit members','delete members','view all members') --}}
                <li class="treeview {{ (Request::is('admin/members*') || 
                                        Request::is('admin/member-categories*') ) ? 'active': '' }}">
                    <a href="#"><i class="fa fa-circle-o"></i> Members
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>

                    <ul class="treeview-menu">
                        @can('view all members')
                        <li class="{{ (\Request::route()->getName() == 'members.index') ? 'active' : '' }}"><a href="{{route('members.index')}}"><i class="fa fa-circle-o"></i> All Members</a></li>
                        @endcan
                        @can('add members')
                        <li class="{{ (\Request::route()->getName() == 'members.create') ? 'active': '' }}"><a href="{{route('members.create')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
                        @endcan
                        <li class="{{ (\Request::route()->getName() == 'member-categories.index' || 
                                        Request::is('admin/member-categories*')) ? 'active' : '' }}">
                        <a href="{{route('member-categories.index')}}"><i class="fa fa-circle-o"></i> Categories</a>
                        </li>
                        {{-- <li class="{{ (\Request::route()->getName() == 'subcategories.index' ||
                                        Request::is('admin/subcategories*')) ? 'active' : '' }}">
                        <a href="{{route('subcategories.index')}}"><i class="fa fa-circle-o"></i> Sub Categories</a>
                        </li> --}}
                    </ul>
                </li>
                @endif
                {{-- @endcan --}}

                @if(Gate::check('add widgets') || Gate::check('edit widgets') || Gate::check('delete widgets') || Gate::check('view all widgets') || Gate::check('add widget data') || Gate::check('edit widget data') || Gate::check('delete widget data') || Gate::check('view all widget data') || Gate::check('edit general site settings') || Gate::check('add menus') || Gate::check('edit menus') || Gate::check('delete menus') || Gate::check('view all menus'))
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

                            @if(Gate::check('add menus') || Gate::check('edit menus') || Gate::check('delete menus') || Gate::check('view all menus'))
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


                        @if(Gate::check('add widgets') || Gate::check('edit widgets') || Gate::check('delete widgets') || Gate::check('view all widgets') || Gate::check('add widget data') || Gate::check('edit widget data') || Gate::check('delete widget data') || Gate::check('view all widget data'))
                        <li class="treeview {{ (Request::is('admin/widgets*') || Request::is('admin/widget-data*') ) ? 'active' : '' }}">
                            <a href="#"><i class="fa fa-circle-o"></i> Widgets<i class="fa fa-angle-left pull-right"></i></a>

                            <ul class="treeview-menu">
                                @if(Gate::check('add widget data') || Gate::check('edit widget data') || Gate::check('delete widget data') || Gate::check('view all widget data'))
                                <li class="{{ (\Request::route()->getName() == 'widget-data.index') ? 'active' : '' }}">
                                    <a href="{{route('widget-data.index')}}"><i class="fa fa-circle-o"></i> Widget Data</a>
                                </li>
                                @endif
                                @if(Gate::check('add widgets') || Gate::check('edit widgets') || Gate::check('delete widgets') || Gate::check('view all widgets'))
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

        <li class="header">MAIN APPLICATION</li>
        <li class="{{ (\Request::route()->getName() == 'admin.dashboard') ? 'active' : '' }}">
            <a href="{{url('/admin/dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>

        <li class="treeview  {{ (Request::is('admin/notes*')  )   ? 'active': ''  }} ">
            <a href="#">
                <i class="fa  fa-book"></i>
                <span>Notes</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Commission Setting</a></li> -->
                <li  class="{{ (\Request::route()->getName() == 'notes.create') ? 'active' : ''   }} ">
                    <a href="{{route('notes.create')}}"><i class="fa fa-circle-o"></i> Create Note </a>
                </li>
                <li  class="{{ (\Request::route()->getName() == 'notes.index') ? 'active' : ''   }} ">
                    <a href="{{route('notes.index')}}"><i class="fa fa-circle-o"></i> Incoming </a>
                </li>
                <li  class="{{  (Request::is('admin/notes/outgoing') )   ? 'active': ''  }} ">
                    <a href="{{route('notes.outgoing')}}"><i class="fa fa-circle-o"></i> Outgoing </a>
                </li>
                
            </ul>
        </li>



        @if(Gate::check('add draft categories') || Gate::check('edit draft categories') || Gate::check('delete draft categories') || Gate::check('view all draft categories') || Gate::check('add drafts') || Gate::check('edit drafts') || Gate::check('delete drafts') || Gate::check('view all drafts') || Gate::check('review drafts') || Gate::check('approve drafts'))

        <li class="treeview {{ ((Request::is('admin/drafts*'))||(Request::is('admin/draft_type*')))  ? 'active': ''  }}">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Draft Management</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                @can('add drafts')
                <li class=" {{ (Request::is('admin/drafts/create')) ? 'active': ''  }}"><a href="{{ route('drafts.create') }}"><i class="fa fa-pencil-square-o">                    
                    </i> Create a Draft</a>
                </li>
                @endcan                
                <li  class="{{ (\Request::route()->getName() == 'drafts.index') ? 'active' : '' }}" >
                    <a href="{{ route('drafts.index') }}">
                        <i class="fa fa-list-ol"></i>
                        <span> Draft List</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <li  class="{{ (\Request::route()->getName() == 'draft_type.index') ? 'active' : '' }}" >
                    <a href="{{ route('draft_type.index') }}">
                        <i class="fa fa-list-ol"></i>
                        <span> Draft Categories</span>
                    </a>
                </li>
            </ul>
        </li>
        @endif



        {{-- @if(Gate::check('add food menu category') || Gate::check('edit food menu category') || Gate::check('delete food menu category') || Gate::check('view all food menu category') || Gate::check('add food menu') || Gate::check('edit food menu') || Gate::check('delete food menu') || Gate::check('view all food menu') || Gate::check('view all meals') || Gate::check('view own meals') || Gate::check('meal entry') || Gate::check('confirm payment') || Gate::check('view meal reports')) --}}
        <li class="treeview {{(Request::is('admin/food*') || Request::is('admin/meals*')  || Request::is('admin/mess*') || Request::is('admin/user-transaction*')|| Request::is('admin/report/meals/*'))  ? 'active': ''  }}">
            <a href="#">
                <i class="fa fa-bed"></i>
                <span>Mess Management</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li  class="{{ ((\Request::route()->getName() == 'meals.index') ||  Request::is('admin/meals*')) ? 'active' : '' }}" >
                    <a href="{{ route('meals.index') }}">
                        <i class="fa fa-circle-o"></i>
                        <span> User wise Meals</span>
                    </a>
                </li>


                @if(Gate::check('add food menu category') || Gate::check('edit food menu category') || Gate::check('delete food menu category') || Gate::check('view all food menu category') || Gate::check('add food menu') || Gate::check('edit food menu') || Gate::check('delete food menu') || Gate::check('view all food menu'))
                <li  class="{{ (\Request::route()->getName() == 'meals.meal_budget') ? 'active' : '' }}" >
                    <a href="{{ route('meals.meal_budget') }}">
                        <i class="fa fa-circle-o"></i>
                        <span> Kitchen Meal Calendar</span>
                    </a>
                </li>

                <li  class="{{ (\Request::route()->getName() == 'mess.meal_calendar') ? 'active' : '' }}" >
                    <a href="{{ route('mess.meal_calendar') }}">
                        <i class="fa fa-circle-o"></i>
                        <span> User Meal Calendar</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <li  class="{{ (\Request::route()->getName() == 'food-menu.index') ? 'active' : '' }}" >
                    <a href="{{ route('food-menu.index') }}">
                        <i class="fa fa-circle-o"></i>
                        <span> Food Menu</span>
                    </a>
                </li>
                <li  class="{{ (\Request::route()->getName() == 'food-category.index') ? 'active' : '' }}" >
                    <a href="{{ route('food-category.index') }}">
                        <i class="fa fa-circle-o"></i>
                        <span> Menu Category</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                 

                @endif
                <li  class="{{ (\Request::route()->getName() == 'user-transaction.index') ? 'active' : '' }}" >
                    <a href="{{ route('user-transaction.index') }}">
                        <i class="fa fa-circle-o"></i>
                        <span> Payments</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>

                <li class="treeview {{ (Request::is('admin/report/meals/*') ) ? 'active': '' }}">
                    <a href="#"><i class="fa fa-circle-o"></i> Reports
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                    @if(Auth::user()->hasRole('Mess Member'))

                        <li class="{{ (\Request::route()->getName() == 'meals.user_meal_report') ? 'active': '' }}"><a href="{{route('meals.user_meal_report')}}"><i class="fa fa-circle-o"></i> Meal Ledger</a></li>
                    @else
                        <li class="{{ (\Request::route()->getName() == 'meals.meal_report') ? 'active' : '' }}"><a href="{{route('meals.meal_report')}}"><i class="fa fa-circle-o"></i> Member Ledger</a></li>
                        <li class="{{ (\Request::route()->getName() == 'meals.user_meal_report') ? 'active': '' }}"><a href="{{route('meals.user_meal_report')}}"><i class="fa fa-circle-o"></i> Meal Ledger</a></li>
                        {{-- <li class="{{ (\Request::route()->getName() == 'subcategories.index' ||
                                        Request::is('admin/subcategories*')) ? 'active' : '' }}">
                        <a href="{{route('subcategories.index')}}"><i class="fa fa-circle-o"></i> Sub Categories</a>
                        </li> --}}
                    @endif
                    </ul>
                </li>
            </ul>
        </li>
        {{-- @endif --}}

        <!-- <li class="treeview">
            <a href="#">
                <i class="fa  fa-line-chart"></i>
                <span>Reports</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Customer Statements</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Sales Reports </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dispatch COD </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dispatch Reports </a></li>
            </ul>
        </li> -->

        <li class="treeview  {{ (Request::is('admin/settings*') ) ||  (Request::is('admin/prescription*') )   ? 'active': ''  }} ">
            <a href="#">
                <i class="fa  fa-stethoscope"></i>
                <span>Prescription</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li  class="{{ (\Request::route()->getName() == 'prescription.mdcn_corner') ? 'active' : ''   }} ">
                    <a href="{{route('prescription.mdcn_corner')}}"><i class="fa fa-circle-o"></i> Medicine Delivery </a>
                </li>

                <li class="{{ (\Request::route()->getName() == 'prescription.prescription') ? 'active' : ''   }} "><a href="{{route('prescription.prescription')}}"><i class="fa fa-circle-o"></i>Prescription</a></li>

                {{-- <li class="{{ (\Request::route()->getName() == 'prescription.add_patient') ? 'active' : ''   }} "><a href="{{route('prescription.add_patient')}}"><i class="fa fa-circle-o"></i> Add Patient</a></li> --}}
            </ul>
        </li>


        @if(Gate::check('add users') || Gate::check('edit users') || Gate::check('delete users') || Gate::check('view all users') || Gate::check('give permissions to user'))
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






