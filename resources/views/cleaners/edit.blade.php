@extends('layout.master')

@section('content')

<!-- .row -->
<div class="row">
    <!-- single column -->
    <div class="col-md-12">
        <!-- box form elements -->
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Cleaner</h3>
            </div><!-- /.box-header -->

            @include('layout.partials.errors')

            <div class="box-body">

                {!! Form::model($cleaner, [
                    'method' => 'PUT',
                    'url' => ['cleaners', $cleaner->id],
                    'class' => 'form-horizontal'
                ]) !!}

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('doctype_id') ? 'has-error' : ''}}">
                        {!! Form::label('doctype_id', '* Type Id: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('doctype_id', $docTypes, $cleaner->doctype_id, ['class' => 'form-control select2', 'required' => '']) !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('first_name1') ? 'has-error' : ''}}">
                        {!! Form::label('first_name1', '* First Name1: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('first_name1', null, ['class' => 'form-control', 'required' => 'required', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('last_name1') ? 'has-error' : ''}}">
                        {!! Form::label('last_name1', '* Last Name1: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('last_name1', null, ['class' => 'form-control', 'required' => 'required', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                        {!! Form::label('gender', '* Gender: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('gender', ['F' => 'FEMALE', 'M' => 'MALE', '' => 'SELECT AN OPTION'], $cleaner->gender, ['class' => 'form-control select2', 'required' => '']) !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
                        {!! Form::label('phone_number', '* Phone Number: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                {!! Form::text('phone_number', null, ['class' => 'form-control', 'required' => '', 'onmouseover' => 'this.focus();', 'data-inputmask' => '"mask": ["9999 999 999"]', 'data-mask' => '']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                        {!! Form::label('status', '* Status: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('status', ['A' => 'ACTIVE', 'I' => 'INACTIVE', '' => 'SELECT AN OPTION'], $cleaner->status, ['class' => 'form-control select2', 'required' => '']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('id_number') ? 'has-error' : ''}}">
                        {!! Form::label('id_number', '* Id Number: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('id_number', null, ['class' => 'form-control text-uppercase', 'required' => '', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('first_name2') ? 'has-error' : ''}}">
                        {!! Form::label('first_name2', 'First Name2: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('first_name2', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('last_name2') ? 'has-error' : ''}}">
                        {!! Form::label('last_name2', 'Last Name2: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('last_name2', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('birthday') ? 'has-error' : ''}}">
                        {!! Form::label('birthday', '* Birthday: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            <div class="input-group date" id="datepick">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {{--<input id="birthday" name="birthday" type="text" class="form-control" required readonly>
                                ,
                                --}}
                                {!! Form::text('birthday', null, ['class' => 'form-control', 'required' => '', 'data-inputmask' => '"mask": ["9999-99-99"]', 'data-mask' => '']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        {!! Form::label('email', '* Email: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::email('email', null, ['class' => 'form-control text-lowercase', 'required' => '', 'onmouseover' => 'this.focus();']) !!}
                        </div>
                    </div>
                </div><!-- /.col6 -->

                <div class="col-md-12">
                    <hr>
                    <h4 class="text-primary"><i class="icon fa fa-dollar"></i> Taxation</h4>
                </div><!-- /.col12 -->

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('tfn') ? 'has-error' : ''}}">
                        {!! Form::label('tfn', 'TFN: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('tfn', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'data-inputmask' => '"mask": ["999 999 999"]', 'data-mask' => '']) !!}
                        </div>
                    </div>
                </div><!-- /.col6 -->

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('abn') ? 'has-error' : ''}}">
                        {!! Form::label('abn', 'ABN: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('abn', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'data-inputmask' => '"mask": ["99 999 999 999"]', 'data-mask' => '']) !!}
                        </div>
                    </div>
                </div><!-- /.col6 -->

                <div class="col-md-12">
                    <hr>
                    <h4 class="text-primary"><i class="icon fa fa-truck"></i> Transportation</h4>
                </div><!-- /.col12 -->

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('dlicence_no') ? 'has-error' : ''}}">
                        {!! Form::label('dlicence_no', 'Driving Licence: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('dlicence_no', null, ['class' => 'form-control text-uppercase', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off']) !!}
                        </div>
                    </div>
                </div><!-- /.col6 -->

                <div class="col-md-6">
                    <div class="form-group" {{ $errors->has('tfn') ? 'has-error' : ''}}>
                        {!! Form::label('own_vehicle', 'Own Vehicle: ', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            <label>
                                {!! Form::radio('own_vehicle', 1, ($cleaner->own_vechicle == 1), ['class' => 'minimal', 'onmouseover' => 'this.focus();']) !!}
                                YES
                            </label>
                            &nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('own_vehicle', 0, ($cleaner->own_vechicle == 0), ['class' => 'minimal', 'onmouseover' => 'this.focus();']) !!}
                                NO
                            </label>
                        </div>
                    </div>
                </div><!-- /.col6 -->

                <div class="col-md-12">
                    <hr>
                </div><!-- /.col12 -->

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        {!! Form::label('description', 'Description: ', ['class' => 'col-sm-4 control-label']) !!}
                    </div>
                </div><!-- /.col6 -->

                <div class="col-md-12">
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        <div class="col-md-12">
                            {!! Form::textarea('description', null, ['class' => 'form-control', 'onmouseover' => 'this.focus();', 'autocorrect' => 'off', 'rows' => '3']) !!}
                        </div>
                    </div>
                </div><!-- /.col12 -->

                <div class="col-md-12">
                    <hr>
                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                </div><!-- /.col12 -->

                {!! Form::close() !!}
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (single) -->
</div>   <!-- /.row -->

@endsection

@section('script')

@endsection