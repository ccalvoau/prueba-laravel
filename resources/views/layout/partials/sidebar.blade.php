<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/assets/adminlte/dist/img/1-160x160.jpg') }}" class="img-circle" alt="User Image">
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
            <li class="header">MAIN MENU</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-user-plus"></i> Add User</a></li>
                    <li><a href="#"><i class="fa fa-users"></i> List Users</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{ '/cleaners' }}">
                    <i class="fa fa-arrow-circle-right"></i> <span>Cleaners</span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{ '/payment_infos' }}">
                    <i class="fa fa-arrow-circle-right"></i> <span>Payment Info</span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{ '/clients' }}">
                    <i class="fa fa-arrow-circle-right"></i> <span>Clients</span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{ '/places' }}">
                    <i class="fa fa-arrow-circle-right"></i> <span>Places</span>
                </a>
            </li>

            <li class="header"></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Menu Sample</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ '/table' }}"><i class="fa fa-circle-o"></i> Table</a></li>
                    <li><a href="{{ '/select' }}"><i class="fa fa-circle-o"></i> Select</a></li>
                    <li><a href="{{ '/create' }}"><i class="fa fa-circle-o"></i> Create</a></li>
                    <li><a href="{{ '/calendar' }}"><i class="fa fa-circle-o"></i> Calendar</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level 1 <i
                                    class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level 2</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level 2 <i
                                            class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level 3</a></li>
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
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level 1</a></li>
                </ul>
            </li>

            <li class="header"></li>

            <li class="treeview">
                <a href="{{ '/quote' }}">
                    <i class="fa fa-file-text"></i> <span>Quotes</span>
                </a>
            </li>

            <li class="header"></li>

            <li><a href="{{ '/help' }}"><i class="fa fa-book"></i> <span>Help</span></a></li>

            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
