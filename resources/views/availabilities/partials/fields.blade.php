<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('cleaner_name', ''.Lang::get('validation.attributes.availability.cleaner_name').':', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('cleaner_name', $cleaner->full_name, [
                'id' => 'cleaner_name',
                'class' => 'form-control',
                'readonly' => 'readonly'
                ])
            !!}
            {!! Form::hidden('h_timetable', $cleaner->availability->timetable, [
                'id' => 'h_timetable'])
            !!}
            {!! Form::hidden('h_is_available', '', [
                'id' => 'h_is_available'])
            !!}
        </div>
    </div>
</div>

<div class="col-md-12">
    <hr>
</div><!-- /.col12 -->

<div class="col-md-12" id="div_availability" style="display: none;">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="15%" class="text-center">
                @lang('timetable.time_day')
            </th>
            <th width="5%" title="@lang('timetable.monday')" class="text-center">
                @lang('timetable.mon')
            </th>
            <th width="5%" title="@lang('timetable.tuesday')" class="text-center">
                @lang('timetable.tue')
            </th>
            <th width="5%" title="@lang('timetable.wednesday')" class="text-center">
                @lang('timetable.wed')
            </th>
            <th width="5%" title="@lang('timetable.thursday')" class="text-center">
                @lang('timetable.thu')
            </th>
            <th width="5%" title="@lang('timetable.friday')" class="text-center">
                @lang('timetable.fri')
            </th>
            <th width="5%" title="@lang('timetable.saturday')" class="text-center">
                @lang('timetable.sat')
            </th>
            <th width="5%" title="@lang('timetable.sunday')" class="text-center">
                @lang('timetable.sun')
            </th>
            <th width="15%" class="text-center">
                @lang('timetable.time_day')
            </th>
            <th width="5%" title="@lang('timetable.monday')" class="text-center">
                @lang('timetable.mon')
            </th>
            <th width="5%" title="@lang('timetable.tuesday')" class="text-center">
                @lang('timetable.tue')
            </th>
            <th width="5%" title="@lang('timetable.wednesday')" class="text-center">
                @lang('timetable.wed')
            </th>
            <th width="5%" title="@lang('timetable.thursday')" class="text-center">
                @lang('timetable.thu')
            </th>
            <th width="5%" title="@lang('timetable.friday')" class="text-center">
                @lang('timetable.fri')
            </th>
            <th width="5%" title="@lang('timetable.saturday')" class="text-center">
                @lang('timetable.sat')
            </th>
            <th width="5%" title="@lang('timetable.sunday')" class="text-center">
                @lang('timetable.sun')
            </th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td class="text-center text-bold">
                18:00 - 19:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="18_1" class="text-center danger">
                {!! Form::checkbox('checkbox18_1', '', false, [
                    'id' => 'checkbox18_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="18_2" class="text-center danger">
                {!! Form::checkbox('checkbox18_2', '', false, [
                    'id' => 'checkbox18_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="18_3" class="text-center danger">
                {!! Form::checkbox('checkbox18_3', '', false, [
                    'id' => 'checkbox18_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="18_4" class="text-center danger">
                {!! Form::checkbox('checkbox18_4', '', false, [
                    'id' => 'checkbox18_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="18_5" class="text-center danger">
                {!! Form::checkbox('checkbox18_5', '', false, [
                    'id' => 'checkbox18_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="18_6" class="text-center danger">
                {!! Form::checkbox('checkbox18_6', '', false, [
                    'id' => 'checkbox18_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="18_7" class="text-center danger">
                {!! Form::checkbox('checkbox18_7', '', false, [
                    'id' => 'checkbox18_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                06:00 - 07:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="06_1" class="text-center danger">
                {!! Form::checkbox('checkbox06_1', '', false, [
                    'id' => 'checkbox06_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="06_2" class="text-center danger">
                {!! Form::checkbox('checkbox06_2', '', false, [
                    'id' => 'checkbox06_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="06_3" class="text-center danger">
                {!! Form::checkbox('checkbox06_3', '', false, [
                    'id' => 'checkbox06_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="06_4" class="text-center danger">
                {!! Form::checkbox('checkbox06_4', '', false, [
                    'id' => 'checkbox06_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="06_5" class="text-center danger">
                {!! Form::checkbox('checkbox06_5', '', false, [
                    'id' => 'checkbox06_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="06_6" class="text-center danger">
                {!! Form::checkbox('checkbox06_6', '', false, [
                    'id' => 'checkbox06_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="06_7" class="text-center danger">
                {!! Form::checkbox('checkbox06_7', '', false, [
                    'id' => 'checkbox06_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                19:00 - 20:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="19_1" class="text-center danger">
                {!! Form::checkbox('checkbox19_1', '', false, [
                    'id' => 'checkbox19_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="19_2" class="text-center danger">
                {!! Form::checkbox('checkbox19_2', '', false, [
                    'id' => 'checkbox19_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="19_3" class="text-center danger">
                {!! Form::checkbox('checkbox19_3', '', false, [
                    'id' => 'checkbox19_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="19_4" class="text-center danger">
                {!! Form::checkbox('checkbox19_4', '', false, [
                    'id' => 'checkbox19_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="19_5" class="text-center danger">
                {!! Form::checkbox('checkbox19_5', '', false, [
                    'id' => 'checkbox19_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="19_6" class="text-center danger">
                {!! Form::checkbox('checkbox19_6', '', false, [
                    'id' => 'checkbox19_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="19_7" class="text-center danger">
                {!! Form::checkbox('checkbox19_7', '', false, [
                    'id' => 'checkbox19_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                07:00 - 08:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="07_1" class="text-center danger">
                {!! Form::checkbox('checkbox07_1', '', false, [
                    'id' => 'checkbox07_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="07_2" class="text-center danger">
                {!! Form::checkbox('checkbox07_2', '', false, [
                    'id' => 'checkbox07_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="07_3" class="text-center danger">
                {!! Form::checkbox('checkbox07_3', '', false, [
                    'id' => 'checkbox07_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="07_4" class="text-center danger">
                {!! Form::checkbox('checkbox07_4', '', false, [
                    'id' => 'checkbox07_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="07_5" class="text-center danger">
                {!! Form::checkbox('checkbox07_5', '', false, [
                    'id' => 'checkbox07_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="07_6" class="text-center danger">
                {!! Form::checkbox('checkbox07_6', '', false, [
                    'id' => 'checkbox07_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="07_7" class="text-center danger">
                {!! Form::checkbox('checkbox07_7', '', false, [
                    'id' => 'checkbox07_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                20:00 - 21:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="20_1" class="text-center danger">
                {!! Form::checkbox('checkbox20_1', '', false, [
                    'id' => 'checkbox20_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="20_2" class="text-center danger">
                {!! Form::checkbox('checkbox20_2', '', false, [
                    'id' => 'checkbox20_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="20_3" class="text-center danger">
                {!! Form::checkbox('checkbox20_3', '', false, [
                    'id' => 'checkbox20_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="20_4" class="text-center danger">
                {!! Form::checkbox('checkbox20_4', '', false, [
                    'id' => 'checkbox20_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="20_5" class="text-center danger">
                {!! Form::checkbox('checkbox20_5', '', false, [
                    'id' => 'checkbox20_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="20_6" class="text-center danger">
                {!! Form::checkbox('checkbox20_6', '', false, [
                    'id' => 'checkbox20_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="20_7" class="text-center danger">
                {!! Form::checkbox('checkbox20_7', '', false, [
                    'id' => 'checkbox20_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                08:00 - 09:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="08_1" class="text-center danger">
                {!! Form::checkbox('checkbox08_1', '', false, [
                    'id' => 'checkbox08_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="08_2" class="text-center danger">
                {!! Form::checkbox('checkbox08_2', '', false, [
                    'id' => 'checkbox08_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="08_3" class="text-center danger">
                {!! Form::checkbox('checkbox08_3', '', false, [
                    'id' => 'checkbox08_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="08_4" class="text-center danger">
                {!! Form::checkbox('checkbox08_4', '', false, [
                    'id' => 'checkbox08_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="08_5" class="text-center danger">
                {!! Form::checkbox('checkbox08_5', '', false, [
                    'id' => 'checkbox08_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="08_6" class="text-center danger">
                {!! Form::checkbox('checkbox08_6', '', false, [
                    'id' => 'checkbox08_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="08_7" class="text-center danger">
                {!! Form::checkbox('checkbox08_7', '', false, [
                    'id' => 'checkbox08_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                21:00 - 22:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="21_1" class="text-center danger">
                {!! Form::checkbox('checkbox21_1', '', false, [
                    'id' => 'checkbox21_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="21_2" class="text-center danger">
                {!! Form::checkbox('checkbox21_2', '', false, [
                    'id' => 'checkbox21_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="21_3" class="text-center danger">
                {!! Form::checkbox('checkbox21_3', '', false, [
                    'id' => 'checkbox21_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="21_4" class="text-center danger">
                {!! Form::checkbox('checkbox21_4', '', false, [
                    'id' => 'checkbox21_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="21_5" class="text-center danger">
                {!! Form::checkbox('checkbox21_5', '', false, [
                    'id' => 'checkbox21_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="21_6" class="text-center danger">
                {!! Form::checkbox('checkbox21_6', '', false, [
                    'id' => 'checkbox21_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="21_7" class="text-center danger">
                {!! Form::checkbox('checkbox21_7', '', false, [
                    'id' => 'checkbox21_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                09:00 - 10:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="09_1" class="text-center danger">
                {!! Form::checkbox('checkbox09_1', '', false, [
                    'id' => 'checkbox09_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="09_2" class="text-center danger">
                {!! Form::checkbox('checkbox09_2', '', false, [
                    'id' => 'checkbox09_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="09_3" class="text-center danger">
                {!! Form::checkbox('checkbox09_3', '', false, [
                    'id' => 'checkbox09_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="09_4" class="text-center danger">
                {!! Form::checkbox('checkbox09_4', '', false, [
                    'id' => 'checkbox09_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="09_5" class="text-center danger">
                {!! Form::checkbox('checkbox09_5', '', false, [
                    'id' => 'checkbox09_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="09_6" class="text-center danger">
                {!! Form::checkbox('checkbox09_6', '', false, [
                    'id' => 'checkbox09_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="09_7" class="text-center danger">
                {!! Form::checkbox('checkbox09_7', '', false, [
                    'id' => 'checkbox09_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                22:00 - 23:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="22_1" class="text-center danger">
                {!! Form::checkbox('checkbox22_1', '', false, [
                    'id' => 'checkbox22_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="22_2" class="text-center danger">
                {!! Form::checkbox('checkbox22_2', '', false, [
                    'id' => 'checkbox22_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="22_3" class="text-center danger">
                {!! Form::checkbox('checkbox22_3', '', false, [
                    'id' => 'checkbox22_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="22_4" class="text-center danger">
                {!! Form::checkbox('checkbox22_4', '', false, [
                    'id' => 'checkbox22_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="22_5" class="text-center danger">
                {!! Form::checkbox('checkbox22_5', '', false, [
                    'id' => 'checkbox22_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="22_6" class="text-center danger">
                {!! Form::checkbox('checkbox22_6', '', false, [
                    'id' => 'checkbox22_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="22_7" class="text-center danger">
                {!! Form::checkbox('checkbox22_7', '', false, [
                    'id' => 'checkbox22_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                10:00 - 11:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="10_1" class="text-center danger">
                {!! Form::checkbox('checkbox10_1', '', false, [
                    'id' => 'checkbox10_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="10_2" class="text-center danger">
                {!! Form::checkbox('checkbox10_2', '', false, [
                    'id' => 'checkbox10_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="10_3" class="text-center danger">
                {!! Form::checkbox('checkbox10_3', '', false, [
                    'id' => 'checkbox10_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="10_4" class="text-center danger">
                {!! Form::checkbox('checkbox10_4', '', false, [
                    'id' => 'checkbox10_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="10_5" class="text-center danger">
                {!! Form::checkbox('checkbox10_5', '', false, [
                    'id' => 'checkbox10_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="10_6" class="text-center danger">
                {!! Form::checkbox('checkbox10_6', '', false, [
                    'id' => 'checkbox10_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="10_7" class="text-center danger">
                {!! Form::checkbox('checkbox10_7', '', false, [
                    'id' => 'checkbox10_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                23:00 - 00:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="23_1" class="text-center danger">
                {!! Form::checkbox('checkbox23_1', '', false, [
                    'id' => 'checkbox23_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="23_2" class="text-center danger">
                {!! Form::checkbox('checkbox23_2', '', false, [
                    'id' => 'checkbox23_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="23_3" class="text-center danger">
                {!! Form::checkbox('checkbox23_3', '', false, [
                    'id' => 'checkbox23_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="23_4" class="text-center danger">
                {!! Form::checkbox('checkbox23_4', '', false, [
                    'id' => 'checkbox23_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="23_5" class="text-center danger">
                {!! Form::checkbox('checkbox23_5', '', false, [
                    'id' => 'checkbox23_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="23_6" class="text-center danger">
                {!! Form::checkbox('checkbox23_6', '', false, [
                    'id' => 'checkbox23_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="23_7" class="text-center danger">
                {!! Form::checkbox('checkbox23_7', '', false, [
                    'id' => 'checkbox23_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                11:00 - 12:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="11_1" class="text-center danger">
                {!! Form::checkbox('checkbox11_1', '', false, [
                    'id' => 'checkbox11_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="11_2" class="text-center danger">
                {!! Form::checkbox('checkbox11_2', '', false, [
                    'id' => 'checkbox11_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="11_3" class="text-center danger">
                {!! Form::checkbox('checkbox11_3', '', false, [
                    'id' => 'checkbox11_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="11_4" class="text-center danger">
                {!! Form::checkbox('checkbox11_4', '', false, [
                    'id' => 'checkbox11_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="11_5" class="text-center danger">
                {!! Form::checkbox('checkbox11_5', '', false, [
                    'id' => 'checkbox11_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="11_6" class="text-center danger">
                {!! Form::checkbox('checkbox11_6', '', false, [
                    'id' => 'checkbox11_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="11_7" class="text-center danger">
                {!! Form::checkbox('checkbox11_7', '', false, [
                    'id' => 'checkbox11_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                00:00 - 01:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="00_1" class="text-center danger">
                {!! Form::checkbox('checkbox00_1', '', false, [
                    'id' => 'checkbox00_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="00_2" class="text-center danger">
                {!! Form::checkbox('checkbox00_2', '', false, [
                    'id' => 'checkbox00_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="00_3" class="text-center danger">
                {!! Form::checkbox('checkbox00_3', '', false, [
                    'id' => 'checkbox00_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="00_4" class="text-center danger">
                {!! Form::checkbox('checkbox00_4', '', false, [
                    'id' => 'checkbox00_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="00_5" class="text-center danger">
                {!! Form::checkbox('checkbox00_5', '', false, [
                    'id' => 'checkbox00_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="00_6" class="text-center danger">
                {!! Form::checkbox('checkbox00_6', '', false, [
                    'id' => 'checkbox00_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="00_7" class="text-center danger">
                {!! Form::checkbox('checkbox00_7', '', false, [
                    'id' => 'checkbox00_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                12:00 - 13:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="12_1" class="text-center danger">
                {!! Form::checkbox('checkbox12_1', '', false, [
                    'id' => 'checkbox12_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="12_2" class="text-center danger">
                {!! Form::checkbox('checkbox12_2', '', false, [
                    'id' => 'checkbox12_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="12_3" class="text-center danger">
                {!! Form::checkbox('checkbox12_3', '', false, [
                    'id' => 'checkbox12_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="12_4" class="text-center danger">
                {!! Form::checkbox('checkbox12_4', '', false, [
                    'id' => 'checkbox12_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="12_5" class="text-center danger">
                {!! Form::checkbox('checkbox12_5', '', false, [
                    'id' => 'checkbox12_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="12_6" class="text-center danger">
                {!! Form::checkbox('checkbox12_6', '', false, [
                    'id' => 'checkbox12_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="12_7" class="text-center danger">
                {!! Form::checkbox('checkbox12_7', '', false, [
                    'id' => 'checkbox12_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                01:00 - 02:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="01_1" class="text-center danger">
                {!! Form::checkbox('checkbox01_1', '', false, [
                    'id' => 'checkbox01_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="01_2" class="text-center danger">
                {!! Form::checkbox('checkbox01_2', '', false, [
                    'id' => 'checkbox01_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="01_3" class="text-center danger">
                {!! Form::checkbox('checkbox01_3', '', false, [
                    'id' => 'checkbox01_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="01_4" class="text-center danger">
                {!! Form::checkbox('checkbox01_4', '', false, [
                    'id' => 'checkbox01_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="01_5" class="text-center danger">
                {!! Form::checkbox('checkbox01_5', '', false, [
                    'id' => 'checkbox01_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="01_6" class="text-center danger">
                {!! Form::checkbox('checkbox01_6', '', false, [
                    'id' => 'checkbox01_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="01_7" class="text-center danger">
                {!! Form::checkbox('checkbox01_7', '', false, [
                    'id' => 'checkbox01_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                13:00 - 14:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="13_1" class="text-center danger">
                {!! Form::checkbox('checkbox13_1', '', false, [
                    'id' => 'checkbox13_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="13_2" class="text-center danger">
                {!! Form::checkbox('checkbox13_2', '', false, [
                    'id' => 'checkbox13_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="13_3" class="text-center danger">
                {!! Form::checkbox('checkbox13_3', '', false, [
                    'id' => 'checkbox13_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="13_4" class="text-center danger">
                {!! Form::checkbox('checkbox13_4', '', false, [
                    'id' => 'checkbox13_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="13_5" class="text-center danger">
                {!! Form::checkbox('checkbox13_5', '', false, [
                    'id' => 'checkbox13_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="13_6" class="text-center danger">
                {!! Form::checkbox('checkbox13_6', '', false, [
                    'id' => 'checkbox13_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="13_7" class="text-center danger">
                {!! Form::checkbox('checkbox13_7', '', false, [
                    'id' => 'checkbox13_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                02:00 - 03:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="02_1" class="text-center danger">
                {!! Form::checkbox('checkbox02_1', '', false, [
                    'id' => 'checkbox02_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="02_2" class="text-center danger">
                {!! Form::checkbox('checkbox02_2', '', false, [
                    'id' => 'checkbox02_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="02_3" class="text-center danger">
                {!! Form::checkbox('checkbox02_3', '', false, [
                    'id' => 'checkbox02_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="02_4" class="text-center danger">
                {!! Form::checkbox('checkbox02_4', '', false, [
                    'id' => 'checkbox02_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="02_5" class="text-center danger">
                {!! Form::checkbox('checkbox02_5', '', false, [
                    'id' => 'checkbox02_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="02_6" class="text-center danger">
                {!! Form::checkbox('checkbox02_6', '', false, [
                    'id' => 'checkbox02_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="02_7" class="text-center danger">
                {!! Form::checkbox('checkbox02_7', '', false, [
                    'id' => 'checkbox02_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                14:00 - 15:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="14_1" class="text-center danger">
                {!! Form::checkbox('checkbox14_1', '', false, [
                    'id' => 'checkbox14_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="14_2" class="text-center danger">
                {!! Form::checkbox('checkbox14_2', '', false, [
                    'id' => 'checkbox14_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="14_3" class="text-center danger">
                {!! Form::checkbox('checkbox14_3', '', false, [
                    'id' => 'checkbox14_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="14_4" class="text-center danger">
                {!! Form::checkbox('checkbox14_4', '', false, [
                    'id' => 'checkbox14_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="14_5" class="text-center danger">
                {!! Form::checkbox('checkbox14_5', '', false, [
                    'id' => 'checkbox14_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="14_6" class="text-center danger">
                {!! Form::checkbox('checkbox14_6', '', false, [
                    'id' => 'checkbox14_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="14_7" class="text-center danger">
                {!! Form::checkbox('checkbox14_7', '', false, [
                    'id' => 'checkbox14_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                03:00 - 04:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="03_1" class="text-center danger">
                {!! Form::checkbox('checkbox03_1', '', false, [
                    'id' => 'checkbox03_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="03_2" class="text-center danger">
                {!! Form::checkbox('checkbox03_2', '', false, [
                    'id' => 'checkbox03_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="03_3" class="text-center danger">
                {!! Form::checkbox('checkbox03_3', '', false, [
                    'id' => 'checkbox03_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="03_4" class="text-center danger">
                {!! Form::checkbox('checkbox03_4', '', false, [
                    'id' => 'checkbox03_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="03_5" class="text-center danger">
                {!! Form::checkbox('checkbox03_5', '', false, [
                    'id' => 'checkbox03_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="03_6" class="text-center danger">
                {!! Form::checkbox('checkbox03_6', '', false, [
                    'id' => 'checkbox03_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="03_7" class="text-center danger">
                {!! Form::checkbox('checkbox03_7', '', false, [
                    'id' => 'checkbox03_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                15:00 - 16:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="15_1" class="text-center danger">
                {!! Form::checkbox('checkbox15_1', '', false, [
                    'id' => 'checkbox15_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="15_2" class="text-center danger">
                {!! Form::checkbox('checkbox15_2', '', false, [
                    'id' => 'checkbox15_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="15_3" class="text-center danger">
                {!! Form::checkbox('checkbox15_3', '', false, [
                    'id' => 'checkbox15_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="15_4" class="text-center danger">
                {!! Form::checkbox('checkbox15_4', '', false, [
                    'id' => 'checkbox15_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="15_5" class="text-center danger">
                {!! Form::checkbox('checkbox15_5', '', false, [
                    'id' => 'checkbox15_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="15_6" class="text-center danger">
                {!! Form::checkbox('checkbox15_6', '', false, [
                    'id' => 'checkbox15_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="15_7" class="text-center danger">
                {!! Form::checkbox('checkbox15_7', '', false, [
                    'id' => 'checkbox15_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                04:00 - 05:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="04_1" class="text-center danger">
                {!! Form::checkbox('checkbox04_1', '', false, [
                    'id' => 'checkbox04_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="04_2" class="text-center danger">
                {!! Form::checkbox('checkbox04_2', '', false, [
                    'id' => 'checkbox04_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="04_3" class="text-center danger">
                {!! Form::checkbox('checkbox04_3', '', false, [
                    'id' => 'checkbox04_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="04_4" class="text-center danger">
                {!! Form::checkbox('checkbox04_4', '', false, [
                    'id' => 'checkbox04_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="04_5" class="text-center danger">
                {!! Form::checkbox('checkbox04_5', '', false, [
                    'id' => 'checkbox04_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="04_6" class="text-center danger">
                {!! Form::checkbox('checkbox04_6', '', false, [
                    'id' => 'checkbox04_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="04_7" class="text-center danger">
                {!! Form::checkbox('checkbox04_7', '', false, [
                    'id' => 'checkbox04_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                16:00 - 17:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="16_1" class="text-center danger">
                {!! Form::checkbox('checkbox16_1', '', false, [
                    'id' => 'checkbox16_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="16_2" class="text-center danger">
                {!! Form::checkbox('checkbox16_2', '', false, [
                    'id' => 'checkbox16_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="16_3" class="text-center danger">
                {!! Form::checkbox('checkbox16_3', '', false, [
                    'id' => 'checkbox16_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="16_4" class="text-center danger">
                {!! Form::checkbox('checkbox16_4', '', false, [
                    'id' => 'checkbox16_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="16_5" class="text-center danger">
                {!! Form::checkbox('checkbox16_5', '', false, [
                    'id' => 'checkbox16_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="16_6" class="text-center danger">
                {!! Form::checkbox('checkbox16_6', '', false, [
                    'id' => 'checkbox16_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="16_7" class="text-center danger">
                {!! Form::checkbox('checkbox16_7', '', false, [
                    'id' => 'checkbox16_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        <tr>
            <td class="text-center text-bold">
                05:00 - 06:00 <i class="icon fa fa-moon-o pull-right"></i>
            </td>
            <td id="05_1" class="text-center danger">
                {!! Form::checkbox('checkbox05_1', '', false, [
                    'id' => 'checkbox05_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="05_2" class="text-center danger">
                {!! Form::checkbox('checkbox05_2', '', false, [
                    'id' => 'checkbox05_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="05_3" class="text-center danger">
                {!! Form::checkbox('checkbox05_3', '', false, [
                    'id' => 'checkbox05_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="05_4" class="text-center danger">
                {!! Form::checkbox('checkbox05_4', '', false, [
                    'id' => 'checkbox05_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="05_5" class="text-center danger">
                {!! Form::checkbox('checkbox05_5', '', false, [
                    'id' => 'checkbox05_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="05_6" class="text-center danger">
                {!! Form::checkbox('checkbox05_6', '', false, [
                    'id' => 'checkbox05_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="05_7" class="text-center danger">
                {!! Form::checkbox('checkbox05_7', '', false, [
                    'id' => 'checkbox05_7',
                    'class' => 'minimal'])
                !!}
            </td>
            <td class="text-center text-bold">
                17:00 - 18:00 <i class="icon fa fa-sun-o pull-right"></i>
            </td>
            <td id="17_1" class="text-center danger">
                {!! Form::checkbox('checkbox17_1', '', false, [
                    'id' => 'checkbox17_1',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="17_2" class="text-center danger">
                {!! Form::checkbox('checkbox17_2', '', false, [
                    'id' => 'checkbox17_2',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="17_3" class="text-center danger">
                {!! Form::checkbox('checkbox17_3', '', false, [
                    'id' => 'checkbox17_3',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="17_4" class="text-center danger">
                {!! Form::checkbox('checkbox17_4', '', false, [
                    'id' => 'checkbox17_4',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="17_5" class="text-center danger">
                {!! Form::checkbox('checkbox17_5', '', false, [
                    'id' => 'checkbox17_5',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="17_6" class="text-center danger">
                {!! Form::checkbox('checkbox17_6', '', false, [
                    'id' => 'checkbox17_6',
                    'class' => 'minimal'])
                !!}
            </td>
            <td id="17_7" class="text-center danger">
                {!! Form::checkbox('checkbox17_7', '', false, [
                    'id' => 'checkbox17_7',
                    'class' => 'minimal'])
                !!}
            </td>
        </tr>
        </tbody>
    </table>
</div><!-- /.col12 -->