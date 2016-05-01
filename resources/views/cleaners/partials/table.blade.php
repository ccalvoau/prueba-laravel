<div>
    @lang('validation.attributes.toggle_columns'):&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="2">@lang('validation.attributes.cleaner.id_type')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="3">@lang('validation.attributes.cleaner.id_number')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="5">@lang('validation.attributes.cleaner.date_of_birth')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="7">@lang('validation.attributes.cleaner.nationality')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="8">@lang('validation.attributes.cleaner.mother_tongue')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="9">@lang('validation.attributes.cleaner.english_level')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="11">@lang('validation.attributes.cleaner.email')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="12">@lang('validation.attributes.cleaner.tfn')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="14">@lang('validation.attributes.cleaner.driving_licence')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="17">@lang('validation.attributes.cleaner.no_jobs')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="18">@lang('validation.attributes.cleaner.no_hours')</a>&nbsp;
    <a class="btn btn-default btn-xs toggle-vis" data-column="19">@lang('validation.attributes.cleaner.profit')</a>
</div>

<hr />

<table id="tb_index_cleaners" class="table table-bordered table-striped table-hover">
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
                @if(Auth::user()->hasAnyRole([1,2]) || (Auth::user()->hasAnyRole([3,4]) && Auth::user()->id == $item->user_id ))
                    <a title="@lang('common.table_title_show')" href="{{ route('cleaners::show', $item->id) }}">
                        {{ $item->id }}
                    </a>
                @else
                    {{ $item->id }}
                @endif
            </td>

            <td title="{{ $item->ide }}">
                {{ $item->short_name }}
            </td>

            <td>
                {{ $item->document->name }}
            </td>

            <td>
                {{ $item->id_number }}
            </td>

            <td title="{{ $item->dob }}">
                {{ $item->age }}
            </td>

            <td>
                {{ $item->dob }}
            </td>

            <td title="{{ $item->country->citizenship }} / {{ $item->language->name }}">
                @if($item->gender == "M")
                    <span class="label label-primary">@lang('validation.attributes.cleaner.gender_male')</span><i class="fa fa-mars pull-right"></i>
                @else
                    <span class="label label-danger">@lang('validation.attributes.cleaner.gender_female')</span><i class="fa fa-venus pull-right"></i>
                @endif
            </td>

            <td>
                {{ $item->country->citizenship }}
                {!! Html::image('assets/img/flags/'.$item->country->flag, $item->country->name, ['title' => $item->country->name, 'class' => 'pull-right']) !!}
            </td>

            <td>
                {{ $item->language->name }}
            </td>

            <td>
                {{ $item->englishLevel->lse_class }}
            </td>

            <td title="{{ $item->email }}">
                {{ $item->phone_number }}
            </td>

            <td>
                {{ $item->email }}
            </td>

            <td>
                @if($item->tfn != "")
                    {{ $item->tfn }}
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
                @endif
            </td>

            <td title="{{ $item->tfn }}">
                @if($item->abn != "")
                    {{ $item->abn }}
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
                @endif
            </td>

            <td>
                @if($item->licence_no != "")
                    {{ $item->licence_no }}
                @else
                    <span class="label label-danger">@lang('validation.attributes.tag_no')</span>
                @endif
            </td>

            @if($item->licence_no != "")
                <td title="{{ $item->licence_no }}">
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

            <td align="right">
                {{ $item->no_jobs }}
            </td>

            <td align="right">
                <i class="fa fa-hourglass-o pull-left"></i>{{ $item->no_hours }}
            </td>

            <td align="right">
                <i class="fa fa-dollar pull-left"></i>{{ number_format($item->profit, 2, '.', ',') }}
            </td>

            <td align="center">
                @if(Auth::user()->hasAnyRole([1,2]) || (Auth::user()->hasAnyRole([3,4]) && Auth::user()->id == $item->user_id ))
                    <a title="@lang('common.table_title_edit')" href="{{ route('cleaners::edit', ['id' => $item->id]) }}" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i>
                    </a>
                @endif

                @if(Auth::user()->hasAnyRole([1,2]))
                    &nbsp;
                    {!! Form::open([
                        'method'=>'DELETE',
                        'route' => ['cleaners::destroy', $item->id],
                        'style' => 'display:inline'
                    ]) !!}
                        <button type="submit" title="@lang('common.table_title_delete')" class="btn btn-danger btn-xs">
                            <i class="fa fa-remove"></i>
                        </button>
                    {!! Form::close() !!}
                @endif
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