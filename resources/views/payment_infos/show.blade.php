@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('payment_info.page_title')
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

                    <!-- box form elements -->
                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">
                                @lang('validation.attributes.payment_info.show_title_table'): {{ $payment_info->id }}
                            </h3>
                            <a href="{{ route('payment_infos.index') }}" class="btn btn-default pull-right btn-xs">
                                @lang('validation.attributes.payment_info.button_list')
                            </a>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('payment_infos.partials.data')

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