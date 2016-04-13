@extends('layout_auth.auth')

@section('title')
	@lang('common.company_name_capital') - @lang('auth.login')
@endsection

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
            @lang('pages.auth.password_title')
            <small>@lang('pages.auth.password_description')</small>
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
							@lang('auth.forgot_password_title')
						</div>

						<div class="panel-body">

							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							<form class="form-horizontal" role="form" method="POST" action="{{ route('password') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="form-group">
									<label class="col-md-4 control-label">@lang('validation.attributes.email')</label>
									<div class="col-md-6">
										{!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary">
											<i class="fa fa-envelope"></i>
											@lang('auth.forgot_password_button')
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
	<!-- /.content -->
@endsection

@section('scripts')

@endsection