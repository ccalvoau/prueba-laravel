@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.client.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.client.pt_client')
                        <small>- @lang('validation.attributes.pt_show')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.client.show_title_table'): {{ $client->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('clients::edit', ['id' => $client->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-pencil"></i>
                                    @lang('validation.attributes.client.button_edit')
                                </a>
                                &nbsp;
                                <a href="{{ route('clients::index') }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.client.button_list')
                                </a>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('clients.partials.data')

                        </div><!-- /.box-body -->

                    </div>

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.place.index_title_table')
                            </div>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div><!-- /.box-header -->

                        @if(!$places->isEmpty())
                        	<div class="box-body">

                            	@include('places.partials.table')

                        	</div><!-- /.box-body -->
                        @else
                            <div class="box-body">

                                @lang('validation.attributes.client.places_empty')
                                <a href="{{ route('places::create') }}" class="btn btn-primary pull-right btn-xs">
                                    @lang('validation.attributes.place.button_add')
                                </a>

                            </div><!-- /.box-body -->
                        @endif

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
        $(document).ready(function () {
            $("#tb_index_places").DataTable({
                "order": [[ 6, "desc" ],[ 0, "desc" ]]
            });
        });
    </script>

@endsection