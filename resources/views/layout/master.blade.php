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

        @yield('css')

                <!-- Daterange Picker -->
        {!! Html::style('assets/adminlte/plugins/daterangepicker/daterangepicker-bs3.css') !!}
                <!-- Bootstrap Datepicker -->
        {!! Html::style('assets/adminlte/plugins/datepicker/datepicker3.css') !!}
                <!-- Select2 -->
        {!! Html::style('assets/adminlte/plugins/select2/select2.min.css') !!}
                <!-- iCheck for checkboxes and radio inputs -->
        {!! Html::style('assets/adminlte/plugins/iCheck/all.css') !!}
                <!-- DataTables -->
        {!! Html::style('assets/adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
                <!-- FullCalendar 2.2.5-->
        {!! Html::style('assets/adminlte/plugins/fullcalendar/fullcalendar.min.css') !!}
        {!! Html::style('assets/adminlte/plugins/fullcalendar/fullcalendar.print.css', ['media' => "print"]) !!}
                <!-- Datepicker -->
        {!! Html::style('assets/adminlte/plugins/datepicker/datepicker3.css') !!}
                <!-- Daterange picker -->
        {!! Html::style('assets/adminlte/plugins/daterangepicker/daterangepicker-bs3.css') !!}
                <!-- Bootstrap -->
        {!! Html::style('assets/adminlte/bootstrap/css/bootstrap.min.css') !!}
                <!-- Bootstrap Switch-master -->
        {!! Html::style('assets/adminlte/plugins/bootstrap-switch-master/bootstrap-switch.css') !!}

                <!-- Theme style -->
        {!! Html::style('assets/adminlte/dist/css/AdminLTE.min.css') !!}
                <!-- AdminLTE Skin -->
        {!! Html::style('assets/adminlte/dist/css/skins/skin-blue.min.css') !!}
                <!-- Customised CSS -->
        {!! Html::style('assets/css/main.css') !!}

        @yield('map_js')
    </head>

    <body class="hold-transition fixed skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Header -->
            @include('layout.partials.header')

            <!-- Sidebar -->
            @include('layout.partials.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container">
                    @yield('content')
                </div><!-- /.container -->
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

        <script type="text/javascript">
            $('div.alert').delay(5000).fadeOut(500);
        </script>

        @yield('scripts')

    </body>
</html>
