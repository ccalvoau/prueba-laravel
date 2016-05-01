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
                        <small>- @lang('validation.attributes.pt_show')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.team.show_title_table'): {{ $team->id }}
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('teams::edit', ['id' => $team->id]) }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-pencil"></i>
                                    @lang('validation.attributes.team.button_edit')
                                </a>
                                &nbsp;
                                <a href="{{ route('teams::index') }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.team.button_list')
                                </a>
                            </div>

                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('teams.partials.data')

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