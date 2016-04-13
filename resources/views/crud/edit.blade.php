CRUD EDIT

<hr>

@include('layout.partials.errors')

<hr>

@if(Session::has('flash_message'))
    <div class="alert alert-info">
        {{Session::get('flash_message')}}
    </div>

    <hr>
@endif

FORM

{!! Form::model($usuario, ['route' => ['crud.update', $id], 'class' => '', 'method' => 'PUT']) !!}

@include('crud.partials.fields')

{!! Form::submit('UPDATE SUBMIT', ['class' => '']) !!}
{!! Form::close() !!}

<hr>

<a href="{{ route('crud.index') }}" class="btn btn-primary pull-right btn-sm">
    Volver al Index
</a>