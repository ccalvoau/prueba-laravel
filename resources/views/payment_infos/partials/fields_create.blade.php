<div class="col-md-12">
    <div class="form-group {{ $errors->has('cleaner_id') ? 'has-error' : ''}}">
        <div class="col-sm-2" align="right">
            {!! Form::label('cleaner_id', '* '.Lang::get('validation.attributes.payment_info.cleaner_name').':', ['class' => 'control-label']) !!}
        </div>
        <div class="col-sm-4">
            {!! Form::select('cleaner_id', $cleaners, $cleaner_id ? $cleaner_id : Input::old('cleaner_id'), [
                'id' => 'cleaner_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
        {!! Form::hidden('h_cleaner_id', $cleaner_id, [
            'id' => 'h_cleaner_id'
            ])
        !!}
    </div>
</div>

<div class="col-md-12">
    <div class="form-group {{ $errors->has('bank_id') ? 'has-error' : ''}}">
        <div class="col-sm-2" align="right">
            {!! Form::label('bank_id', '* '.Lang::get('validation.attributes.payment_info.bank_name').':', ['class' => 'control-label']) !!}
        </div>
        <div class="col-sm-5">
            {!! Form::select('bank_id', $banks, Input::old('bank_id'), [
                'id' => 'bank_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group {{ $errors->has('bsb') ? 'has-error' : ''}}">
        {!! Form::label('bsb', '* '.Lang::get('validation.attributes.payment_info.bsb').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('bsb', Input::old('bsb'), [
                'id' => 'bsb',
                'placeholder' => Lang::get('validation.placeholders.bsb'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'data-inputmask' => '"mask": ["999999"]',
                'data-mask' => ''
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group {{ $errors->has('account_number') ? 'has-error' : ''}}">
        {!! Form::label('account_number', '* '.Lang::get('validation.attributes.payment_info.account_number').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('account_number', Input::old('account_number'), [
                'id' => 'account_number',
                'placeholder' => Lang::get('validation.placeholders.account_number'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'data-inputmask' => '"mask": ["9999999999"]',
                'data-mask' => ''
                ])
            !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group" {{ $errors->has('is_default') ? 'has-error' : ''}}>
        {!! Form::label('is_default', '* '.Lang::get('validation.attributes.payment_info.is_default').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div id="div_set_default" class="btn-group btn-toggle">
                <button type="button" class="btn btn-sm btn-primary active" onclick="setDefault();">
                    @lang('validation.attributes.tag_yes')
                </button>
                <button type="button" class="btn btn-sm btn-default" onclick="setDefault();">
                    @lang('validation.attributes.tag_no')
                </button>
            </div>
            {!! Form::text('is_default', Input::old('is_default'), [
                'id' => 'is_default'
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