CRUD CREATE

<hr>

@include('layout.partials.errors')

<hr>

FORM

{!! Form::open(['route' => 'crud.store', 'class' => '', 'method' => 'POST']) !!}

@include('crud.partials.fields')

{!! Form::submit('BUTTON SUBMIT', ['class' => '']) !!}
{!! Form::close() !!}

<hr>

<a href="{{ route('crud.index') }}" class="btn btn-primary pull-right btn-sm">
    Volver al Index
</a>