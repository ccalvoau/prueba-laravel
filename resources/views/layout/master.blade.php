<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {!! Html::style('assets/adminlte/bootstrap/css/bootstrap.min.css') !!}
            <!-- Font Awesome -->
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
            <!-- Ionicons -->
    {!! Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
            <!-- Select2 -->
    {!! Html::style('assets/adminlte/plugins/select2/select2.min.css') !!}
            <!-- DataTables -->
    {!! Html::style('assets/adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
            <!-- FullCalendar 2.2.5-->
    {!! Html::style('assets/adminlte/plugins/fullcalendar/fullcalendar.min.css') !!}
    {!! Html::style('assets/adminlte/plugins/fullcalendar/fullcalendar.print.css', ['media' => "print"]) !!}
            <!-- Datepicker -->
    {!! Html::style('assets/adminlte/plugins/datepicker/datepicker3.css') !!}
            <!-- Daterange picker -->
    {!! Html::style('assets/adminlte/plugins/daterangepicker/daterangepicker-bs3.css') !!}
            <!-- Theme style -->
    {!! Html::style('assets/adminlte/dist/css/AdminLTE.min.css') !!}
            <!-- AdminLTE Skin -->
    {!! Html::style('assets/adminlte/dist/css/skins/skin-blue.min.css') !!}
            <!-- Customised CSS -->
    {!! Html::style('assets/css/main.css') !!}

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {!! Html::script('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') !!}
    {!! Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition fixed skin-blue sidebar-mini">
<div class="wrapper">

    <<!-- Header -->
    @include('layout.partials.header')

            <!-- Sidebar -->
    @include('layout.partials.sidebar')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">

            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{Session::get('message')}}
                </div>
            @endif

            @yield('content')
        </div>
        <!-- /.container -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layout.partials.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
{!! Html::script('/assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js') !!}

        <!-- Bootstrap 3.3.5 -->
{!! Html::script('/assets/adminlte/bootstrap/js/bootstrap.min.js') !!}

        <!-- AdminLTE App -->
{!! Html::script('/assets/adminlte/dist/js/app.min.js') !!}

        <!-- SlimScroll 1.3.0 -->
{!! Html::script('/assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') !!}

        <!-- FastClick -->
{!! Html::script('/assets/adminlte/plugins/fastclick/fastclick.min.js') !!}

@yield('scripts')

</body>
</html>
