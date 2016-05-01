@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.user.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @lang('validation.attributes.user.pt_user')
                        <small>- @lang('validation.attributes.pt_show')</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-solid box-primary">

                        <div class="box-header with-border">
                            <div class="box-title">
                                @lang('validation.attributes.user.show_title_table'): {{ $user->id }}
                            </div>
                            <div class="pull-right">
                                @if(Auth::user()->hasAnyRole([1,2]) || (Auth::user()->hasAnyRole([3,4]) && Auth::user()->id == $item->user_id ))
                                    <a href="{{ route('users::edit', ['id' => $user->id]) }}" class="btn btn-default btn-xs">
                                        <i class="fa fa-pencil"></i>
                                        @lang('validation.attributes.user.button_edit')
                                    </a>
                                    &nbsp;
                                @endif
                                <a href="{{ route('users::index') }}" class="btn btn-default btn-xs">
                                    <i class="fa fa-navicon"></i>
                                    @lang('validation.attributes.user.button_list')
                                </a>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            @include('users.partials.data')

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