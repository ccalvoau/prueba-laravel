@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('client.page_title')
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

                    <!-- box form elements -->
                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @lang('validation.attributes.client.show_title_table'): {{ $client->id }}
                            </h3>
                            <a href="{{ route('clients.index') }}" class="btn btn-default pull-right btn-xs">
                                @lang('validation.attributes.client.button_list')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('clients.partials.data')

                        </div><!-- /.box-body -->

                    </div><!-- /.box form elements -->

                    <!-- box form elements -->
                    <div class="box box-solid box-primary    {{--collapsed-box--}}">

                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @lang('validation.attributes.place.index_title_table')
                            </h3>
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

                                @lang('validation.attributes.empty.client_places')

                            </div><!-- /.box-body -->
                        @endif

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
            $("#tb_index_places_infos").DataTable();
        });
    </script>

@endsection