<table id="tb_index_places" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>
                ID
            </th>

            @include('places.partials.thead')

            <th style="width: 8%" class="sorting_desc_disabled">
                @lang('common.table_th_actions')
            </th>
        </tr>
    </thead>

    <tbody>
    @foreach($places as $item)
        <tr data-id="{{ 'tr_place_'.$item->id }}">
            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('places.show', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>

            <td>
                {{ $item->unit_number }}
            </td>

            <td title="{{ $item->client->short_name }}">
                {{ $item->street_number }}
            </td>

            <td title="{{ $item->streetType->name }}">
                {{ $item->street_name }}
            </td>

            <td>
                {{ $item->suburb }}
            </td>

            <td title="{{ $item->postcode }}">
                {{ $item->state->name }}
            </td>

            @if($item->verified)
                <td title="{{ $item->cleaner->short_name }}">
                    <span class="label label-success">@lang('validation.attributes.tag_yes')</span>
                </td>
            @else
                <td>
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
                </td>
            @endif

            <td>
                <a title="@lang('common.table_title_edit')" href="{{ url('places/'.$item->id.'/edit') }}" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil"></i>
                </a>
                &nbsp;&nbsp;
                {!! Form::open([
                    'method'=>'DELETE',
                    'route' => ['places.destroy', $item->id],
                    'style' => 'display:inline'
                ]) !!}
                    <button type="submit" title="@lang('common.table_title_delete')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></button>
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

            @include('places.partials.thead')

            <th>
                @lang('common.table_th_actions')
            </th>
        </tr>
    </tfoot>
</table>