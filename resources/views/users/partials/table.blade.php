<table id="tb_index_users" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>
                ID
            </th>

            @include('users.partials.thead')

            <th style="width: 8%" class="sorting_desc_disabled">
                @lang('common.table_th_actions')
            </th>
        </tr>
    </thead>

    <tbody>
    @foreach($users as $item)
        <tr data-id="{{ 'tr_user_'.$item->id }}">
            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('users::show', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>

            <td>
                {{ $item->name }}
            </td>

            <td>
                {{ $item->role->id }}
            </td>

            <td>
                {{ $item->role->name }}
                @if ($item->role->id == 1)
                    <i class="fa fa-star pull-right"></i>
                @elseif($item->role->id == 2)
                    <i class="fa fa-star-half-empty pull-right"></i>
                @elseif($item->role->id == 3)
                    <i class="fa fa-star-o pull-right"></i>
                @else
                    <i class="fa fa-circle-o pull-right"></i>
                @endif
            </td>

            <td>
                {{ $item->email }}
            </td>

            <td title="{{ $item->description }}">
                @if($item->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>

            <td align="center">
                <a title="@lang('common.table_title_edit')" href="{{ route('users::edit', ['id' => $item->id]) }}" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil"></i>
                </a>
                &nbsp;
                {!! Form::open([
                    'method'=>'DELETE',
                    'route' => ['users::destroy', $item->id],
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

            @include('users.partials.thead')

            <th>
                @lang('common.table_th_actions')
            </th>
        </tr>
    </tfoot>
</table>