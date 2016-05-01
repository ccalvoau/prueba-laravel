@extends('layout_auth.auth')

@section('title')
	@lang('common.company_name_capital') - @lang('validation.attributes.auth.set_password_title')
@endsection

@section('content')

	<div class="container-fluid" style="width: 65%">
		<div class="row">

			<div class="col-md-12">

				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						@lang('validation.attributes.auth.pt_auth')
						<small>@lang('validation.attributes.auth.pt_set_password')</small>
					</h1>
				</section>

				<!-- Main content -->
				<section class="content">

					@include('layout_auth.partials.errors')

					<div class="box box-solid box-primary">

						<div class="box-header with-border">
							@lang('validation.attributes.auth.password_set_title')
						</div><!-- /.box-header -->

						<div class="box-body">

							{!! Form::open(['route' => 'set_password', 'class' => 'form-horizontal', 'method' => 'POST', 'role' => 'form']) !!}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
									{!! Form::label('email', '* '.Lang::get('validation.attributes.auth.email').':', ['class' => 'col-sm-4 control-label']) !!}
									<div class="col-sm-6">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="icon fa fa-envelope"></i>
											</div>
											{!! Form::text('email', $email, [
											    'id' => 'email',
											    'placeholder' => Lang::get('validation.placeholders.email'),
											    'class' => 'form-control',
											    'type' => 'email',
											    'required' => 'required',
											    'readonly' => 'readonly'
											    ])
											!!}
										</div>
									</div>
								</div>

								<div class="form-group">
									{!! Form::label('password', '* '.Lang::get('validation.attributes.auth.password').':', ['class' => 'col-sm-4 control-label']) !!}
									<div class="col-sm-6">
										{!! Form::password('password', [
										    'id' => 'password',
										    'placeholder' => Lang::get('validation.placeholders.password'),
										    'class' => 'form-control',
										    'onmouseover' => 'this.focus();',
										    'required' => 'required'
										    ])
										!!}
									</div>
								</div>

								<div class="form-group">
									{!! Form::label('password_confirmation', '* '.Lang::get('validation.attributes.auth.password_confirmation').':', ['class' => 'col-sm-4 control-label']) !!}
									<div class="col-sm-6">
										{!! Form::password('password_confirmation', [
										    'id' => 'password_confirmation',
										    'placeholder' => Lang::get('validation.placeholders.password_confirmation'),
										    'class' => 'form-control',
										    'onmouseover' => 'this.focus();',
										    'required' => 'required'
										    ])
										!!}
									</div>
								</div>

                                <hr />

								<div class="form-group">
									<div class="col-sm-6 col-sm-offset-4">
										<button type="submit" class="btn btn-primary">
											@lang('validation.attributes.auth.button_set_password')
										</button>
									</div>
								</div>

							{!! Form::close() !!}

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

@endsection