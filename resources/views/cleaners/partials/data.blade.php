<table id="tb_data_cleaner" class="table table-bordered">
    <tbody>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.name'):
            </td>
            <td class="td_data_values">
                {{ $cleaner->full_name }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.ide'):
            </td>
            <td class="td_data_values">
                {{ $cleaner->ide }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.age'):
            </td>
            <td class="td_data_values">
                {{ $cleaner->age . " - " . $cleaner->dob }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.gender'):
            </td>
            <td class="td_data_values">
                @if($cleaner->gender == "M")
                    <span class="label label-primary">@lang('validation.attributes.cleaner.gender_male')</span> <i class="fa fa-mars"></i>
                @else
                    <span class="label label-danger">@lang('validation.attributes.cleaner.gender_female')</span> <i class="fa fa-venus"></i>
                @endif
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.phone_number'):
            </td>
            <td class="td_data_values">
                {{ $cleaner->phone_number }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.email'):
            </td>
            <td class="td_data_values">
                {{ $cleaner->email }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.tfn'):
            </td>
            <td class="td_data_values">
                @if($cleaner->tfn != "")
                    {{ $cleaner->tfn }}
                @else
                    @lang('validation.attributes.tfn_no_none')
                @endif
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.abn'):
            </td>
            <td class="td_data_values">
                @if($cleaner->abn != "")
                    {{ $cleaner->abn }}
                @else
                    @lang('validation.attributes.abn_no_none')
                @endif
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.own_vehicle'):
            </td>
            <td class="td_data_values">
                @if($cleaner->own_vehicle)
                    <span class="label label-success">@lang('validation.attributes.tag_yes')</span> <i class="icon fa fa-truck"></i>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
                @endif
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.dlicence_no'):
            </td>
            <td class="td_data_values">
                @if($cleaner->dlicence_no != "")
                    {{ $cleaner->dlicence_no }}
                @else
                    @lang('validation.attributes.dlicence_no_none')
                @endif
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.status'):
            </td>
            <td class="td_data_values">
                @if($cleaner->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>
        </tr>
        @if($cleaner->description)
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.cleaner.description'):
            </td>
            <td class="td_data_values just">
                {{ $cleaner->description }}
            </td>
        </tr>
        @endif
    </tbody>
</table>