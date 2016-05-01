@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.vehicle.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.vehicle.pt_vehicle')
                        <small>- @lang('validation.attributes.pt_show')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.vehicle.show_title_table'): {{ $vehicle->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('vehicles::edit', ['id' => $vehicle->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-pencil"></i>
                                    @lang('validation.attributes.vehicle.button_edit')
                                </a>
                                &nbsp;
                                <a href="{{ route('vehicles::index') }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.vehicle.button_list')
                                </a>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('vehicles.partials.data')

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

    <!-- Page script -->
    <script>
        $(document).ready(function () {
        });
    </script>

@endsection