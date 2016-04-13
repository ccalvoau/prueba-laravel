<table id="tb_index_crud" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th title="ID">
            ID
        </th>
        <th>
            Name
        </th>
        <th title="Birthday">
            Age
        </th>
        <th>
            Facebook
        </th>
        <th>
            Twitter
        </th>
        <th title="descripcion">
            Status
        </th>
        <th style="width: 8%" class="sorting_desc_disabled">
            Actions
        </th>
    </tr>
    </thead>

    <tbody>
    @foreach($usuarios as $item)
        <tr data-id="{{ $item->id }}">
            <td>
                <a href="{{ url('crud', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>
            <td>
                {{ $item->full_name }}
            </td>
            <td title="{{ $item->bod }}">
                {{ $item->age }}
            </td>
            <td>
                {{ $item->usuarioProfile->facebook }}
            </td>
            <td>
                {{ $item->usuarioProfile->twitter }}
            </td>
            <td title="{{ $item->usuarioProfile->description }}">
                {{ $item->status }}
            </td>
            <td>
                <a title="EDIT" href="{{ url('crud/'.$item->id.'/edit') }}"
                   class="btn btn-primary btn-xs">EDIT<i class="fa fa-pencil"></i></a>
                &nbsp;&nbsp;
                {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['crud', $item->id],
                    'style' => 'display:inline'
                ]) !!}
                {!! Form::submit('DELETE', ['class' => 'btn btn-danger btn-xs fa fa-remove']) !!}<i class="fa fa-remove"></i>
                {!! Form::close() !!}
                <a title="DELETE"
                   class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
            </td>
            {{--
            <td>
                <a href="{{ url('cleaners/' . $cleaner->id . '/edit') }}">
                    <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Update</button>
                </a>&nbsp;&nbsp;
                {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['cleaners', $cleaner->id],
                    'style' => 'display:inline'
                ]) !!}
                <button type="submit" value="Delete" class="btn btn-danger btn-xs"><i class="fa fa-times-circle"></i> Delete</button>
                {!! Form::close() !!}
            </td>
            --}}
        </tr>
    @endforeach
    </tbody>

    <tfoot>
    <tr>
        <th title="ID">
            ID
        </th>
        <th>
            Name
        </th>
        <th>
            Age
        </th>
        <th>
            Facebook
        </th>
        <th>
            Twitter
        </th>
        <th title="descripcion">
            Status
        </th>
        <th>
            Actions
        </th>
    </tr>
    </tfoot>
</table>