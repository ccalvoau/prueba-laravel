@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('place.page_title')
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

                            <!-- box form elements -->
                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @lang('validation.attributes.place.show_title_table'): {{ $place->id }}
                            </h3>
                            <a href="{{ route('places.index') }}" class="btn btn-default pull-right btn-xs">
                                @lang('validation.attributes.place.button_list')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('places.partials.data')

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

    <!-- Page script -->
    <script>
        $(document).ready(function () {
        });
    </script>

@endsection