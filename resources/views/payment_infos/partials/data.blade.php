<table id="tb_data_payment_info" class="table table-bordered">
    <tbody>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.payment_info.cleaner_name'):
            </td>
            <td class="td_data_values">
                <a title="@lang('common.table_title_show')" href="{{ route('cleaners.show', $payment_info->cleaner->id) }}">
                    {{ $payment_info->cleaner->full_name }}
                </a>
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.payment_info.bank_name'):
            </td>
            <td class="td_data_values">
                {{ $payment_info->bank->name }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.payment_info.is_default'):
            </td>
            <td class="td_data_values">
                @if($payment_info->is_default)
                    <span class="label label-success">@lang('validation.attributes.tag_yes')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
                @endif
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.payment_info.bsb'):
            </td>
            <td class="td_data_values">
                {{ $payment_info->bsb }}
            </td>
        </tr>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.payment_info.account_number'):
            </td>
            <td class="td_data_values">
                {{ $payment_info->account_number }}
            </td>
        </tr>
        @if($payment_info->description)
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.payment_info.description'):
            </td>
            <td class="td_data_values just">
                {{ $payment_info->description }}
            </td>
        </tr>
        @endif
    </tbody>
</table>