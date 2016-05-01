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
                                @lang('validation.attributes.user.edit_title_table'): {{ $user->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('users::show', [$user->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-search"></i>
                                    @lang('validation.attributes.user.button_show')
                                </a>
                                &nbsp;
                                <a href="{{ route('users::index') }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.user.button_list')
                                </a>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::model($user, ['route' => ['users::update', $id], 'class' => 'form-horizontal', 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}

                                @include('users.partials.fields_edit')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.user.button_update')
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

    <!-- Page script -->
    <script type="text/javascript">
        $(document).ready(function () {
            //Initialize Select2 Elements
            var $option = '@lang('validation.attributes.select_an_option')';
            $('#role_id').select2({ placeholder: $option });
            $('#status').select2({ placeholder: $option });

            $('#email').attr('readonly', true);
            $('#first_name').attr('readonly', true);
            $('#last_name').attr('readonly', true);
            $('#cleaner_name').attr('readonly', true);
            $('#cleaner_name').val($('#first_name').val()+' '+$('#last_name').val());

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

            $('#role_id').on('change', function () {
                checkRole();
            });

            checkRole();
        });
    </script>


    <script type="text/javascript">
        function checkRole() {
            if($('#role_id').val() == 3 || $('#role_id').val() == 4)
            {
                $('#div_cleaner').show();
            }
            else
            {
                $('#div_cleaner').hide();
            }
        }
    </script>

@endsection