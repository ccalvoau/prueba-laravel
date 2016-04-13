CRUD SHOW

<hr>

Showing Crud: {{ $id }}

<hr>

@if(Session::has('flash_message'))
    <div class="alert alert-info">
        {{Session::get('flash_message')}}
    </div>

    <hr>
@endif

<div class="box-body">
    <table id="tb_show_crud" class="table table-bordered table-striped">
        <tbody>
            <tr>
                <td colspan="2">
                    USUARIO
                </td>
            </tr>
            <tr>
                <td>
                    Usuario ID:
                </td>
                <td>
                    {{ $usuario->id }}
                </td>
            </tr>
            <tr>
                <td>
                    First Name:
                </td>
                <td>
                    {{ $usuario->first_name }}
                </td>
            </tr>
            <tr>
                <td>
                    Last Name:
                </td>
                <td>
                    {{ $usuario->last_name }}
                </td>
            </tr>
            <tr>
                <td>
                    Full Name:
                </td>
                <td>
                    {{ $usuario->full_name }}
                </td>
            </tr>
            <tr>
                <td>
                    Birthday:
                </td>
                <td>
                    {{ $usuario->birthday }}
                </td>
            </tr>
            <tr>
                <td>
                    Status:
                </td>
                <td>
                    {{ $usuario->status }}
                </td>
            </tr>
            <tr>
                <td>
                    Status Name:
                </td>
                <td>
                    {{ $usuario->status_name }}
                </td>
            </tr>
            <tr>
                <td>
                    Age:
                </td>
                <td>
                    {{--{{ $usuario->age }}--}}
                </td>
            </tr>
            <tr>
                <td>
                    Created At:
                </td>
                <td>
                    {{ $usuario->created_at->format('d/m/Y H:i:s') }}
                </td>
            </tr>
            <tr>
                <td>
                    Updated At:
                </td>
                <td>
                    {{ $usuario->updated_at->format('d/m/Y H:i:s') }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    USUARIO PROFILE
                </td>
            </tr>
            <tr>
                <td>
                    Usuario Profile ID:
                </td>
                <td>
                    {{ $usuario->usuarioProfile->id }}
                </td>
            </tr>
            <tr>
                <td>
                    Facebook:
                </td>
                <td>
                    {{ $usuario->usuarioProfile->facebook }}
                </td>
            </tr>
            <tr>
                <td>
                    Twitter:
                </td>
                <td>
                    {{ $usuario->usuarioProfile->twitter }}
                </td>
            </tr>
            <tr>
                <td>
                    Description:
                </td>
                <td>
                    {{ $usuario->usuarioProfile->description }}
                </td>
            </tr>
            <tr>
                <td>
                    Created At:
                </td>
                <td>
                    {{ $usuario->usuarioProfile->created_at->format('d/m/Y H:i:s') }}
                </td>
            </tr>
            <tr>
                <td>
                    Updated At:
                </td>
                <td>
                    {{ $usuario->usuarioProfile->updated_at->format('d/m/Y H:i:s') }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- /.box-body -->

<hr>

<a href="{{ route('crud.index') }}" class="btn btn-primary pull-right btn-sm">
    Volver al Index
</a>