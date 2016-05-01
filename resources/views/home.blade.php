@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('common.intranet')
@endsection


@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.home.pt_home')
                        <small>- @lang('validation.attributes.home.pt_index')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    @include('layout.partials.flash_message')

                    <div align="center">
                        <img src="{{ asset('assets/img/slider-novus.jpg') }}" alt="@lang('common.company_name')"/>
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

@endsection