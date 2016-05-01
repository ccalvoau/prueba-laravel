@extends('layout_auth.auth')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.auth.login_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 65%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.auth.pt_auth')
                        <small>@lang('validation.attributes.auth.pt_login')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout_auth.partials.flash_message')

                    @include('layout_auth.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            @lang('validation.attributes.auth.login_title')
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::open(['route' => 'login', 'class' => 'form-horizontal', 'method' => 'POST', 'role' => 'form']) !!}

                                <div class="form-group">
                                    {!! Form::label('email', '* '.Lang::get('validation.attributes.auth.email').':', ['class' => 'col-sm-4 control-label']) !!}
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="icon fa fa-envelope"></i>
                                            </div>
                                            {!! Form::text('email', Input::old('email'), [
                                                'id' => 'email',
                                                'placeholder' => Lang::get('validation.placeholders.email'),
                                                'class' => 'form-control',
                                                'onmouseover' => 'this.focus();',
                                                'type' => 'email',
                                                'required' => 'required'
                                                ])
                                            !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('password', '* '.Lang::get('validation.attributes.auth.password').':', ['class' => 'col-sm-4 control-label']) !!}
                                    <div class="col-sm-6">
                                        {!! Form::password('password', [
                                            'id' => 'password',
                                            'placeholder' => Lang::get('validation.placeholders.password'),
                                            'class' => 'form-control',
                                            'onmouseover' => 'this.focus();',
                                            'required' => 'required'
                                            ])
                                        !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> @lang('validation.attributes.auth.remember')
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-4">
                                        <button type="submit" class="btn btn-primary"
                                                style="margin-right: 15px;">
                                            @lang('validation.attributes.auth.button_login')
                                        </button>
                                        <a href='{{ route('password') }}'>@lang('validation.attributes.auth.forgot_password')</a>
                                    </div>
                                </div>

                            {!! Form::hidden('status', true, ['id' => 'status']) !!}

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
            $("#li_login").addClass("active");
        });
    </script>
@endsection