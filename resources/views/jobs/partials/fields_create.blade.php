<div class="col-md-12">
    <div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
        {!! Form::label('client_id', '* '.Lang::get('validation.attributes.job.client_name').':', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
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
    <div class="form-group {{ $errors->has('client_type_id') ? 'has-error' : ''}}">
        {!! Form::label('client_type_id', '* '.Lang::get('validation.attributes.job.client_type').':', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::select('client_type_id', $client_types, Input::old('client_type_id'), [
                'id' => 'client_type_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group {{ $errors->has('place_id') ? 'has-error' : ''}}">
        {!! Form::label('place_id', '* '.Lang::get('validation.attributes.job.place').':', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-8">
            {!! Form::select('place_id', ["" => Lang::get('validation.attributes.select_an_option')], Input::old('place_id'), [
                'id' => 'place_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group {{ $errors->has('team_id') ? 'has-error' : ''}}">
        {!! Form::label('team_id', '* '.Lang::get('validation.attributes.job.team_alias').':', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::select('team_id', $teams, Input::old('team_id'), [
                'id' => 'team_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-12" id="div_leader" style="display: none">
    <div class="form-group {{ $errors->has('leader') ? 'has-error' : ''}}">
        {!! Form::label('leader', '* '.Lang::get('validation.attributes.job.leader_name').':', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-4">
            {!! Form::text('leader_name', Input::old('leader_name'), [
                'id' => 'leader_name',
                'placeholder' => Lang::get('validation.placeholders.leader_name'),
                'class' => 'form-control',
                'readonly' => 'readonly'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-12">
    @include('jobs.partials.table_previous_jobs')
</div><!-- /.col12 -->

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('job_date') ? 'has-error' : ''}}">
        {!! Form::label('job_date', '* '.Lang::get('validation.attributes.job.job_date').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div class="input-group date" id="dp_job_date">
                <div class="input-group-addon">
                    <i class="icon fa fa-calendar"></i>
                </div>
                {!! Form::text('job_date', Input::old('job_date'), [
                    'id' => 'job_date',
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
</div>

<div class="col-md-6">
    <div class="form-group {{ $errors->has('job_time') ? 'has-error' : ''}}" data-autoclose="true">
        {!! Form::label('job_time', '* '.Lang::get('validation.attributes.job.job_time').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div class="input-group date" id="cp_job_time">
                <div class="input-group-addon">
                    <i class="icon fa fa-clock-o"></i>
                </div>
                {!! Form::text('job_time', Input::old('job_time'), [
                    'id' => 'job_time',
                    'placeholder' => Lang::get('validation.placeholders.time'),
                    'class' => 'form-control',
                    'required' => 'required',
                    'data-inputmask' => '"mask": ["99:99"]',
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
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', ''.Lang::get('validation.attributes.job.description').':', ['class' => 'col-sm-4 control-label']) !!}
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