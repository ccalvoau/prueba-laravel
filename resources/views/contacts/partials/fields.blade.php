<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', '* '.Lang::get('validation.attributes.contact.name').':', ['class' => 'control-label']) !!}
    {!! Form::text('name', Input::old('name'), [
        'id' => 'name',
        'placeholder' => Lang::get('validation.placeholders.name'),
        'class' => 'form-control',
        'required' => 'required',
        'onmouseover' => 'this.focus();',
        'autocorrect' => 'off'
        ])
    !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', '* '.Lang::get('validation.attributes.contact.emailatt').':', ['class' => 'control-label']) !!}
    {!! Form::text('email', Input::old('email'), [
        'id' => 'email',
        'placeholder' => Lang::get('validation.placeholders.email'),
        'class' => 'form-control',
        'required' => 'required',
        'onmouseover' => 'this.focus();',
        'autocorrect' => 'off'
        ])
    !!}
</div>

<div class="form-group {{ $errors->has('user_message') ? 'has-error' : ''}}">
    {!! Form::label('user_message', '* '.Lang::get('validation.attributes.contact.message').':', ['class' => 'control-label']) !!}
    {!! Form::textarea('user_message', Input::old('user_message'), [
        'id' => 'user_message',
        'placeholder' => Lang::get('validation.placeholders.message'),
        'class' => 'form-control',
        'required' => 'required',
        'onmouseover' => 'this.focus();',
        'autocorrect' => 'off',
        'rows' => '4'
        ])
    !!}
</div>