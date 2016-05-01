@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.user.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.user.pt_user')
                        <small>- @lang('validation.attributes.pt_create')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.user.create_title_table')
                            </div>
                            <a href="{{ route('users::index') }}" class="btn btn-default pull-right btn-xs">
                                <i class="fa fa-navicon"></i>
                                @lang('validation.attributes.user.button_list')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::open(['route' => 'users::store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}

                                @include('users.partials.fields_create')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.user.button_create')
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

    <!-- Page script -->
    <script type="text/javascript">
        $(document).ready(function () {
            //Initialize Select2 Elements
            var $option = '@lang('validation.attributes.select_an_option')';
            $('#role_id').select2({ placeholder: $option });

            $('#profile_picture').on('change', function () {
                readURL(this, 'profile_picture_box');
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
        });
    </script>


    <script type="text/javascript">
        function resetForm() {
            $('#email').val('');
            $('#first_name').val('');
            $('#last_name').val('');
            $('#email').focus();
        }
    </script>

@endsection