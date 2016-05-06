@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.job.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.job.pt_job')
                        <small>- @lang('validation.attributes.pt_show')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.job.show_title_table'): {{ $job->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('jobs::edit', ['id' => $job->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-pencil"></i>
                                    @lang('validation.attributes.job.button_edit')
                                </a>
                                &nbsp;
                                <a href="{{ route('jobs::index') }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.job.button_list')
                                </a>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('jobs.partials.data')

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

    <!-- DataTables -->
    {!! Html::script('/assets/adminlte/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('/assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js') !!}

    <!-- Page script -->
    <script>
    </script>

@endsection