<table id="tb_index_jobs" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>
                ID
            </th>

            @include('jobs.partials.thead')

            <th style="width: 8%" class="sorting_desc_disabled">
                @lang('common.table_th_actions')
            </th>
        </tr>
    </thead>

    <tbody>
    @foreach($jobs as $item)
        <tr data-id="{{ 'tr_job_'.$item->id }}">
            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('jobs::show', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>

            <td title="{{ $item->job_time_view }}">
                {{ $item->job_date_view }}
            </td>

            <td title="{{ $item->place->address }}">
                <a title="@lang('common.table_title_show')" href="{{ route('clients::show', $item->id) }}">
                    {{ $item->client->full_name }}
                </a>
            </td>

            <td title="{{ $item->team->leaderData->full_name }}">
                <a title="@lang('common.table_title_show')" href="{{ route('teams::show', $item->id) }}">
                    {{ $item->team->alias }}
                </a>
            </td>

            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('teams::show', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>

            <td align="right">
                <i class="fa fa-hourglass-o pull-left"></i>{{ $item->no_hours }}
            </td>

            <td align="right">
                <i class="fa fa-dollar pull-left"></i>{{ number_format($item->price, 2, '.', ',') }}
            </td>

            <td title="{{ $item->description }}">
                @if($item->status_job_id == 1)
                    <span class="label label-default">{{ $item->statusJob->name }}</span>
                @elseif($item->status_job_id == 2)
                    <span class="label label-info">{{ $item->statusJob->name }}</span>
                @elseif($item->status_job_id == 3)
                    <span class="label label-primary">{{ $item->statusJob->name }}</span>
                @elseif($item->status_job_id == 4)
                    <span class="label label-warning">{{ $item->statusJob->name }}</span>
                @elseif($item->status_job_id == 5)
                    <span class="label label-success">{{ $item->statusJob->name }}</span>
                @elseif($item->status_job_id == 6)
                    <span class="label label-danger">{{ $item->statusJob->name }}</span>
                @elseif($item->status_job_id == 7)
                    <span class="label label-danger">{{ $item->statusJob->name }}</span>
                @endif
            </td>

            <td align="center">
                <a title="@lang('common.table_title_edit')" href="{{ route('jobs::edit', ['id' => $item->id]) }}" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil"></i>
                </a>
                &nbsp;
                {!! Form::open([
                    'method'=>'DELETE',
                    'route' => ['jobs::destroy', $item->id],
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

            @include('jobs.partials.thead')

            <th>
                @lang('common.table_th_actions')
            </th>
        </tr>
    </tfoot>
</table>