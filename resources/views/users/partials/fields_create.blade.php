<div class="col-md-6">
    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
        {!! Form::label('email', '* '.Lang::get('validation.attributes.user.email').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="icon fa fa-envelope"></i>
                </div>
                {!! Form::email('email', Input::old('email'), [
                    'id' => 'email',
                    'placeholder' => Lang::get('validation.placeholders.email'),
                    'class' => 'form-control',
                    'required' => 'required',
                    'onmouseover' => 'this.focus();'
                    ])
                !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6" id="div_password_by_email">
    <div class="form-group">
        {!! Form::label('password_by_email', Lang::get('validation.attributes.user.password_by_email'), ['class' => 'control-label col-sm-10 text-danger text-center']) !!}
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
        {!! Form::label('first_name', '* '.Lang::get('validation.attributes.user.first_name').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('first_name', Input::old('first_name'), [
                'id' => 'first_name',
                'placeholder' => Lang::get('validation.placeholders.first_name'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
        {!! Form::label('last_name', '* '.Lang::get('validation.attributes.user.last_name').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('last_name', Input::old('last_name'), [
                'id' => 'last_name',
                'placeholder' => Lang::get('validation.placeholders.last_name'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
    <h4 class="text-primary">
        <i class="icon fa fa-picture-o"></i>
        @lang('validation.attributes.user.profile_picture')
    </h4>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('profile_picture') ? 'has-error' : ''}}">
        {!! Form::label('profile_picture', ''.Lang::get('validation.attributes.user.profile_picture').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::file('profile_picture', [
                'id' => 'profile_picture',
                'class' => 'form-control'
                ])
            !!}
            <br />
            <p class="text-danger text-justify">
                @lang('validation.attributes.user.profile_picture_notify')
            </p>
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-6" align="center">
    <div class="small-box bg-primary" style="width: 180px; height: 180px;">
        <div class="inner">
            @if(isset($user))
                {!! Html::image('assets/img/profile_pictures/'.$user->profile_picture, '', ['id' => 'profile_picture_box', 'width' => '160px', 'height' => '160px', 'align' => 'center']) !!}
            @else
                {!! Html::image('assets/img/profile_pictures/default.jpg', '', ['id' => 'profile_picture_box', 'width' => '160px', 'height' => '160px', 'align' => 'center']) !!}
            @endif
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
    <h4 class="text-primary">
        <i class="icon fa fa-unlock-alt"></i>
        @lang('validation.attributes.user.permission')
    </h4>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
        {!! Form::label('role_id', '* '.Lang::get('validation.attributes.user.role').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('role_id', $roles, Input::old('role_id'), [
                'id' => 'role_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', ''.Lang::get('validation.attributes.user.description').':', ['class' => 'col-sm-4 control-label']) !!}
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <div class="col-md-12">
            {!! Form::textarea('description', null, [
                'id' => 'description',
                'placeholder' => Lang::get('validation.placeholders.description'),
                'class' => 'form-control',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off',
                'rows' => '3'
                ])
            !!}
        </div>
    </div>
</div><!-- /.col12 -->