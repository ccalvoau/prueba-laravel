<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@lang('common.company_name_capital') - @lang('common.welcome')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

                <!-- Bootstrap 3.3.5 -->
        {!! Html::style('assets/adminlte/bootstrap/css/bootstrap.min.css') !!}
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

    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="{{ route('welcome') }}" class="navbar-brand">
                                <b>@lang('common.full_app_name')</b>
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </nav>
            </header>

            <!-- Full Width Column -->
            <div class="content-wrapper">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2" align="center">
                            <br />
                            <br />
                            <h1>
                                @lang('common.full_app_name')
                            </h1>
                            <br />
                            <br />
                            <div>
                                <img src="{{ asset('assets/img/company_logo.png') }}" alt="@lang('common.company_name')"/>
                            </div>
                            <br />
                            <br />
                            <br />
                            <div>
                                <a class="btn btn-primary" href="{{ route('login') }}">
                                    @lang('common.enter_button')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.content-wrapper -->

            <!-- Footer -->
            @include('layout_auth.partials.footer')

        </div><!-- ./wrapper -->

        <!-- REQUIRED JS SCRIPTS -->
                <!-- jQuery 2.1.4 -->
        {!! Html::script('/assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js') !!}
                <!-- Bootstrap 3.3.5 -->
        {!! Html::script('/assets/adminlte/bootstrap/js/bootstrap.min.js') !!}
                <!-- AdminLTE App -->
        {!! Html::script('/assets/adminlte/dist/js/app.min.js') !!}

    </body>
</html>