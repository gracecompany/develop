<div id="top-bar">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
    <div class="container clearfix">
        <div class="col_half nobottommargin hidden-xs">
            <p class="nobottommargin"><strong>Call:</strong> &nbsp; 1 (800) 264-0644 | <strong>Email:</strong> &nbsp; info@graceframe.com</p>
        </div>
        <div class="col_half col_last fright nobottommargin">
            <div class="top-links">

                <ul>
                    {{-- @include('header-locatlization') --}}

                    @if ($user = Sentinel::check())
                    <li><a href="{{ url('/' . getLang() . '/my-account') }}">{!! Sentinel::getUser()->first_name !!} {!! Sentinel::getUser()->last_name !!}</a></li>
                    @endif

                    @if($user = Sentinel::check())
                        <li><a href="{{ url('/' . getLang() . '/order') }}"> My Orders &nbsp;<span class="fa fa-briefcase"></span></a></li>
                        <li><a href="{{ url('/' . getLang() . '/cart') }}"> My Cart &nbsp;<span class="fa fa-shopping-cart"></span></a></li>

                    @endif

                    @if(!$user = Sentinel::check())
                        <li><a href="#">Login</a>
                        <div class="top-link-section">
                            <form id="top-login" role="form">
                                <div class="input-group" id="top-login-username">
                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                    <input type="email" class="form-control" placeholder="Email address" required="">
                                </div>
                                <div class="input-group" id="top-login-password">
                                    <span class="input-group-addon"><i class="icon-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" required="">
                                </div>
                                <label class="checkbox">
                                  <input type="checkbox" value="remember-me"> Remember me
                                </label>
                                <button class="btn btn-danger btn-block" type="submit">Sign in</button>
                            </form>
                        </div>
                        </li>
                    @else
                        <li><a href="{{ url('/' . getLang() . '/auth/logout') }}">Logout  </a></li>
                    @endif

                </ul>
            </div><!-- .top-links end -->
        </div>
    </div>
</div><!-- #top-bar end -->
