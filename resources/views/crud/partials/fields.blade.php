<div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
    {!! Form::label('first_name', 'First Name: ', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('first_name', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();']) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
    {!! Form::label('last_name', 'Last Name: ', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('last_name', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();']) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('birthday') ? 'has-error' : ''}}">
    {!! Form::label('birthday', 'Birthday: ', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        <div class="input-group date" id="datepick">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status: ', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('status', $status, null, ['class' => 'form-control select2', 'required' => '']) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('facebook') ? 'has-error' : ''}}">
    {!! Form::label('facebook', 'Facebook: ', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('facebook', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();']) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('twitter') ? 'has-error' : ''}}">
    {!! Form::label('twitter', 'Twitter: ', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('twitter', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();']) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description: ', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off', 'rows' => '3']) !!}
    </div>
</div>