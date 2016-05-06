<table id="tb_index_teams" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>
                ID
            </th>

            @include('teams.partials.thead')

            <th style="width: 8%" class="sorting_desc_disabled" align="center">
                @lang('common.table_th_actions')
            </th>
        </tr>
    </thead>

    <tbody>
    @foreach($teams as $item)
        <tr data-id="{{ 'tr_team_'.$item->id }}">
            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('teams::show', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>

            <td>
                {{ $item->alias }}
            </td>

            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('cleaners::show', $item->leader) }}">
                    {{ $item->leaderData->short_name }}
                </a>
            </td>

            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('cleaners::show', $item->cleaner_id2) }}">
                    {{ $item->cleaner2->short_name }}
                </a>
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
                <a title="@lang('common.table_title_edit')" href="{{ route('teams::edit', ['id' => $item->id]) }}" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil"></i>
                </a>
                &nbsp;
                {!! Form::open([
                    'method'=>'DELETE',
                    'route' => ['teams::destroy', $item->id],
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

            @include('teams.partials.thead')

            <th>
                @lang('common.table_th_actions')
            </th>
        </tr>
    </tfoot>
</table>