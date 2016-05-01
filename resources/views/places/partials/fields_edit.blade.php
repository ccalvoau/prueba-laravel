<div class="col-md-6">
    <div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
        {!! Form::label('client_id', '* '.Lang::get('validation.attributes.place.client_name').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('client_id', $clients, Input::old('client_id'), [
                'id' => 'client_id',
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
    <div class="form-group {{ $errors->has('unit_number') ? 'has-error' : ''}}">
        {!! Form::label('unit_number', '* '.Lang::get('validation.attributes.place.unit_number').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('unit_number', Input::old('unit_number'), [
                'id' => 'unit_number',
                'placeholder' => Lang::get('validation.placeholders.unit_number'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('street_name') ? 'has-error' : ''}}">
        {!! Form::label('street_name', '* '.Lang::get('validation.attributes.place.street_name').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('street_name', Input::old('street_name'), [
                'id' => 'street_name',
                'placeholder' => Lang::get('validation.placeholders.street_name'),
                'class' => 'form-control text-uppercase',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group {{ $errors->has('street_number') ? 'has-error' : ''}}">
        {!! Form::label('street_number', '* '.Lang::get('validation.attributes.place.street_number').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('street_number', Input::old('street_number'), [
                'id' => 'street_number',
                'placeholder' => Lang::get('validation.placeholders.street_number'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('street_type_id') ? 'has-error' : ''}}">
        {!! Form::label('street_type_id', '* '.Lang::get('validation.attributes.place.street_type').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('street_type_id', $street_types, Input::old('street_type_id'), [
                'id' => 'street_type_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('state_id') ? 'has-error' : ''}}">
        {!! Form::label('state_id', '* '.Lang::get('validation.attributes.place.state').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('state_id', $states, Input::old('state_id'), [
                'id' => 'state_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('postcode') ? 'has-error' : ''}}">
        {!! Form::label('postcode', ''.Lang::get('validation.attributes.place.postcode').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('postcode', Input::old('postcode'), [
                'id' => 'postcode',
                'placeholder' => Lang::get('validation.placeholders.postcode'),
                'class' => 'form-control',
                'onmouseover' => 'this.focus();'
                ])
            !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('suburb') ? 'has-error' : ''}}">
        {!! Form::label('suburb', '* '.Lang::get('validation.attributes.place.suburb').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('suburb', Input::old('suburb'), [
                'id' => 'suburb',
                'placeholder' => Lang::get('validation.placeholders.suburb'),
                'class' => 'form-control text-uppercase',
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
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
        {!! Form::label('status', '* '.Lang::get('validation.attributes.place.status').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('status', [
                'TRUE' => Lang::get('validation.attributes.tag_active'),
                'FALSE' => Lang::get('validation.attributes.tag_inactive'),
                '' => Lang::get('validation.attributes.select_an_option')
                ],
                ($place->status == 1) ? 'TRUE' : 'FALSE', [
                    'id' => 'status',
                    'class' => 'form-control select2',
                    'required' => 'required'
                    ])
            !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('reference') ? 'has-error' : ''}}">
        {!! Form::label('reference', ''.Lang::get('validation.attributes.place.reference').':', ['class' => 'col-sm-4 control-label']) !!}
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <div class="form-group {{ $errors->has('reference') ? 'has-error' : ''}}">
        <div class="col-md-12">
            {!! Form::textarea('reference', Input::old('reference'), [
                'id' => 'reference',
                'placeholder' => Lang::get('validation.placeholders.reference'),
                'class' => 'form-control',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off',
                'rows' => '3'
                ])
            !!}
        </div>
    </div>
</div><!-- /.col12 -->