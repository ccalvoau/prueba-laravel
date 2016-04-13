<div class="col-md-6">
    <div class="form-group {{ $errors->has('client_type_id') ? 'has-error' : ''}}">
        {!! Form::label('client_type_id', '* '.Lang::get('validation.attributes.client.client_type').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('client_type_id', $client_types, '', ['class' => 'form-control select2', 'required' => '']) !!}
        </div>
    </div>
</div>

<div class="col-md-12">
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('first_name1') ? 'has-error' : ''}}">
        {!! Form::label('first_name1', '* '.Lang::get('validation.attributes.client.first_name1').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('first_name1', null, ['class' => 'form-control', 'required' => 'required', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('last_name1') ? 'has-error' : ''}}">
        {!! Form::label('last_name1', '* '.Lang::get('validation.attributes.client.last_name1').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('last_name1', null, ['class' => 'form-control', 'required' => 'required', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
        {!! Form::label('phone_number', '* '.Lang::get('validation.attributes.client.phone_number').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                </div>
                {!! Form::text('phone_number', null, ['class' => 'form-control', 'required' => '', 'onmouseover' => 'this.focus();', 'data-inputmask' => '"mask": ["9999 999 999"]', 'data-mask' => '']) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group {{ $errors->has('first_name2') ? 'has-error' : ''}}">
        {!! Form::label('first_name2', ''.Lang::get('validation.attributes.client.first_name2').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('first_name2', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('last_name2') ? 'has-error' : ''}}">
        {!! Form::label('last_name2', ''.Lang::get('validation.attributes.client.last_name2').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('last_name2', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
        {!! Form::label('email', '* '.Lang::get('validation.attributes.client.email').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::email('email', null, ['class' => 'form-control text-lowercase', 'required' => '', 'onmouseover' => 'this.focus();']) !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', ''.Lang::get('validation.attributes.client.description').':', ['class' => 'col-sm-4 control-label']) !!}
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <div class="col-md-12">
            {!! Form::textarea('description', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off', 'rows' => '3']) !!}
        </div>
    </div>
</div><!-- /.col12 -->