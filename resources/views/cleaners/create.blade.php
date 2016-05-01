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
                        <small>- @lang('validation.attributes.pt_create')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.cleaner.create_title_table')
                            </div>
                            <a href="{{ route('cleaners::index') }}" class="btn btn-default pull-right btn-xs">
                                <i class="fa fa-navicon"></i>
                                @lang('validation.attributes.cleaner.button_list')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::open(['route' => 'cleaners::store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}

                                @include('cleaners.partials.fields_create')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.cleaner.button_create')
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

    @include('modals.modal_user_exist')

@endsection


@section('scripts')

    <!-- Select2 -->
    {!! Html::script('/assets/adminlte/plugins/select2/select2.full.min.js') !!}
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
    <script type="text/javascript">
        $(document).ready(function () {
            //Initialize Select2 Elements
            var $option = '@lang('validation.attributes.select_an_option')';
            $('#document_id').select2({ placeholder: $option });
            $('#gender').select2({ placeholder: $option });
            $('#country_id').select2({ placeholder: $option });
            $('#english_level_id').select2({ placeholder: $option });
            $('#language_id').select2({ placeholder: $option });
            $('#role_id').select2({ placeholder: $option });

            $('#own_vehicle').val(false);

            $("[data-mask]").inputmask();

            //Date picker
            $('#dp_date_of_birth').datepicker({
                format: "yyyy/mm/dd",
                endDate: "-18y",
                language: "en",
                autoclose: true,
                toggleActive: true
            });

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

            $('#email').on('change', function () {
                var $email = $('#email').val();

                if($email != "")
                {
                    $.get('/users/'+$email+'/user.json', function(user)
                    {
                        if ($email == user.email)
                        {
                            var $name = user.first_name + ' ' + user.last_name;

                            $('#modal_user_email').html("("+user.email+")");
                            $('#modal_user_name').html($name);

                            $('#user_exist').modal('toggle');
                        }
                    });
                }
            });

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

        function resetForm() {
            $('#email').val('');
            $('#first_name').val('');
            $('#last_name').val('');
            $('#email').focus();
        }
    </script>

@endsection