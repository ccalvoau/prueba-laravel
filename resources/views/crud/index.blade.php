CRUD INDEX

<hr>

<a href="{{ route('crud.create') }}" class="">
    Create
</a>

<hr>

@if(Session::has('flash_message'))
    <div class="alert alert-info">
        {{Session::get('flash_message')}}
    </div>

    <hr>
@endif

<div class="box-body">
    @include('crud.partials.table')
</div><!-- /.box-body -->