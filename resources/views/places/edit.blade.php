@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.place.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.place.pt_place')
                        <small>- @lang('validation.attributes.pt_edit')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.flash_message')

                    @include('layout.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.place.edit_title_table'): {{ $place->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('places::show', [$place->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-search"></i>
                                    @lang('validation.attributes.place.button_show')
                                </a>
                                &nbsp;
                                <a href="{{ route('places::index') }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.place.button_list')
                                </a>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::model($place, ['route' => ['places::update', $id], 'class' => 'form-horizontal', 'method' => 'put']) !!}

                                @include('places.partials.fields_edit')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.place.button_update')
                                    </button>
                                </div><!-- /.col12 -->

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

    <!-- Select2 -->
    {!! Html::script('/assets/adminlte/plugins/select2/select2.full.min.js') !!}
    <!-- InputMask -->
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.js') !!}
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') !!}
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') !!}

    <!-- Page script -->
    <script>
        $(document).ready(function () {
            //Initialize Select2 Elements
            var $option = '@lang('validation.attributes.select_an_option')';
            $('#client_id').select2({ placeholder: $option });
            $('#street_type_id').select2({ placeholder: $option });
            $('#state_id').select2({ placeholder: $option });
            $('#status').select2({ placeholder: $option });

            $("[data-mask]").inputmask();
        });
    </script>

@endsection