<!-- Main Header -->
<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="{{ '/' }}" class="navbar-brand"><b>@lang('common.company_name')</b></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    @if (Auth::guest())
                        <li id="li_login"><a href="{{ route('login') }}">@lang('auth.login')</a></li>
                        <li id="li_register"><a href="{{ route('register') }}">@lang('auth.register')</a></li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>