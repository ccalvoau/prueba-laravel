<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/assets/img/profile_pictures/'.Auth::user()->profile_picture) }}" class="img-circle" alt="{{ Auth::user()->name." Image" }}">
            </div>
            <div class="pull-left info">
                @if(!Auth::guest())
                    <p>{{ Auth::user()->name }}</p>
                @endif
                <!-- Status -->
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">
                @lang('common.menu.menu')
            </li>

            @if(!Auth::guest())

                @if(Auth::user()->hasAnyRole(1))

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-user"></i>
                            <span>@lang('common.menu.users')</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('users::create') }}">
                                    <i class="fa fa-user-plus"></i>
                                    <span>@lang('common.menu.user_create')</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('users::index') }}">
                                    <i class="fa fa-users"></i>
                                    <span>@lang('common.menu.user_index')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                @endif

                <li class="treeview">
                    <a href="">
                        <i class="fa fa-male"></i>
                        <span>@lang('common.menu.cleaners')</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        @if(Auth::user()->hasAnyRole([1,2]))
                            <li>
                                <a href="{{ route('cleaners::create') }}">
                                    <i class="fa fa-user-plus"></i>
                                    <span>@lang('common.menu.cleaner_create')</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cleaners::index') }}">
                                    <i class="fa fa-users"></i>
                                    <span>@lang('common.menu.cleaner_index')</span>
                                </a>
                            </li>
                        @endif

                        @if(Auth::user()->hasAnyRole([3,4]))
                            <li>
                                <a href="{{ route('cleaners::edit', [Auth::user()->cleaner_id]) }}">
                                    <i class="fa fa-pencil"></i>
                                    <span>@lang('common.menu.cleaner_edit')</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cleaners::show', [Auth::user()->cleaner_id]) }}">
                                    <i class="fa fa-search"></i>
                                    <span>@lang('common.menu.cleaner_show')</span>
                                </a>
                            </li>
                        @endif

                        @if(Auth::user()->hasAnyRole([1,3,4]))
                            <li>
                                <a href="">
                                    <i class="fa fa-clock-o"></i>
                                    <span>@lang('common.menu.availabilities')</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ route('availabilities::edit', [Auth::user()->cleaner_id]) }}">
                                            <i class="fa fa-pencil"></i>
                                            <span>@lang('common.menu.availability_edit')</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        <li>
                            <a href="">
                                <i class="fa fa-bank"></i>
                                <span>@lang('common.menu.payment_infos')</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{ route('payment_infos::create') }}">
                                        <i class="fa fa-plus-square"></i>
                                        <span>@lang('common.menu.payment_info_create')</span>
                                    </a>
                                </li>

                                @if(Auth::user()->hasAnyRole([1,2]))
                                <li>
                                    <a href="{{ route('payment_infos::index') }}">
                                        <i class="fa fa-navicon"></i>
                                        <span>@lang('common.menu.payment_info_index')</span>
                                    </a>
                                </li>
                                @endif

                                @if(Auth::user()->hasAnyRole([3,4]))
                                    <li>
                                        <a href="{{ route('payment_infos::display', [Auth::user()->cleaner_id]) }}">
                                            <i class="fa fa-navicon"></i>
                                            <span>@lang('common.menu.payment_info_index')</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </li>

                @if(Auth::user()->hasAnyRole([1,2]))

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-user-secret"></i>
                            <span>@lang('common.menu.clients')</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('clients::create') }}">
                                    <i class="fa fa-plus-square"></i>
                                    <span>@lang('common.menu.client_create')</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('clients::index') }}">
                                    <i class="fa fa-navicon"></i>
                                    <span>@lang('common.menu.client_index')</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-map-marker"></i>
                                    <span>@lang('common.menu.places')</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ route('places::create') }}">
                                            <i class="fa fa-plus-square"></i>
                                            <span>@lang('common.menu.place_create')</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('places::index') }}">
                                            <i class="fa fa-navicon"></i>
                                            <span>@lang('common.menu.place_index')</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="{{ route('home') }}">
                            <i class="fa fa-money"></i>
                            <span>@lang('common.menu.payments')</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-users"></i>
                            <span>@lang('common.menu.teams')</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('teams::create') }}">
                                    <i class="fa fa-plus-square"></i>
                                    <span>@lang('common.menu.team_create')</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('teams::index') }}">
                                    <i class="fa fa-navicon"></i>
                                    <span>@lang('common.menu.team_index')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-truck"></i>
                            <span>@lang('common.menu.vehicles')</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('vehicles::create') }}">
                                    <i class="fa fa-plus-square"></i>
                                    <span>@lang('common.menu.vehicle_create')</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('vehicles::index') }}">
                                    <i class="fa fa-navicon"></i>
                                    <span>@lang('common.menu.vehicle_index')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-gears"></i>
                            <span>@lang('common.menu.jobs')</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('jobs::create') }}">
                                    <i class="fa fa-plus-square"></i>
                                    <span>@lang('common.menu.job_create')</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('jobs::index') }}">
                                    <i class="fa fa-navicon"></i>
                                    <span>@lang('common.menu.job_index')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                @endif

                <li class="header"></li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i>
                        <span>Others</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{ route('calendar') }}">
                                <i class="fa fa-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle-o"></i>
                                <span>Level 1</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{ route('contacts::create') }}">
                                        <i class="fa fa-envelope"></i>
                                        <span>Contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="f     a fa-circle-o"></i>
                                        <span>Level 2</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                            </a>
                                    <ul class="treeview-menu">
                                        <li class="treeview">
                                            <a href="{{ route('jobs::index') }}">
                                                <i class="fa fa-file-text"></i>
                                                <span>Quotes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-circle-o"></i> Level 3 <i
                                                        class="fa fa-angle-left pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level 4</a></li>
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level 4</a></li>
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level 3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('pdf') }}">
                                        <i class="fa fa-file-pdf-o"></i>
                                        <span>PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('charts') }}">
                                <i class="fa fa-bar-chart"></i>
                                <span>Charts</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="header"></li>

                <li>
                    <a href="{{ '/help' }}">
                        <i class="fa fa-question-circle"></i>
                        <span>@lang('common.menu.help')</span>
                    </a>
                </li>

            @endif

            <li>
                <a href="{{ route('logout') }}">
                    <i class="fa fa-sign-out"></i>
                    <span>@lang('common.menu.logout')</span>
                </a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
