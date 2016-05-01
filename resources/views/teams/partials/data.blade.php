<table id="tb_data_team" class="table table-bordered">
    <tbody>
        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.team.alias'):
            </td>
            <td class="td_data_values">
                <span class="label bg-{{strtolower($team->alias)}}">{{ $team->alias }}</span>
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.team.leader'):
            </td>
            <td class="td_data_values">
                <a href="{{ route('cleaners::show', $team->leaderData->id) }}">
                    {{ $team->leaderData->full_name }}
                </a>
            </td>
        </tr>

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.team.cleaner2'):
            </td>
            <td class="td_data_values">
                <a href="{{ route('cleaners::show', $team->cleaner2->id) }}">
                    {{ $team->cleaner2->full_name }}
                </a>
            </td>
        </tr>

        @if($team->cleaner3 !== null)
            <tr>
                <td class="td_data_names">
                    @lang('validation.attributes.team.cleaner3'):
                </td>
                <td class="td_data_values">
                    <a href="{{ route('cleaners::show', $team->cleaner3->id) }}">
                        {{ $team->cleaner3->full_name }}
                    </a>
                </td>
            </tr>
        @endif

        @if($team->cleaner4 !== null)
            <tr>
                <td class="td_data_names">
                    @lang('validation.attributes.team.cleaner4'):
                </td>
                <td class="td_data_values">
                    <a href="{{ route('cleaners::show', $team->cleaner4->id) }}">
                        {{ $team->cleaner4->full_name }}
                    </a>
                </td>
            </tr>
        @endif

        @if($team->cleaner5 !== null)
            <tr>
                <td class="td_data_names">
                    @lang('validation.attributes.team.cleaner5'):
                </td>
                <td class="td_data_values">
                    <a href="{{ route('cleaners::show', $team->cleaner5->id) }}">
                        {{ $team->cleaner5->full_name }}
                    </a>
                </td>
            </tr>
        @endif

        @if($team->cleaner6 !== null)
            <tr>
                <td class="td_data_names">
                    @lang('validation.attributes.team.cleaner6'):
                </td>
                <td class="td_data_values">
                    <a href="{{ route('cleaners::show', $team->cleaner6->id) }}">
                        {{ $team->cleaner6->full_name }}
                    </a>
                </td>
            </tr>
        @endif

        <tr>
            <td colspan="2">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                </div>
            </td>
        </tr>

        @if($team->vehicle !== null)
            <tr>
                <td class="td_data_names">
                    @lang('validation.attributes.team.vehicle_plate'):
                </td>
                <td class="td_data_values">
                    <a href="{{ route('vehicles::show', $team->vehicle->id) }}">
                        {{ $team->vehicle->plate }}
                    </a>
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
        @endif

        <tr>
            <td class="td_data_names">
                @lang('validation.attributes.team.status'):
            </td>
            <td class="td_data_values">
                @if($team->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>
        </tr>

        @if($team->description)
            <tr>
                <td class="td_data_names">
                    @lang('validation.attributes.team.description'):
                </td>
                <td class="td_data_values">
                    {{ $team->description }}
                </td>
            </tr>
        @endif
    </tbody>
</table>