<div class="col-md-6">
    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
        {!! Form::label('email', '* '.Lang::get('validation.attributes.cleaner.email').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="icon fa fa-envelope"></i>
                </div>
                {!! Form::email('email', Input::old('email'), [
                    'id' => 'email',
                    'placeholder' => Lang::get('validation.placeholders.email'),
                    'class' => 'form-control',
                    'required' => 'required',
                    'onmouseover' => 'this.focus();'
                    ])
                !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('password_by_email', Lang::get('validation.attributes.cleaner.password_by_email'), ['class' => 'control-label col-sm-10 text-danger text-center']) !!}
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('document_id') ? 'has-error' : ''}}">
        {!! Form::label('document_id', '* '.Lang::get('validation.attributes.cleaner.id_type').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('document_id', $documents, Input::old('document_id'), [
                'id' => 'document_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('first_name1') ? 'has-error' : ''}}">
        {!! Form::label('first_name1', '* '.Lang::get('validation.attributes.cleaner.first_name1').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('first_name1', Input::old('first_name1'), [
                'id' => 'first_name1',
                'placeholder' => Lang::get('validation.placeholders.first_name1'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('last_name1') ? 'has-error' : ''}}">
        {!! Form::label('last_name1', '* '.Lang::get('validation.attributes.cleaner.last_name1').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('last_name1', Input::old('last_name1'), [
                'id' => 'last_name1',
                'placeholder' => Lang::get('validation.placeholders.last_name1'),
                'class' => 'form-control',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
        {!! Form::label('gender', '* '.Lang::get('validation.attributes.cleaner.gender').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('gender', [
                'F' => Lang::get('validation.attributes.tag_female'),
                'M' => Lang::get('validation.attributes.tag_male'),
                '' => Lang::get('validation.attributes.select_an_option')
                ],
                Input::old('gender'), [
                    'id' => 'gender',
                    'class' => 'form-control select2',
                    'required' => 'required'
                    ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('country_id') ? 'has-error' : ''}}">
        {!! Form::label('country_id', '* '.Lang::get('validation.attributes.cleaner.nationality').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('country_id', $nationalities, Input::old('country_id'), [
                'id' => 'country_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('english_level_id') ? 'has-error' : ''}}">
        {!! Form::label('english_level_id', '* '.Lang::get('validation.attributes.cleaner.english_level').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('english_level_id', $english_levels, Input::old('english_level_id'), [
                'id' => 'english_level_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group {{ $errors->has('id_number') ? 'has-error' : ''}}">
        {!! Form::label('id_number', '* '.Lang::get('validation.attributes.cleaner.ide').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('id_number', Input::old('id_number'), [
                'id' => 'id_number',
                'placeholder' => Lang::get('validation.placeholders.identification'),
                'class' => 'form-control text-uppercase',
                'required' => 'required',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('first_name2') ? 'has-error' : ''}}">
        {!! Form::label('first_name2', ''.Lang::get('validation.attributes.cleaner.first_name2').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('first_name2', Input::old('first_name2'), [
                'id' => 'first_name2',
                'placeholder' => Lang::get('validation.placeholders.first_name2'),
                'class' => 'form-control',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('last_name2') ? 'has-error' : ''}}">
        {!! Form::label('last_name2', ''.Lang::get('validation.attributes.cleaner.last_name2').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('last_name2', Input::old('last_name2'), [
                'id' => 'last_name2',
                'placeholder' => Lang::get('validation.placeholders.last_name2'),
                'class' => 'form-control',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : ''}}">
        {!! Form::label('date_of_birth', '* '.Lang::get('validation.attributes.cleaner.date_of_birth').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div class="input-group date" id="dp_date_of_birth">
                <div class="input-group-addon">
                    <i class="icon fa fa-calendar"></i>
                </div>
                {!! Form::text('date_of_birth', Input::old('date_of_birth'), [
                    'id' => 'date_of_birth',
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

    <div class="form-group {{ $errors->has('language_id') ? 'has-error' : ''}}">
        {!! Form::label('language_id', '* '.Lang::get('validation.attributes.cleaner.mother_tongue').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('language_id', $languages, Input::old('language_id'), [
                'id' => 'language_id',
                'class' => 'form-control select2',
                'required' => 'required'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
        {!! Form::label('phone_number', '* '.Lang::get('validation.attributes.cleaner.phone_number').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="icon fa fa-phone"></i>
                </div>
                {!! Form::text('phone_number', Input::old('phone_number'), [
                    'id' => 'phone_number',
                    'placeholder' => Lang::get('validation.placeholders.phone_number'),
                    'class' => 'form-control',
                    'required' => 'required',
                    'onmouseover' => 'this.focus();',
                    'data-inputmask' => '"mask": ["9999 999 999"]',
                    'data-mask' => ''])
                !!}
            </div>
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
    <h4 class="text-primary">
        <i class="icon fa fa-picture-o"></i>
        @lang('validation.attributes.cleaner.profile_picture')
    </h4>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('profile_picture') ? 'has-error' : ''}}">
        {!! Form::label('profile_picture', ''.Lang::get('validation.attributes.cleaner.profile_picture').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::file('profile_picture', [
                'id' => 'profile_picture',
                'class' => 'form-control'
                ])
            !!}
            <br />
            <p class="text-danger">
                @lang('validation.attributes.cleaner.profile_picture_notify')
            </p>
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-6" align="center">
    <div class="small-box bg-primary" style="width: 180px; height: 180px;">
        <div class="inner">
            @if(isset($cleaner))
                {!! Html::image('assets/img/profile_pictures/'.$cleaner->profile_picture, '', ['id' => 'profile_picture_box', 'width' => '160px', 'height' => '160px', 'align' => 'center']) !!}
            @else
                {!! Html::image('assets/img/profile_pictures/default.jpg', '', ['id' => 'profile_picture_box', 'width' => '160px', 'height' => '160px', 'align' => 'center']) !!}
            @endif
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
    <h4 class="text-primary">
        <i class="icon fa fa-dollar"></i>
        @lang('validation.attributes.cleaner.taxation')
    </h4>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('tfn') ? 'has-error' : ''}}">
        {!! Form::label('tfn', ''.Lang::get('validation.attributes.cleaner.tfn').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('tfn', Input::old('tfn'), [
                'id' => 'tfn',
                'placeholder' => Lang::get('validation.placeholders.tfn'),
                'class' => 'form-control',
                'onmouseover' => 'this.focus();',
                'data-inputmask' => '"mask": ["999 999 999"]',
                'data-mask' => ''
                ])
            !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('abn') ? 'has-error' : ''}}">
        {!! Form::label('abn', ''.Lang::get('validation.attributes.cleaner.abn').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('abn', Input::old('abn'), [
                'id' => 'abn',
                'placeholder' => Lang::get('validation.placeholders.abn'),
                'class' => 'form-control',
                'onmouseover' => 'this.focus();',
                'data-inputmask' => '"mask": ["99 999 999 999"]',
                'data-mask' => ''
                ])
            !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
    <h4 class="text-primary">
        <i class="icon fa fa-truck"></i>
        @lang('validation.attributes.cleaner.transportation')
    </h4>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('licence_no') ? 'has-error' : ''}}">
        {!! Form::label('licence_no', ''.Lang::get('validation.attributes.cleaner.driving_licence').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('licence_no', Input::old('licence_no'), [
                'id' => 'licence_no',
                'placeholder' => Lang::get('validation.placeholders.driving_licence'),
                'class' => 'form-control text-uppercase',
                'onmouseover' => 'this.focus();',
                'autocorrect' => 'off'
                ])
            !!}
        </div>
    </div>

    <div class="form-group" {{ $errors->has('own_vehicle') ? 'has-error' : ''}}>
        {!! Form::label('own_vehicle', '* '.Lang::get('validation.attributes.cleaner.own_vehicle').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            <div id="div_own_vehicle" class="btn-group btn-toggle">
                <button type="button" class="btn btn-sm btn-default" onclick="setOwnVehicle();">
                    @lang('validation.attributes.tag_yes')
                </button>
                <button type="button" class="btn btn-sm btn-primary active" onclick="setOwnVehicle();">
                    @lang('validation.attributes.tag_no')
                </button>
            </div>
            {!! Form::hidden('own_vehicle', Input::old('own_vehicle'), [
                'id' => 'own_vehicle'
                ])
            !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('licence_picture') ? 'has-error' : ''}}">
        {!! Form::label('licence_picture', ''.Lang::get('validation.attributes.cleaner.licence_picture').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::file('licence_picture', [
                'id' => 'licence_picture',
                'class' => 'form-control'
                ])
            !!}
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-6">
    <div class="small-box bg-primary" style="width: 420px; height: 280px;">
        <div class="inner">
            @if(isset($cleaner))
                {!! Html::image('assets/img/licence_pictures/'.$cleaner->licence_picture, '', ['id' => 'licence_picture_box', 'width' => '400px', 'height' => '260px', 'align' => 'center']) !!}
            @else
                {!! Html::image('assets/img/licence_pictures/default.jpg', '', ['id' => 'licence_picture_box', 'width' => '400px', 'height' => '260px', 'align' => 'center']) !!}
            @endif
        </div>
    </div>
</div><!-- /.col6 -->

<div class="col-md-12">
    <hr>
    <h4 class="text-primary">
        <i class="icon fa fa-unlock-alt"></i>
        @lang('validation.attributes.cleaner.permission')
    </h4>
</div><!-- /.col12 -->

<div class="col-md-6">
    <div class="form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
        {!! Form::label('role_id', '* '.Lang::get('validation.attributes.cleaner.role_id').':', ['class' => 'col-sm-4 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('role_id', $roles, Input::old('role_id'), [
                'id' => 'role_id',
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
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', ''.Lang::get('validation.attributes.cleaner.description').':', ['class' => 'col-sm-4 control-label']) !!}
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