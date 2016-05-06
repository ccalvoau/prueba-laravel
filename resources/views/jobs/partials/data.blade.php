<table id="tb_data_job" class="table table-bordered">
    <tbody>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.job.name'):
            </td>
            <td class="td_data_values">
                {{ $job->full_name }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.job.client_type'):
            </td>
            <td class="td_data_values">
                {{ $job->clientType->name }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.job.status'):
            </td>
            <td class="td_data_values">
                @if($job->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.job.phone_number'):
            </td>
            <td class="td_data_values">
                {{ $job->phone_number }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.job.email'):
            </td>
            <td class="td_data_values">
                {{ $job->email }}
            </td>
        </tr>
        @if($job->description)
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.job.description'):
            </td>
            <td class="td_data_values just">
                {{ $job->description }}
            </td>
        </tr>
        @endif
    </tbody>
</table>