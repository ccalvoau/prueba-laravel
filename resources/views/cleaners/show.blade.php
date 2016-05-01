@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.cleaner.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.cleaner.pt_cleaner')
                        <small>- @lang('validation.attributes.pt_show')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.cleaner.show_title_table'): {{ $cleaner->id }}
                            </div>
                            <div class="pull-right">
                                @if(Auth::user()->hasAnyRole([1,2]) || (Auth::user()->hasAnyRole([3,4]) && Auth::user()->id == $cleaner->user_id ))
                                    <a href="{{ route('cleaners::edit', ['id' => $cleaner->id]) }}" class="btn btn-default btn-xs">
                                        <i class="fa fa-pencil"></i>
                                        @lang('validation.attributes.cleaner.button_edit')
                                    </a>
                                    &nbsp;
                                @endif
                                @if(Auth::user()->hasAnyRole([1,2]))
                                    <a href="{{ route('cleaners::index') }}" class="btn btn-default btn-xs">
                                        <i class="fa fa-navicon"></i>
                                        @lang('validation.attributes.cleaner.button_list')
                                    </a>
                                @endif
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('cleaners.partials.data')

                        </div><!-- /.box-body -->

                    </div>

                    <div class="box box-solid box-primary collapsed-box">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('timetable.title_table')
                            </div>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('availabilities.partials.table_availability')

                        </div><!-- /.box-body -->

                    </div>

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.payment_info.index_title_table')
                            </div>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div><!-- /.box-header -->

                        @if(!$payment_infos->isEmpty())
                        	<div class="box-body">

                            	@include('cleaners.partials.table_payment_info')

                        	</div><!-- /.box-body -->
                        @else
                            <div class="box-body">

                                @lang('validation.attributes.cleaner.payment_infos_empty')
                                <a href="{{ route('payment_infos::create') }}" class="btn btn-primary pull-right btn-xs">
                                    @lang('validation.attributes.payment_info.button_add')
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
            $("#tb_index_payment_infos").DataTable({
                "order": [[ 4, "desc" ],[ 0, "desc" ]]
            });

            var availability = $('#h_timetable').val();
            var availability_array = availability.split(',');
            var column_available = "";
            var cell_available = "";

            for(i=0; i<availability_array.length; i++)
            {
                column_available = availability_array[i].split(';');

                for(j=0; j<column_available.length; j++)
                {
                    cell_available = column_available[j].split(':');

                    if (cell_available[1] == 0)
                    {
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).addClass('text-center danger');
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).html('');
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).attr('title', '@lang('validation.attributes.tag_unavailable')');
                    }
                    else
                    {
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).addClass('text-center success');
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).html('<i class="icon fa fa-check-circle-o"></i>');
                        $('#' + cell_available[0].substr(0,2) + '_' + (i+1)).attr('title', '@lang('validation.attributes.tag_available')');
                    }
                }
            }
        });
    </script>

@endsection