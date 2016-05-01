<table id="tb_data_cleaner" class="table table-bordered">
    <tbody>
        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.name'):
            </td>
            <td class="td_data_values33" title="{{ $cleaner->name }}">
                @if(Auth::user()->hasAnyRole([1,2]))
                    <a title="@lang('validation.attributes.cleaner.show_user')" href="{{ route('users::show', ['id' => $cleaner->user_id]) }}">
                        {{ $cleaner->full_name }}
                    </a>
                @else
                    {{ $cleaner->full_name }}
                @endif
                {!! Form::hidden('h_timetable', $cleaner->availability->timetable, [
                    'id' => 'h_timetable'])
                !!}
            </td>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.ide'):
            </td>
            <td class="td_data_values33">
                {{ $cleaner->ide }}
            </td>
            <td rowspan="5" width="200px" align="center">
                <div class="small-box bg-primary" style="width: 180px; height: 180px;">
                    <div class="inner">
                        {!! Html::image('assets/img/profile_pictures/'.$cleaner->profile_picture, '', ['id' => 'profile_picture_box', 'width' => '160px', 'height' => '160px', 'align' => 'center']) !!}
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.age'):
            </td>
            <td class="td_data_values33">
                {{ $cleaner->age . " - " . $cleaner->dob }}
            </td>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.gender'):
            </td>
            <td class="td_data_values33">
                @if($cleaner->gender == "M")
                    <span class="label label-primary">@lang('validation.attributes.cleaner.gender_male')</span> <i class="fa fa-mars"></i>
                @else
                    <span class="label label-danger">@lang('validation.attributes.cleaner.gender_female')</span> <i class="fa fa-venus"></i>
                @endif
            </td>
        </tr>

        <tr>
            <td class="td_data_names17">
                <i class="fa fa-phone"></i> @lang('validation.attributes.cleaner.phone_number'):
            </td>
            <td class="td_data_values33">
                {{ $cleaner->phone_number }}
            </td>
            <td class="td_data_names17">
                <i class="fa fa-envelope"></i> @lang('validation.attributes.cleaner.email'):
            </td>
            <td class="td_data_values33">
                {{ $cleaner->email }}
            </td>
        </tr>

        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.nationality'):
            </td>
            <td class="td_data_values33" colspan="3">
                {{ $cleaner->country->citizenship }}&nbsp;&nbsp;&nbsp;
                {!! Html::image('assets/img/flags/'.$cleaner->country->flag, $cleaner->country->name, ['title' => $cleaner->country->name]) !!}
            </td>
        </tr>

        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.mother_tongue'):
            </td>
            <td class="td_data_values33">
                {{ $cleaner->language->name }}
            </td>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.english_level'):
            </td>
            <td class="td_data_values33">
                {{ $cleaner->englishLevel->lse_class }}
            </td>
        </tr>

        <tr>
            <td colspan="5">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.tfn'):
            </td>
            <td class="td_data_values33">
                @if($cleaner->tfn != "")
                    {{ $cleaner->tfn }}
                @else
                    @lang('validation.attributes.cleaner.tfn_none')
                @endif
            </td>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.abn'):
            </td>
            <td class="td_data_values33" colspan="2">
                @if($cleaner->abn != "")
                    {{ $cleaner->abn }}
                @else
                    @lang('validation.attributes.cleaner.abn_none')
                @endif
            </td>
        </tr>

        <tr>
            <td colspan="5">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.own_vehicle'):
            </td>
            <td class="td_data_values33">
                @if($cleaner->own_vehicle)
                    <span class="label label-success">@lang('validation.attributes.tag_yes')</span> <i class="icon fa fa-truck"></i>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
                @endif
            </td>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.driving_licence'):
            </td>
            <td class="td_data_values33" colspan="2">
                @if($cleaner->licence_no != "")
                    {{ $cleaner->licence_no }}
                @else
                    @lang('validation.attributes.cleaner.driving_licence_none')
                @endif
            </td>
        </tr>

        @if($cleaner->licence_picture != "default.jpg")
            <tr>
                <td colspan="5" align="center">
                    <div class="small-box bg-primary" style="width: 420px; height: 280px;">
                        <div class="inner">
                            {!! Html::image('assets/img/licence_pictures/'.$cleaner->licence_picture, '', ['id' => 'licence_picture_box', 'width' => '400px', 'height' => '260px', 'align' => 'center']) !!}
                        </div>
                    </div>
                </td>
            </tr>
        @endif

        <tr>
            <td colspan="5">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.no_jobs'):
            </td>
            <td class="td_data_values33">
                {{ $cleaner->no_jobs }}
            </td>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.no_hours'):
            </td>
            <td class="td_data_values33" colspan="2">
                {{ $cleaner->no_hours }}
            </td>
        </tr>

        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.profit'):
            </td>
            <td class="td_data_values33" colspan="3">
                <i class="fa fa-dollar"></i> {{ number_format($cleaner->profit, 2, '.', ',') }}
            </td>
        </tr>

        <tr>
            <td colspan="5">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.status'):
            </td>
            <td class="td_data_values33" colspan="4">
                @if($cleaner->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>
        </tr>

        @if($cleaner->description)
        <tr>
            <td class="td_data_names17">
                @lang('validation.attributes.cleaner.description'):
            </td>
            <td class="td_data_values33" colspan="4">
                {{ $cleaner->description }}
            </td>
        </tr>
        @endif
    </tbody>
</table>