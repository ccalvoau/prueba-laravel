@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.place.page_title')
@endsection

@section('map_js')
    {!! $map['js'] !!}
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.place.pt_place')
                        <small>- @lang('validation.attributes.pt_show')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.place.show_title_table'): {{ $place->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('places::edit', ['id' => $place->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-pencil"></i>
                                    @lang('validation.attributes.place.button_edit')
                                </a>
                                &nbsp;
                                <a href="{{ route('places::index') }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.place.button_list')
                                </a>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('places.partials.data')

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