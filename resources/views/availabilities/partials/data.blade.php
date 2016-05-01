<table class="table table-bordered">
    <tbody>
    <tr>
        <td class="td_data_names">
            @lang('validation.attributes.availability.cleaner_name'):
        </td>
        <td class="td_data_values" title="{{ $cleaner->name }}">
            @if(Auth::user()->hasAnyRole([1]) || (Auth::user()->hasAnyRole([3,4]) && Auth::user()->cleaner_id == $cleaner->id))
                <a title="@lang('validation.attributes.cleaner.show')" href="{{ route('cleaners::show', ['id' => $cleaner->id]) }}">
                    {{ $cleaner->full_name }}
                </a>
            @else
                {{ $cleaner->full_name }}
            @endif
            {!! Form::hidden('h_timetable', $cleaner->availability->timetable, [
                'id' => 'h_timetable'])
            !!}
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
    </tbody>
</table>

@include('availabilities.partials.table_availability')