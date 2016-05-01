@extends('layout_auth.auth')

@section('title')
	@lang('common.company_name_capital') - @lang('validation.attributes.auth.password_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 65%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.auth.pt_auth')
                        <small>@lang('validation.attributes.auth.pt_password')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout_auth.partials.flash_message')

                    @include('layout_auth.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            @lang('validation.attributes.auth.password_title')
                        </div>

                        <div class="box-body">

                            {!! Form::open(['route' => 'password', 'class' => 'form-horizontal', 'method' => 'POST', 'role' => 'form']) !!}

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
                                                'type' => 'email',
                                                'required' => 'required'
                                                ])
                                            !!}
                                        </div>
                                    </div>
                                </div>

                                <hr />

                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icon fa fa-envelope"></i>
                                            @lang('validation.attributes.auth.button_password')
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

@endsection