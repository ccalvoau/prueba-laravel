@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('payment_info.page_title')
@endsection

@section('content')

	<div class="container-fluid" style="width: 98%">
        <div class="row">
            
            <div class="col-md-12">
            
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.payment_info.pt_payment_info')
                        <small>- @lang('validation.attributes.pt_index')</small>
                    </h1>

                    @include('layout.partials.flash_message')
                </section>
            
                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.errors')

                    <!-- box form elements -->
                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @lang('validation.attributes.payment_info.index_title_table')
                            </h3>
                            <a href="{{ route('payment_infos.create') }}" class="btn btn-default pull-right btn-xs">
                                @lang('validation.attributes.payment_info.button_add')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('payment_infos.partials.table')

                        </div><!-- /.box-body -->

                    </div><!-- /.box form elements -->
            
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
    <!-- DataTables -->
    {!! Html::script('/assets/adminlte/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('/assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js') !!}

    <!-- Page script -->
    <script>
        $(document).ready(function () {
            $("#tb_index_payment_infos").DataTable();
        });
    </script>

@endsection