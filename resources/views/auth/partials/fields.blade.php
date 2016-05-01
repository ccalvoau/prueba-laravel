<div class="form-group" {{ $errors->has('first_name') ? 'has-error' : ''}}>
    {!! Form::label('first_name', '* '.Lang::get('validation.attributes.auth.first_name').':', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('first_name', Input::old('first_name'), [
            'id' => 'first_name',
            'placeholder' => Lang::get('validation.placeholders.first_name'),
            'class' => 'form-control text-uppercase',
            'onmouseover' => 'this.focus();',
            'required' => 'required'
            ])
        !!}
    </div>
</div>

<div class="form-group" {{ $errors->has('last_name') ? 'has-error' : ''}}>
    {!! Form::label('last_name', '* '.Lang::get('validation.attributes.auth.last_name').':', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('last_name', Input::old('last_name'), [
            'id' => 'last_name',
            'placeholder' => Lang::get('validation.placeholders.last_name'),
            'class' => 'form-control text-uppercase',
            'onmouseover' => 'this.focus();',
            'required' => 'required'
            ])
        !!}
    </div>
</div>

<div class="form-group" {{ $errors->has('email') ? 'has-error' : ''}}>
    {!! Form::label('email', '* '.Lang::get('validation.attributes.auth.email').':', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="icon fa fa-envelope"></i>
            </div>
            {!! Form::text('email', Input::old('email'), [
                'id' => 'email',
                'placeholder' => Lang::get('validation.placeholders.email'),
                'class' => 'form-control',
                'onmouseover' => 'this.focus();',
                'type' => 'email',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>
</div>

<div class="form-group" {{ $errors->has('password') ? 'has-error' : ''}}>
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

<div class="form-group" {{ $errors->has('password_confirmation') ? 'has-error' : ''}}>
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