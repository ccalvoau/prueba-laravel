@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.contact.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.contact.pt_contact')
                        <small>- @lang('validation.attributes.pt_form')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.flash_message')

                    @include('layout.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.contact.create_title_table')
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::open(['route' => 'contacts::store', 'class' => 'form']) !!}

                                @include('contacts.partials.fields')

                                <hr>
                                <div class="form-group">
                                    {!! Form::submit(Lang::get('validation.attributes.contact.button_contact'),
                                        ['class' => 'btn btn-block btn-primary']) !!}
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