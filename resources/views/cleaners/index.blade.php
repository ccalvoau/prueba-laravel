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
                                @lang('validation.attributes.cleaner.index_title_table')
                            </div>
                            @if(Auth::user()->hasAnyRole([1,2]))
                                <a href="{{ route('cleaners::create') }}" class="btn btn-default pull-right btn-xs">
                                    <i class="fa fa-plus-square"></i>
                                    @lang('validation.attributes.cleaner.button_add')
                                </a>
                            @endif
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
            var table = $("#tb_index_cleaners").DataTable({
                //"scrollX": v_scrollX,
                "order": [[ 16, "asc" ],[ 1, "asc" ]],
                "columnDefs": [
                    {
                        "targets": [ 2, 3, 5, 7, 8, 9, 11, 12, 14, 17, 18, 19 ],
                        "visible": false,
                        //"searchable": false
                    }
                ],
                "language": {
                    "decimal": ",",
                    "thousands": "."
                }
            });

            $('a.toggle-vis').on( 'click', function (e) {
                e.preventDefault();

                class_button = $(this).attr('class');
                class_button.search('default') >= 0 ?
                        $(this).removeClass( "btn-default" ).addClass( "btn-primary" ) :
                        $(this).removeClass( "btn-primary" ).addClass( "btn-default" );

                // Get the column API object
                var column = table.column( $(this).attr('data-column') );

                // Toggle the visibility
                column.visible( ! column.visible() );

                //v_scrollX ? false : true;
            } );
        });
    </script>

@endsection