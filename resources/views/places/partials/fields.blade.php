<div class="col-md-6">
    <div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
        {!! Form::label('client_id', '* '.Lang::get('validation.attributes.place.client_name').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('client_id', $clients, '', ['class' => 'form-control select2', 'required' => 'required']) !!}
        </div>
    </div>
</div>

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('unit_number') ? 'has-error' : ''}}">
        {!! Form::label('unit_number', '* '.Lang::get('validation.attributes.place.unit_number').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('unit_number', null, ['class' => 'form-control', 'required' => 'required', 'onmouseover' => 'this.focus();']) !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('street_name') ? 'has-error' : ''}}">
        {!! Form::label('street_name', '* '.Lang::get('validation.attributes.place.street_name').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('street_name', null, ['class' => 'form-control text-uppercase', 'required' => 'required', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group {{ $errors->has('street_number') ? 'has-error' : ''}}">
        {!! Form::label('street_number', '* '.Lang::get('validation.attributes.place.street_number').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('street_number', null, ['class' => 'form-control', 'required' => 'required', 'onmouseover' => 'this.focus();']) !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('street_type_id') ? 'has-error' : ''}}">
        {!! Form::label('street_type_id', '* '.Lang::get('validation.attributes.place.street_type').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('street_type_id', $street_types, '', ['class' => 'form-control select2', 'required' => 'required']) !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('state_id') ? 'has-error' : ''}}">
        {!! Form::label('state_id', '* '.Lang::get('validation.attributes.place.state').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('state_id', $states, '', ['class' => 'form-control select2', 'required' => 'required']) !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('postcode') ? 'has-error' : ''}}">
        {!! Form::label('postcode', ''.Lang::get('validation.attributes.place.postcode').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('postcode', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();']) !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('suburb') ? 'has-error' : ''}}">
        {!! Form::label('suburb', '* '.Lang::get('validation.attributes.place.suburb').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('suburb', null, ['class' => 'form-control text-uppercase', 'required' => 'required', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('referencep') ? 'has-error' : ''}}">
        {!! Form::label('referencep', ''.Lang::get('validation.attributes.place.referencep').':', ['class' => 'col-sm-4 control-label']) !!}
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <div class="form-group {{ $errors->has('referencep') ? 'has-error' : ''}}">
        <div class="col-md-12">
            {!! Form::textarea('referencep', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off', 'rows' => '3']) !!}
        </div>
    </div>
</div><!-- /.col12 -->