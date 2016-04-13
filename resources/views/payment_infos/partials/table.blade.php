<table id="tb_index_payment_infos" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>
            ID
        </th>

        @include('payment_infos.partials.thead')

        <th style="width: 8%" class="sorting_desc_disabled">
            @lang('common.table_th_actions')
        </th>
    </tr>
    </thead>

    <tbody>
    @foreach($payment_infos as $item)
        <tr data-id="{{ 'tr_payment_info_'.$item->id }}">
            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('payment_infos.show', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>

            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('cleaners.show', $item->cleaner->id) }}">
                    {{ $item->cleaner->full_name }}
                </a>
            </td>

            <td>
                {{ $item->bank->name }}
            </td>

            <td>
                {{ $item->bsb }}
            </td>

            <td>
                {{ $item->account_number }}
            </td>

            <td title="{{ $item->description }}">
                {{--{{ $item->status_name }}--}}
                @if($item->is_default)
                    <span class="label label-success">@lang('validation.attributes.tag_yes')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
                @endif
            </td>

            <td>
                <a title="@lang('common.table_title_edit')" href="{{ url('payment_infos/'.$item->id.'/edit') }}" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil"></i>
                </a>
                &nbsp;&nbsp;
                {!! Form::open([
                    'method'=>'DELETE',
                    'route' => ['payment_infos.destroy', $item->id],
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

        @include('payment_infos.partials.thead')

        <th>
            @lang('common.table_th_actions')
        </th>
    </tr>
    </tfoot>
</table>