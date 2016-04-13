@extends('layout_auth.auth')

@section('title')
    @lang('common.company_name_capital') - @lang('auth.login')
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @lang('pages.auth.register_title')
            <small>@lang('pages.auth.register_description')</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        @include('layout_auth.partials.errors')

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">

                        <div class="panel-heading">
                            @lang('auth.register_title')
                        </div>

                        <div class="panel-body">

                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-md-4 control-label">@lang('validation.attributes.name')</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">@lang('validation.attributes.email')</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">@lang('validation.attributes.password')</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">@lang('validation.attributes.password_confirmation')</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            @lang('auth.register_button')
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $("#li_register").addClass("active");
        });
    </script>
@endsection