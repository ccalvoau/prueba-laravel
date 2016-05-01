@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.team.page_title')
@endsection

@section('content')

	<div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.team.pt_team')
                        <small>- @lang('validation.attributes.pt_index')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.flash_message')

                    <!-- box form elements -->
                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.team.index_title_table')
                            </div>
                            <a href="{{ route('teams::create') }}" class="btn btn-default pull-right btn-xs">
                                <i class="fa fa-plus-square"></i>
                                @lang('validation.attributes.team.button_add')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('teams.partials.table')

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
            $("#tb_index_teams").DataTable({
                "order": [[ 4, "asc" ],[ 0, "asc" ]]
            });
        });
    </script>

@endsection