@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('auth.login')
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_title or 'Page Title' }}
            <small>- {{ $page_description or 'Page Description' }}</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <!-- single column -->
                <div class="col-md-12">
                    <!-- box form elements -->
                    <div class="box box-solid box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Email Contact</h3>
                        </div><!-- /.box-header -->

                        @include('layout.partials.errors')

                        <div class="box-body">

                            {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

                            <div class="form-group">
                                {!! Form::label('Your Name') !!}
                                {!! Form::text('name', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Your name')) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Your E-mail Address') !!}
                                {!! Form::text('email', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Your e-mail address')) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Your Message') !!}
                                {!! Form::textarea('message', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Your message')) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Contact Us!',
                                  array('class'=>'btn btn-primary')) !!}
                            </div>
                            {!! Form::close() !!}
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!--/.col (single) -->
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection


@section('scripts')

@endsection