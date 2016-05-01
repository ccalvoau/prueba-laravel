@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.payment_info.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.payment_info.pt_payment_info')
                        <small>- @lang('validation.attributes.pt_create')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.errors')

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.payment_info.create_title_table')
                            </div>
                            @if(Auth::user()->hasAnyRole([1,2]))
                                <a href="{{ route('payment_infos::index') }}" class="btn btn-default pull-right btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.payment_info.button_list')
                                </a>
                            @endif
                            @if(Auth::user()->hasAnyRole([3,4]))
                                <a href="{{ route('payment_infos::display', [Auth::user()->cleaner_id]) }}" class="btn btn-default pull-right btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.payment_info.button_list')
                                </a>
                            @endif
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::open(['route' => 'payment_infos::store', 'class' => 'form-horizontal']) !!}

                            	@include('payment_infos.partials.fields_create')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.payment_info.button_create')
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
    <script type="text/javascript">
        $(document).ready(function () {
            //Initialize Select2 Elements
            var $option = '@lang('validation.attributes.select_an_option')';
            $('#cleaner_id').select2({ placeholder: $option });
            $('#bank_id').select2({ placeholder: $option });

            if($('#h_cleaner_id').val() != "")
            {
                $('#cleaner_id').select2("enable",false);
            }

            $('#is_default').val(true);

            $("[data-mask]").inputmask();

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
        function setDefault() {
            if ( $('#is_default').val() == "true" ){
                $('#is_default').val(false);
            } else {
                $('#is_default').val(true);
            }
        }
    </script>

@endsection