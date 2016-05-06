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
                                @lang('validation.attributes.payment_info.edit_title_table'): {{ $payment_info->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('payment_infos::show', [$payment_info->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-search"></i>
                                    @lang('validation.attributes.payment_info.button_show')
                                </a>
                                &nbsp;
                                @if(Auth::user()->hasAnyRole([1,2]))
                                    <a href="{{ route('payment_infos::index') }}" class="btn btn-default btn-xs">
                                        <i class="fa fa-navicon"></i>
                                        @lang('validation.attributes.payment_info.button_list')
                                    </a>
                                @endif
                                @if(Auth::user()->hasAnyRole([3,4]))
                                    <a href="{{ route('payment_infos::display', [Auth::user()->cleaner_id]) }}" class="btn btn-default btn-xs">
                                        <i class="fa fa-navicon"></i>
                                        @lang('validation.attributes.payment_info.button_list')
                                    </a>
                                @endif
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            {!! Form::model($payment_info, ['route' => ['payment_infos::update', $id], 'class' => 'form-horizontal', 'method' => 'put']) !!}

                            	@include('payment_infos.partials.fields_edit')

                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-block btn-primary">
                                        @lang('validation.attributes.payment_info.button_update')
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
            if($('#is_default').val()){
                $('#is_default').val(true);
                toogleButton( 'div_is_default' );
            }else{
                $('#is_default').val(false);
            }

            //Initialize Select2 Elements
            var $option = '@lang('validation.attributes.select_an_option')';
            $('#cleaner_id').select2({ placeholder: $option });
            $('#bank_id').select2({ placeholder: $option });

            if($('#h_cleaner_id').val() != "")
            {
                $('#cleaner_id').select2("enable",false);
            }

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

        function toogleButton( id ) {
            $('#'+id).find('.btn').toggleClass('active');
            if ($('#'+id).find('.btn-primary').size()>0) {
                $('#'+id).find('.btn').toggleClass('btn-primary');
            }
            $('#'+id).find('.btn').toggleClass('btn-default');
        }
    </script>

@endsection