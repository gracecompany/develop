<div class="main-navigation navbar-collapse collapse">
    {{--
    <div class="user-panel">
        <div class="pull-left image"> <img src="{!! gravatarUrl(Sentinel::getUser()->email) !!}" class="img-circle" alt="User Image" /> </div>
        <div class="pull-left info">
            <p>{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    --}}
    <!-- start: MAIN MENU TOGGLER BUTTON -->
    <div class="navigation-toggler">
        <i class="clip-chevron-left"></i>
        <i class="clip-chevron-right"></i>
    </div>
    <!-- end: MAIN MENU TOGGLER BUTTON -->
    <!-- start: MAIN NAVIGATION MENU -->
    <ul class="main-navigation-menu">
        <li class="">
            <a target="_blank" href="{{ url(getLang() . '/') }}"><i class="clip-home-2"></i>
            <span class="title"> Live Site </span>
            </a>
        </li>
        <li class="{{ setActive('admin') }}">
            <a href="{{ url(getLang() . '/admin') }}"><i class="clip-home-3"></i>
            <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        <li class="{{ setActive(['admin/group*', 'admin/article*', 'admin/page*', 'admin/photo-gallery*', 'admin/video*', 'admin/slider*', 'admin/project*', 'admin/faq*']) }}">
            <a class="{{ setActive('admin') }}" href="javascript:void(0)"><i class="clip-home-3"></i> <span class="title"> Website </span><span class="selected"></span> </a>
            <ul class="sub-menu">
                <li class="{{ setActive('admin/article*') }}">
                    <a href="#"> <i class="fa fa-book"></i> <span>Articles</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/article') }}"><i class="fa fa-archive"></i> All Articles</a>
                        </li>
                        <li>
                            <a href="{{ url(getLang() . '/admin/article/create') }}"><i class="fa fa-plus-square"></i> Add Article</a>
                        </li>
                    </ul>
                </li>
                  <li class="{{ setActive('admin/category*') }}">
                    <a href="#"> <i class="fa fa-book"></i> <span>Categories</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/category') }}"><i class="fa fa-archive"></i> All Categories</a>
                        </li>
                        <li>
                            <a href="{{ url(getLang() . '/admin/category/create') }}"><i class="fa fa-plus-square"></i> Add Category</a>
                        </li>
                    </ul>
                </li>
                <li class=" {{ setActive('admin/page*') }}">
                    <a href="#"> <i class="fa fa-bookmark"></i> <span>Pages</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/page') }}"><i class="fa fa-folder"></i> All Pages</a> </li>
                        <li><a href="{{ url(getLang() . '/admin/page/create') }}"><i class="fa fa-plus-square"></i> Add Page</a> </li>
                    </ul>
                </li>
                <li class="{{ setActive(['admin/photo-gallery*', 'admin/video*']) }}">
                    <a href="#"> <i class="fa fa-picture-o"></i> <span>Galleries</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url(getLang() . '/admin/photo-gallery') }}"><i class="fa fa-camera"></i> Photo Galleries</a>
                        </li>
                        <li>
                            <a href="{{ url(getLang() . '/admin/video') }}"><i class="fa fa-play-circle-o"></i> Video Galleries</a>
                        </li>
                    </ul>
                </li>
        @if(Sentinel::getUser()->inRole(['SuperAdmin'])):
                            <li class="{{ setActive('admin/slider*') }}">
                    <a href="#"> <i class="fa fa-tint"></i> <span>Plugins</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/slider') }}"><i class="fa fa-toggle-up"></i> Sliders</a>
                        </li>
                    </ul>
                </li>
        @endif
                {{--
                <li class="{{ setActive('admin/project*') }}">
                    <a href="#"> <i class="fa fa-gears"></i> <span>Projects</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/project') }}"><i class="fa fa-gear"></i> All Projects</a>
                        </li>
                        <li>
                            <a href="{{ url(getLang() . '/admin/project/create') }}"><i class="fa fa-plus-square"></i> Add Project</a>
                        </li>
                    </ul>
                </li>
                --}}
                <li class="{{ setActive('admin/faq*') }}">
                    <a href="#"> <i class="fa fa-question"></i> <span>Faqs</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/faq') }}"><i class="fa fa-question-circle"></i> All Faq</a></li>
                        <li>
                            <a href="{{ url(getLang() . '/admin/faq/create') }}"><i class="fa fa-plus-square"></i> Add Faq</a>
                        </li>
                    </ul>
                </li>
        @if(Sentinel::getUser()->inRole(['SuperAdmin'])):
                            <li class=" {{ setActive('admin/news*') }}">
                    <a href="#"> <i class="fa fa-th"></i> <span>News</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/news') }}"><i class="fa fa-calendar"></i> All News</a> </li>
                        <li><a href="{{ url(getLang() . '/admin/news/create') }}"><i class="fa fa-plus-square"></i> Add News</a> </li>
                    </ul>
                </li>
        @endif
                <li class="{{ setActive('admin/logout*') }}">
                    <a href="{{ url('/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
                </li>
            </ul>
        </li>
        <li class=" {{ setActive(['admin/user*', 'admin/group*']) }}">
            <a class="{{ setActive(['admin/user*', 'admin/group*']) }}" href="javascript:void(0)"><i class="clip-home-3"></i> <span class="title"> Users </span><span class="selected"></span> </a>
            <ul class="sub-menu">
                <li><a href="{{ url(getLang() . '/admin/user') }}"><i class="fa fa-user"></i> All Users</a> </li>

                    @if(Sentinel::getUser()->inRole(['Admin', 'SuperAdmin'])):
                            <li><a href="{{ url(getLang() . '/admin/role') }}"><i class="fa fa-group"></i> Add Role</a> </li>
                    @endif

            </ul>
        </li>
        <li class="{{ setActive(['admin/ecom','admin/products*', 'admin/product/*',  'admin/sections*', 'admin/categories*' ]) }}">
            <a class="" href="javascript:void(0)"><i class="fa fa-money" aria-hidden="true"></i> <span class="title"> eCommerce </span><span class="selected"></span> </a>
            <ul class="sub-menu">
                {{-- <li class="{{ setActive('admin/ecom') }}"><a href="{!! url(getLang() . '/admin/ecom') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li> --}}
                <li class="{{ setActive('admin/products*', 'admin/product/*') }}">
                    <a href="#"><i class="fa fa-sitemap" aria-hidden="true"></i> <span> &nbsp; Products</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/products') }}"><i class="fa fa-th-list" aria-hidden="true"></i> List Products</a></li>
                        <li> <a href="{{ url(getLang() . '/admin/product/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</a> </li>
                    </ul>
                </li>
                <li class="{{ setActive('admin/sections*') }}">
                    <a href="#"> <i class="fa fa-pie-chart" aria-hidden="true"></i> &nbsp;Sections</span>
                        <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li> <a href="{{ route('admin.sections') }}"><i class="fa fa-th-list" aria-hidden="true"></i>&nbsp; Sections</a> </li>
                        <li><a href="{{ route('admin.sections.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; New Section</a></li>

                    </ul>
                </li>
                <li class="{{ setActive('admin/categories*') }}">
                    <a href="#"><i class="fa fa-tags" aria-hidden="true"></i> <span> &nbsp;Categories</span>
                        <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('admin.categories') }}"><i class="fa fa-th-list" aria-hidden="true"></i>&nbsp; Categories</a> </li>
                        <li><a href="{{ route('admin.categories.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; New Category</a></li>

                    </ul>
                </li>
            </ul>
        </li>




 <li class="{{ setActive(['admin/dealers','admin/locations*' ]) }}">
            <a class="" href="javascript:void(0)"><i class="fa fa-map" aria-hidden="true"></i> <span class="title"> Dealers Management </span><span class="selected"></span> </a>
            <ul class="sub-menu">
                {{-- <li class="{{ setActive('admin/ecom') }}"><a href="{!! url(getLang() . '/admin/ecom') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li> --}}
                <li id="dealers" class="{{ setActive('admin/dealers*') }}">
                    <a href="#"><i class="fa fa-sitemap" aria-hidden="true"></i> <span> &nbsp; Dealers</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/dealers') }}"><i class="fa fa-th-list" aria-hidden="true"></i> List Dealers</a></li>
                        <li> <a href="{{ url(getLang() . '/admin/dealers/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Dealer</a> </li>
                    </ul>
                </li>

                 <li id="locations" class="{{ setActive('admin/locations*') }}">
                    <a href="#"><i class="fa fa-sitemap" aria-hidden="true"></i> <span> &nbsp; Locations</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/locations') }}"><i class="fa fa-th-list" aria-hidden="true"></i> Locations</a></li>
                        <li> <a href="{{ url(getLang() . '/admin/locations/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Location</a> </li>
                    </ul>
                </li>

            </ul>
        </li>



        <li class="{{ setActive(['admin/logs*', 'admin/form-post', 'admin/settings*', 'admin/menu*']) }}">
            <a class="{{ setActive('admin') }}" href="javascript:void(0)"><i class="fa fa-cogs" aria-hidden="true"></i> <span class="title"> Developer Area </span><span class="selected"></span> </a>
            <ul class="sub-menu">
                <li class="{{ setActive('admin/menu*') }}"><a href="{{ url(getLang() . '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Menu</span> </a></li>
                <li class="{{ setActive(['admin/user*', 'admin/group*']) }}">
                    <a href="#"> <i class="fa fa-user"></i> <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url(getLang() . '/admin/user') }}"><i class="fa fa-user"></i> All Users</a> </li>
                        <li><a href="{{ url(getLang() . '/admin/role') }}"><i class="fa fa-group"></i> Add Role</a> </li>
                    </ul>
                </li>
                <li class="{{ setActive(['admin/logs*', 'admin/form-post']) }}">
                    <a href="#"> <i class="fa fa-thumb-tack"></i> <span>Records</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="sub-menu">
                        <li><a target="_blank" href="{{ url(getLang() . '/admin/logs') }}"><i class="fa fa-save"></i> Log</a></li>
                        <li>
                            <a href="{{ url(getLang() . '/admin/form-post') }}"><i class="fa fa-envelope"></i> Form Post</a>
                        </li>
                    </ul>
                </li>

                <li class="{{ setActive('admin/payment*') }}">
                    <a href="{{ url(getLang() . '/admin/payment') }}"> <i class="fa fa-gear"></i> <span>Gateways</span> </a>
                </li>

                <li class="{{ setActive('admin/settings*') }}">
                    <a href="{{ url(getLang() . '/admin/settings') }}"> <i class="fa fa-gear"></i> <span>Settings</span> </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- end: MAIN NAVIGATION MENU -->
</div>
<!-- end: SIDEBAR
