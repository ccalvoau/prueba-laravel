@extends('layout_auth.auth')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.auth.register_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 65%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.auth.pt_auth')
                        <small>@lang('validation.attributes.auth.pt_register')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout_auth.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            @lang('validation.attributes.auth.register_title')
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::open(['route' => 'register', 'class' => 'form-horizontal', 'method' => 'POST', 'role' => 'form']) !!}

                                @include('auth.partials.fields')

                                <hr />

                                <div class="form-group">
                                    <div class="col-sm-3 col-sm-offset-4">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            @lang('validation.attributes.auth.button_register')
                                        </button>
                                    </div>
                                </div>

                            {!! Form::close() !!}

                        </div><!-- /.box-body -->

                    </div>

                </section>
                <!-- /.content -->

            </div>
            <!-- /.column -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            $("#li_register").addClass("active");
        });
    </script>
@endsection