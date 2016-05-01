<table id="tb_data_place" class="table table-bordered">
    <tbody>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.place.client_name'):
            </td>
            <td class="td_data_values" colspan="3">
                <a href="{{ route('clients::show', $place->client->id) }}">
                    {{ $place->client->short_name }}
                </a>
            </td>
        </tr>

        <tr>
            <td colspan="4">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.place.unit_number'):
            </td>
            <td class="td_data_values">
                {{ $place->unit_number }}
            </td>
            <td class="td_data_names">
                @lang('validation.attributes.place.street_number'):
            </td>
            <td class="td_data_values">
                {{ $place->street_number }}
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.place.street_name'):
            </td>
            <td class="td_data_values">
                {{ $place->street_name }}
            </td>
            <td class="td_data_names">
                @lang('validation.attributes.place.street_type'):
            </td>
            <td class="td_data_values">
                {{ $place->streetType->name }}
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.place.suburb'):
            </td>
            <td class="td_data_values">
                {{ $place->suburb }}
            </td>
            <td class="td_data_names">
                @lang('validation.attributes.place.state'):
            </td>
            <td class="td_data_values">
                {{ $place->state->name }}
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.place.postcode'):
            </td>
            <td class="td_data_values" colspan="3">
                {{ $place->postcode }}
            </td>
        </tr>

        <tr>
            <td colspan="4">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.place.status'):
            </td>
            <td class="td_data_values" colspan="3">
                @if($place->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>
        </tr>

        @if($place->reference)
            <tr>
                <td class="td_data_names">
                    @lang('validation.attributes.place.reference'):
                </td>
                <td class="td_data_values just" colspan="3">
                    {{ $place->reference }}
                </td>
            </tr>
        @endif

        <tr>
            <td colspan="4">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.place.verified'):
            </td>
            @if($place->verified)
                <td class="td_data_values">
                    <span class="label label-success">@lang('validation.attributes.tag_yes')</span>
            @else
            <td class="td_data_values" colspan="3">
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
            @endif
            </td>
            @if($place->verified)
                <td class="td_data_names">
                    @lang('validation.attributes.place.cleaner_name'):
                </td>
                <td class="td_data_values just">
                    <a href="{{ route('cleaners::show', $place->cleaner->id) }}">
                        {{ $place->cleaner->short_name }}
                    </a>
                </td>
            @endif
        </tr>

        <tr>
            <td colspan="4">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        @if($place->verified)
        <tr>
            <td class="td_data_names">
                <i class="icon fa fa-map-marker"></i>
                @lang('validation.attributes.place.latitude'):
            </td>
            <td class="td_data_values">
                {{ $place->latitude }}
            </td>
            <td class="td_data_names">
                <i class="icon fa fa-map-marker"></i>
                @lang('validation.attributes.place.longitude'):
            </td>
            <td class="td_data_values">
                {{ $place->longitude }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                {!! $map['html'] !!}
            </td>
        </tr>
        @endif
    </tbody>
</table>