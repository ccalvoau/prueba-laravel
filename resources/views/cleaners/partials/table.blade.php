<table id="tb_index_cleaners" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>
            ID
        </th>

        @include('cleaners.partials.thead')

        <th style="width: 8%" class="sorting_desc_disabled">
            @lang('common.table_th_actions')
        </th>
    </tr>
    </thead>

    <tbody>
    @foreach($cleaners as $item)
        <tr data-id="{{ 'tr_cleaner_'.$item->id }}">
            <td>
                <a title="@lang('common.table_title_show')" href="{{ route('cleaners.show', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>

            <td title="{{ $item->ide }}">
                {{ $item->short_name }}
            </td>

            <td title="{{ $item->dob }}">
                {{ $item->age }}
            </td>

            <td>
                @if($item->gender == "M")
                    <span class="label label-primary">@lang('validation.attributes.cleaner.gender_male')</span><i class="fa fa-mars pull-right"></i>
                @else
                    <span class="label label-danger">@lang('validation.attributes.cleaner.gender_female')</span><i class="fa fa-venus pull-right"></i>
                @endif
            </td>

            <td title="{{ $item->email }}">
                {{ $item->phone_number }}
            </td>

            <td title="{{ $item->tfn }}">
                {{ $item->abn }}
            </td>

            @if($item->dlicence_no != "")
                <td title="{{ $item->dlicence_no }}">
            @else
                <td>
            @endif
            @if($item->own_vehicle)
                    <i class="icon fa fa-truck"></i>
                </td>
            @else
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
                </td>
            @endif

            <td title="{{ $item->description }}">
                @if($item->status)
                    <span class="label label-success">@lang('validation.attributes.tag_active')</span>
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_inactive')</span>
                @endif
            </td>

            <td>
                <a title="@lang('common.table_title_edit')" href="{{ url('cleaners/'.$item->id.'/edit') }}" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil"></i>
                </a>
                &nbsp;&nbsp;
                {!! Form::open([
                    'method'=>'DELETE',
                    'route' => ['cleaners.destroy', $item->id],
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

        @include('cleaners.partials.thead')

        <th>
            @lang('common.table_th_actions')
        </th>
    </tr>
    </tfoot>
</table>