@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.cleaner.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.cleaner.pt_cleaner')
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
                                @lang('validation.attributes.cleaner.edit_title_table'): {{ $cleaner->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('cleaners::show', [$cleaner->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-search"></i>
                                    @lang('validation.attributes.cleaner.button_show')
                                </a>
                                &nbsp;
                                @if(Auth::user()->hasAnyRole([1,2]))
                                    <a href="{{ route('cleaners::index') }}" class="btn btn-default btn-xs">
                                        <i class="fa fa-navicon"></i>
                                        @lang('validation.attributes.cleaner.button_list')
                                    </a>
                                @endif
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::model($cleaner, ['route' => ['cleaners::update', $id], 'class' => 'form-horizontal', 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}

                                @include('cleaners.partials.fields_edit')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.cleaner.button_update')
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
    <!-- Bootstrap Switch-master -->
    {!! Html::script('/assets/adminlte/plugins/bootstrap-switch-master/bootstrap-switch.js') !!}

    <!-- Page script -->
    <script type="text/javascript">
        $(document).ready(function () {
            if($('#own_vehicle').val()){
                $('#own_vehicle').val(true);
                toogleButton( 'div_own_vehicle' );
            }else{
                $('#own_vehicle').val(false);
            }

            //Initialize Select2 Elements
            var $option = '@lang('validation.attributes.select_an_option')';
            $('#document_id').select2({ placeholder: $option });
            $('#gender').select2({ placeholder: $option });
            $('#country_id').select2({ placeholder: $option });
            $('#english_level_id').select2({ placeholder: $option });
            $('#language_id').select2({ placeholder: $option });
            $('#status').select2({ placeholder: $option });

            $('#email').attr('readonly', true);

            $("[data-mask]").inputmask();

            $('#profile_picture').on('change', function () {
                readURL(this, 'profile_picture_box');
            });

            $('#licence_picture').on('change', function () {
                readURL(this, 'licence_picture_box');
            });

            function readURL(input, picture_box) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#'+picture_box).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('.btn-toggle').click(function() {
                $(this).find('.btn').toggleClass('active');
                if ($(this).find('.btn-primary').size()>0) {
                    $(this).find('.btn').toggleClass('btn-primary');
                }
                $(this).find('.btn').toggleClass('btn-default');
            });
        });
    </script>


    <script type="text/javascript">
        function setOwnVehicle() {
            if ( $('#own_vehicle').val() == "true" ){
                $('#own_vehicle').val(false);
            } else {
                $('#own_vehicle').val(true);
            }
        }

        function toogleButton( id ) {
            $('#'+id).find('.btn').toggleClass('active');
            if ($('#'+id).find('.btn-primary').size()>0) {
                $('#'+id).find('.btn').toggleClass('btn-primary');
            }
            $('#'+id).find('.btn').toggleClass('btn-default');
        }
    </script>

@endsection