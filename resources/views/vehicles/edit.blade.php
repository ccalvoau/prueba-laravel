@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.vehicle.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.vehicle.pt_vehicle')
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
                                @lang('validation.attributes.vehicle.edit_title_table'): {{ $vehicle->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('vehicles::show', [$vehicle->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-search"></i>
                                    @lang('validation.attributes.vehicle.button_show')
                                </a>
                                &nbsp;
                                <a href="{{ route('vehicles::index') }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.vehicle.button_list')
                                </a>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::model($vehicle, ['route' => ['vehicles::update', $id], 'class' => 'form-horizontal', 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}

                                @include('vehicles.partials.fields_edit')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.vehicle.button_update')
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

    <!-- InputMask -->
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.js') !!}
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') !!}
    {!! Html::script('/assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') !!}
    <!-- Date-range-picker -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js') !!}
    {!! Html::script('/assets/adminlte/plugins/daterangepicker/daterangepicker.js') !!}
    <!-- Bootstrap Datepicker -->
    {!! Html::script('/assets/adminlte/plugins/datepicker/bootstrap-datepicker.js') !!}

    <!-- Page script -->
    <script>
        $(document).ready(function () {

            $("[data-mask]").inputmask();

            $("#dp_year").datepicker({
                format: " yyyy",
                viewMode: "years",
                minViewMode: "years",
                endDate: "today"
            }).on('changeDate', function(e){
                $(this).datepicker('hide');
            });

            //Date picker
            $('#dp_registration_expire').datepicker({
                format: "yyyy/mm/dd",
                startDate: "today",
                language: "en",
                autoclose: true,
                toggleActive: true
            });

            $('#vehicle_picture').on('change', function () {
                readURL(this, 'vehicle_picture_box');
            });

            function readURL(input, picture_box) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#'+picture_box).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $('#picture_box').show();
                }
            }

            $('#h_vehicle_picture').val() == "default.jpg" ? $('#picture_box').hide() : $('#picture_box').show();
        });
    </script>

@endsection