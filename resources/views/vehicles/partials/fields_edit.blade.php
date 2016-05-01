<div class="col-md-6">
    <div class="form-group {{ $errors->has('registration_no') ? 'has-error' : ''}}">
        {!! Form::label('registration_no', '* '.Lang::get('validation.attributes.vehicle.registration_no').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('registration_no', Input::old('registration_no'), [
                'id' => 'registration_no',
                'placeholder' => Lang::get('validation.placeholders.registration_no'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('engine_no') ? 'has-error' : ''}}">
        {!! Form::label('engine_no', '* '.Lang::get('validation.attributes.vehicle.engine_no').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('engine_no', Input::old('engine_no'), [
                'id' => 'engine_no',
                'placeholder' => Lang::get('validation.placeholders.engine_no'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('make') ? 'has-error' : ''}}">
        {!! Form::label('make', '* '.Lang::get('validation.attributes.vehicle.make').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('make', Input::old('make'), [
                'id' => 'make',
                'placeholder' => Lang::get('validation.placeholders.make'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('colour') ? 'has-error' : ''}}">
        {!! Form::label('colour', '* '.Lang::get('validation.attributes.vehicle.colour').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('colour', Input::old('colour'), [
                'id' => 'colour',
                'placeholder' => Lang::get('validation.placeholders.colour'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('owner') ? 'has-error' : ''}}">
        {!! Form::label('owner', '* '.Lang::get('validation.attributes.vehicle.owner').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('owner', Input::old('owner'), [
                'id' => 'owner',
                'placeholder' => Lang::get('validation.placeholders.owner'),
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
    <div class="form-group {{ $errors->has('vin') ? 'has-error' : ''}}">
        {!! Form::label('vin', '* '.Lang::get('validation.attributes.vehicle.vin').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('vin', Input::old('vin'), [
                'id' => 'vin',
                'placeholder' => Lang::get('validation.placeholders.vin'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('plate') ? 'has-error' : ''}}">
        {!! Form::label('plate', '* '.Lang::get('validation.attributes.vehicle.plate').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('plate', Input::old('plate'), [
                'id' => 'plate',
                'placeholder' => Lang::get('validation.placeholders.plate'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
        {!! Form::label('year', '* '.Lang::get('validation.attributes.vehicle.year').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div class="input-group date" id="dp_year">
                <div class="input-group-addon">
                    <i class="icon fa fa-calendar"></i>
                </div>
                {!! Form::text('year', Input::old('year'), [
                    'id' => 'year',
                    'placeholder' => Lang::get('validation.placeholders.year'),
                    'class' => 'form-control',
                    'required' => 'required',
                    'data-inputmask' => '"mask": ["9999"]',
                    'data-mask' => ''
                    ])
                !!}
            </div>
        </div>
    </div>

    <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
        {!! Form::label('type', '* '.Lang::get('validation.attributes.vehicle.type').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('type', Input::old('type'), [
                'id' => 'type',
                'placeholder' => Lang::get('validation.placeholders.type'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('registration_expire') ? 'has-error' : ''}}">
        {!! Form::label('registration_expire', '* '.Lang::get('validation.attributes.vehicle.registration_expire').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div class="input-group date" id="dp_registration_expire">
                <div class="input-group-addon">
                    <i class="icon fa fa-calendar"></i>
                </div>
                {!! Form::text('registration_expire', Input::old('registration_expire'), [
                    'id' => 'registration_expire',
                    'placeholder' => Lang::get('validation.placeholders.date'),
                    'class' => 'form-control',
                    'required' => 'required',
                    'data-inputmask' => '"mask": ["9999-99-99"]',
                    'data-mask' => ''
                    ])
                !!}
            </div>
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('vehicle_picture') ? 'has-error' : ''}}">
        {!! Form::label('vehicle_picture', ''.Lang::get('validation.attributes.vehicle.vehicle_picture').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::file('vehicle_picture', [
                'id' => 'vehicle_picture',
                'class' => 'form-control'
                ])
            !!}
        </div>
    </div>
</div><!-- /.col12 -->

<div class="col-md-12" align="center">
    <div id="picture_box" class="small-box bg-primary" style="width: 420px; height: 420px; display: none;">
        <div class="inner">
            @if(isset($vehicle))
                <input type="hidden" id="h_vehicle_picture" name="h_vehicle_picture" value="{{ $vehicle->vehicle_picture }}">
                @if(isset($vehicle->vehicle_picture))
                    {!! Html::image('assets/img/vehicle_pictures/'.$vehicle->vehicle_picture, '', ['id' => 'vehicle_picture_box', 'width' => '400px', 'height' => '400px', 'align' => 'center']) !!}
                @else
                    {!! Html::image('assets/img/vehicle_pictures/default.jpg', '', ['id' => 'vehicle_picture_box', 'width' => '400px', 'height' => '400px', 'align' => 'center']) !!}
                @endif
            @else
                {!! Html::image('assets/img/vehicle_pictures/default.jpg', '', ['id' => 'vehicle_picture_box', 'width' => '400px', 'height' => '400px', 'align' => 'center']) !!}
            @endif
        </div>
    </div>
</div><!-- /.col12 -->

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
                ($vehicle->status == 1) ? 'TRUE' : 'FALSE', [
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
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', ''.Lang::get('validation.attributes.client.description').':', ['class' => 'col-sm-4 control-label']) !!}
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <div class="col-md-12">
            {!! Form::textarea('description', Input::old('description'), [
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