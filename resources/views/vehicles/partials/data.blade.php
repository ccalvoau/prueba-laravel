<table id="tb_data_vehicle" class="table table-bordered">
    <tbody>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.registration_no'):
            </td>
            <td class="td_data_values">
                {{ $vehicle->registration_no }}
            </td>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.vin'):
            </td>
            <td class="td_data_values">
                {{ $vehicle->vin }}
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.engine_no'):
            </td>
            <td class="td_data_values">
                {{ $vehicle->engine_no }}
            </td>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.plate'):
            </td>
            <td class="td_data_values">
                {{ $vehicle->plate }}
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.make'):
            </td>
            <td class="td_data_values">
                {{ $vehicle->make }}
            </td>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.year'):
            </td>
            <td class="td_data_values">
                {{ $vehicle->year }} - ({{ $vehicle->age }})
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.colour'):
            </td>
            <td class="td_data_values">
                {{ $vehicle->colour }}
            </td>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.type'):
            </td>
            <td class="td_data_values">
                {{ $vehicle->type }}
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.owner'):
            </td>
            <td class="td_data_values">
                {{ $vehicle->owner }}
            </td>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.registration_expire'):
            </td>
            <td class="td_data_values">
                @if( $vehicle->isExpired() )
                    <span class="text-danger">{{ $vehicle->expire }}</span>
                @else
                    {{ $vehicle->expire }}
                @endif
            </td>
        </tr>

        @if($vehicle->vehicle_picture != 'default.jpg')
        <tr>
            <td colspan="4">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="4" align="center">
                <div class="small-box bg-primary" style="width: 420px; height: 420px;">
                    <div class="inner">
                        {!! Html::image('assets/img/vehicle_pictures/'.$vehicle->vehicle_picture, '', ['id' => 'vehicle_picture_box', 'width' => '400px', 'height' => '400px', 'align' => 'center', 'title' => $vehicle->registration_no]) !!}
                    </div>
                </div>
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
                @lang('validation.attributes.vehicle.status'):
            </td>
            <td class="td_data_values" colspan="3">
                @if($vehicle->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>
        </tr>

        @if($vehicle->description)
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.vehicle.description'):
            </td>
            <td class="td_data_values just" colspan="3">
                {{ $vehicle->description }}
            </td>
        </tr>
        @endif
    </tbody>
</table>