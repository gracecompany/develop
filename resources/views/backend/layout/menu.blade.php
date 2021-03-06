<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{!! gravatarUrl(Sentinel::getUser()->email) !!}" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."/>
				<span class="input-group-btn">
				<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="{{ setActive('admin') }}"><a href="{{ url(getLang() . '/admin') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a></li>
			<li class="treeview">
				<a href="#"> <i class="fa fa-share"></i> <span>Website</span> <i class="fa fa-angle-left pull-right"></i> </a>
				<ul class="treeview-menu menu-open" style="display: block;">
					{{--
					<li><a href="#"><i class="fa fa-circle-o"></i> No Child</a></li>
					--}}
					<li class="treeview {{ setActive('admin/article*') }}">
						<a href="#"><i class="fa fa-book"></i>  Blog Section <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu" style="display: none;">
							<li><a href="{{ url(getLang() . '/admin/article') }}"><i class="fa fa-archive"></i> All Articles</a> </li>
							<li> <a href="{{ url(getLang() . '/admin/article/create') }}"><i class="fa fa-plus-square"></i> Add Article</a> </li>
							<li>
								<a href="#"><i class="fa fa-plus-square"></i>Categories</a>
								<ul class="treeview-menu">
									<li> <a href="{{ url(getLang() . '/admin/category') }}"><i class="fa fa-square"></i> All Categories</a> </li>
									<li> <a href="{{ url(getLang() . '/admin/category/create') }}"><i class="fa fa-plus-square"></i> Add Category</a> </li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="treeview {{ setActive('admin/category*') }}">
						<a href="#"> <i class="fa fa-tag"></i> <span>Categories</span>
						<i class="fa fa-angle-left pull-right"></i> </a>
						<ul class="treeview-menu">
							<li> <a href="{{ url(getLang() . '/admin/category') }}"><i class="fa fa-square"></i> All Categories</a> </li>
							<li> <a href="{{ url(getLang() . '/admin/category/create') }}"><i class="fa fa-plus-square"></i> Add Category</a> </li>
						</ul>
					</li>
					<li class="treeview {{ setActive('admin/faq*') }}">
						<a href="#"> <i class="fa fa-question"></i> <span>Faqs</span>
						<i class="fa fa-angle-left pull-right"></i> </a>
						<ul class="treeview-menu">
							<li><a href="{{ url(getLang() . '/admin/faq') }}"><i class="fa fa-question-circle"></i> All Faq</a></li>
							<li>
								<a href="{{ url(getLang() . '/admin/faq/create') }}"><i class="fa fa-plus-square"></i> Add Faq</a>
							</li>
						</ul>
					</li>
					<li class="treeview {{ setActive('admin/page*') }}">
						<a href="#"><i class="fa fa-bookmark"></i>  Pages Section <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu" style="display: none;">
							<li><a href="{{ url(getLang() . '/admin/page') }}"><i class="fa fa-folder"></i> All Pages</a></li>
							<li><a href="{{ url(getLang() . '/admin/page/create') }}"><i class="fa fa-plus-square"></i> Add Page</a></li>
						</ul>
					</li>
					<li class="treeview {{ setActive(['admin/photo-gallery*', 'admin/video*']) }}">
						<a href="#"> <i class="fa fa-picture-o"></i> <span>Galleries</span>
						<i class="fa fa-angle-left pull-right"></i> </a>
						<ul class="treeview-menu">
							<li> <a href="{{ url(getLang() . '/admin/photo-gallery') }}"><i class="fa fa-camera"></i> Photo Galleries</a> </li>
							<li> <a href="{{ url(getLang() . '/admin/video') }}"><i class="fa fa-play-circle-o"></i> Video Galleries</a> </li>
						</ul>
					</li>
					{{--
					<li class="treeview {{ setActive('admin/project*') }}">
						<a href="#"> <i class="fa fa-gears"></i> <span>Projects</span>
						<i class="fa fa-angle-left pull-right"></i> </a>
						<ul class="treeview-menu">
							<li><a href="{{ url(getLang() . '/admin/project') }}"><i class="fa fa-gear"></i> All Projects</a>
							</li>
							<li>
								<a href="{{ url(getLang() . '/admin/project/create') }}"><i class="fa fa-plus-square"></i> Add Project</a>
							</li>
						</ul>
					</li>
					--}}
					<li class="treeview {{ setActive('admin/news*') }}">
						<a href="#"><i class="fa fa-th"></i> News Section <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu" style="display: none;">
							<li><a href="{{ url(getLang() . '/admin/news') }}"><i class="fa fa-calendar"></i> All News</a></li>
							<li><a href="{{ url(getLang() . '/admin/news/create') }}"><i class="fa fa-plus-square"></i> Add New</a></li>
						</ul>
					</li>
					<li class="treeview {{ setActive('admin/slider*') }}">
						<a href="#"> <i class="fa fa-tint"></i> <span>Plugins</span>
						<i class="fa fa-angle-left pull-right"></i> </a>
						<ul class="treeview-menu">
							<li><a href="{{ url(getLang() . '/admin/slider') }}"><i class="fa fa-toggle-up"></i> Sliders</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="treeview {{ setActive(['admin/user*', 'admin/group*']) }}">
				<a href="#"> <i class="fa fa-user"></i> <span>Users</span>
				<i class="fa fa-angle-left pull-right"></i> </a>
				<ul class="treeview-menu">
					<li><a href="{{ url(getLang() . '/admin/user') }}"><i class="fa fa-user"></i> All Users</a>
					</li>
					<li><a href="{{ url(getLang() . '/admin/role') }}"><i class="fa fa-group"></i> Add Role</a>
					</li>
				</ul>
			</li>
			<li class="treeview {{ setActive('admin/products*') }}">
				<a href="#"> <i class="fa fa-bookmark"></i> <span>eCommerce</span>
				<i class="fa fa-angle-left pull-right"></i> </a>
				<ul class="treeview-menu">
					{{--
					<li><a href="{{ action('App\Http\Controllers\Admin\ProductController@index') }}"><i class="fa fa-folder"></i> All Products</a> </li>
					--}}

					<li><a href="{{ url(getLang() . '/admin/products/create') }}"><i class="fa fa-plus-square"></i> Add Page</a> </li>
					<li><a href="{{ url(getLang() . '/admin/products') }}"><i class="fa fa-question-circle"></i> List Products</a></li>

				</ul>
			</li>

	{{-- 		<li class="treeview">
				<a href="#"> <i class="fa fa-share"></i> <span>Sales Management</span> <i class="fa fa-angle-left pull-right"></i> </a>
				<ul class="treeview-menu" style="display: block;">
				</ul>
			</li> --}}
	{{-- 		<li class="treeview">
				<a href="#"> <i class="fa fa-share"></i> <span>Software Management</span> <i class="fa fa-angle-left pull-right"></i> </a>
				<ul class="treeview-menu" style="display: block;">
				</ul>
			</li> --}}
{{-- 			<li class="treeview">
				<a href="#"> <i class="fa fa-share"></i> <span>Warehouse Management</span> <i class="fa fa-angle-left pull-right"></i> </a>
				<ul class="treeview-menu" style="display: block;">
				</ul>
			</li> --}}


			@if(Sentinel::getUser()->inRole(['Admin', 'SuperAdmin'])):
			<li class="treeview">
				<a href="#"> <i class="fa fa-share"></i> <span>Developer Area</span> <i class="fa fa-angle-left pull-right"></i> </a>
				<ul class="treeview-menu" style="display:none;">
					<li class="treeview {{ setActive(['admin/logs*', 'admin/form-post']) }}">
						<a href="#"> <i class="fa fa-thumb-tack"></i> <span>Records</span>
						<i class="fa fa-angle-left pull-right"></i> </a>
						<ul class="treeview-menu">
							<li><a target="_blank" href="{{ url(getLang() . '/admin/logs') }}"><i class="fa fa-save"></i> Log</a></li>
							<li>
								<a href="{{ url(getLang() . '/admin/form-post') }}"><i class="fa fa-envelope"></i> Form Post</a>
							</li>
						</ul>
					</li>
					<li class="{{ setActive('admin/menu*') }}"><a href="{{ url(getLang() . '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Menu</span> </a>
					</li>
					<li class="{{ setActive('admin/settings*') }}">
						<a href="{{ url(getLang() . '/admin/settings') }}"> <i class="fa fa-gear"></i> <span>Settings</span> </a>
					</li>
				</ul>
			</li>
			@endif
			<li class="{{ setActive('admin/logout*') }}">
				<a href="{{ url('/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>