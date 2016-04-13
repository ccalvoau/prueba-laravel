<table id="tb_data_client" class="table table-bordered">
    <tbody>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.client.name'):
            </td>
            <td class="td_data_values">
                {{ $client->full_name }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.client.client_type'):
            </td>
            <td class="td_data_values">
                {{ $client->clientType->name }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.client.status'):
            </td>
            <td class="td_data_values">
                @if($client->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.client.phone_number'):
            </td>
            <td class="td_data_values">
                {{ $client->phone_number }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.client.email'):
            </td>
            <td class="td_data_values">
                {{ $client->email }}
            </td>
        </tr>
        @if($client->description)
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.client.description'):
            </td>
            <td class="td_data_values just">
                {{ $client->description }}
            </td>
        </tr>
        @endif
    </tbody>
</table>