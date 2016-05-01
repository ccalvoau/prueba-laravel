<div class="col-md-6">
    <div class="form-group {{ $errors->has('alias') ? 'has-error' : ''}}">
        {!! Form::label('alias', '* '.Lang::get('validation.attributes.team.alias').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('alias', Input::old('alias'), [
                'id' => 'alias',
                'placeholder' => Lang::get('validation.placeholders.alias'),
                'class' => 'form-control',
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
    <div class="form-group {{ $errors->has('leader') ? 'has-error' : ''}}">
        {!! Form::label('leader', '* '.Lang::get('validation.attributes.team.leader').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('leader', $leaders, Input::old('leader'), [
                'id' => 'leader',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
            {!! Form::hidden('h_leader', Input::old('h_leader'), [
                'id' => 'h_leader'
                ])
            !!}
            {!! Form::hidden('h_cleaner_id2', null, [
                'id' => 'h_cleaner_id2'
                ])
            !!}
            {!! Form::hidden('h_cleaner_id3', null, [
                'id' => 'h_cleaner_id3'
                ])
            !!}
            {!! Form::hidden('h_cleaner_id4', null, [
                'id' => 'h_cleaner_id4'
                ])
            !!}
            {!! Form::hidden('h_cleaner_id5', null, [
                'id' => 'h_cleaner_id5'
                ])
            !!}
            {!! Form::hidden('h_cleaner_id6', null, [
                'id' => 'h_cleaner_id6'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group {{ $errors->has('cleaners') ? 'has-error' : ''}}">
        {!! Form::label('cleaners', '* '.Lang::get('validation.attributes.team.cleaners').':', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('cleaners', $cleaners, Input::old('cleaners'), [
                'id' => 'cleaners',
                'class' => 'form-control select2',
                'multiple' => 'multiple',
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
    <div class="form-group {{ $errors->has('vehicle_id') ? 'has-error' : ''}}">
        {!! Form::label('vehicle_id', ''.Lang::get('validation.attributes.team.vehicle_id').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('vehicle_id', $vehicles, Input::old('vehicle_id'), [
                'id' => 'vehicle_id',
                'class' => 'form-control'
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
        {!! Form::label('description', ''.Lang::get('validation.attributes.team.description').':', ['class' => 'col-sm-4 control-label']) !!}
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