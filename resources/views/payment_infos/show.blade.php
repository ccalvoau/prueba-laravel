@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.payment_info.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.payment_info.pt_payment_info')
                        <small>- @lang('validation.attributes.pt_show')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.payment_info.show_title_table'): {{ $payment_info->id }}
                            </div>
                            <div class="pull-right">
                                @if(Auth::user()->hasAnyRole([1,2]) || Auth::user()->hasAnyRole([3,4]))
                                    <a href="{{ route('payment_infos::edit', ['id' => $payment_info->id]) }}" class="btn btn-default btn-xs">
                                        <i class="fa fa-pencil"></i>
                                        @lang('validation.attributes.payment_info.button_edit')
                                    </a>
                                    &nbsp;
                                @endif
                                @if(Auth::user()->hasAnyRole([1,2]))
                                    <a href="{{ route('payment_infos::index') }}" class="btn btn-default btn-xs">
                                        <i class="fa fa-navicon"></i>
                                        @lang('validation.attributes.payment_info.button_list')
                                    </a>
                                @endif
                                @if(Auth::user()->hasAnyRole([3,4]))
                                    <a href="{{ route('payment_infos::display', [Auth::user()->cleaner_id]) }}" class="btn btn-default btn-xs">
                                        <i class="fa fa-navicon"></i>
                                        @lang('validation.attributes.payment_info.button_list')
                                    </a>
                                @endif
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('payment_infos.partials.data')

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