@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('auth.login')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.cleaner.pt_cleaner')
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
                                @lang('validation.attributes.cleaner.index_title_table')
                            </h3>
                            <a href="{{ route('cleaners.create') }}" class="btn btn-default pull-right btn-xs">
                                @lang('validation.attributes.cleaner.button_add')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('cleaners.partials.table')

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
            $("#tb_index_cleaners").DataTable();
        });
    </script>

@endsection