<table id="tb_index_vehicles" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>
                ID
            </th>

            @include('vehicles.partials.thead')

            <th style="width: 8%" class="sorting_desc_disabled">
                @lang('common.table_th_actions')
            </th>
        </tr>
    </thead>

    <tbody>
    @foreach($vehicles as $item)
        <tr data-id="{{ 'tr_vehicle_'.$item->id }}">
            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('vehicles::show', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>

            <td title="{{ $item->owner }}">
                {{ $item->registration_no }}
            </td>

            <td title="{{ $item->vin }}">
                {{ $item->make }}
            </td>

            <td title="{{ $item->engine_no }}">
                {{ $item->colour }}
            </td>

            <td title="{{ $item->plate }}">
                {{ $item->type }}
            </td>

            <td title="{{ $item->age }}">
                {{ $item->year }}
            </td>

            <td>
                @if($item->isExpired())
                    <span class="text-danger">
                        <i class="fa fa-asterisk"></i>
                        {{ $item->expire }}
                    </span>
                @else
                    <span class="text-success">
                        <i class="fa fa-check-square-o"></i>
                        {{ $item->expire }}
                    </span>
                @endif
            </td>

            <td title="{{ $item->description }}">
                {{--{{ $item->status_name }}--}}
                @if($item->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>

            <td align="center">
                <a title="@lang('common.table_title_edit')" href="{{ route('vehicles::edit', ['id' => $item->id]) }}" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil"></i>
                </a>
                &nbsp;
                {!! Form::open([
                    'method'=>'DELETE',
                    'route' => ['vehicles::destroy', $item->id],
                    'style' => 'display:inline'
                ]) !!}
                    <button type="submit" title="@lang('common.table_title_delete')" class="btn btn-danger btn-xs">
                        <i class="fa fa-remove"></i>
                    </button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>

    <tfoot>
        <tr>
            <th>
                ID
            </th>

            @include('clients.partials.thead')

            <th>
                @lang('common.table_th_actions')
            </th>
        </tr>
    </tfoot>
</table>