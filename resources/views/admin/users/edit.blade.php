<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Página para editar usuarios</h1>

    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}
    <table>
        <tr>
            <td>
             {!!Form::label('name', 'Nombre: ')!!}
            </td>
            <td>
             {!!Form::text('name')!!}
            </td>
        </tr>
        <tr>
            <td>
             {!!Form::label('email', 'E-Mail: ')!!}
            </td>
            <td>
             {!!Form::text('email')!!}
            </td>
        </tr>
        <tr>
            <td>
             {!!Form::label('email_verified_at', 'Repita E-Mail: ')!!}
            </td>
            <td>
             {!!Form::text('email_verified_at')!!}
            </td>
        </tr>
        <tr>
            <td>
             {!!Form::label('role_id', 'Role: ')!!}
            </td>
            <td>
             {!!Form::text('role_id')!!}
            </td>
        </tr>
        <tr>
            <td>
             {!!Form::label('foto_id', 'Foto: ')!!}
            </td>
            <td>
             {!!Form::file('foto_id')!!}
            </td>
        </tr>

        <tr>
            <td>
             {!!Form::submit('Actualizar Usuario')!!}
            </td>
            <td>
             {!!Form::reset('Limpiar')!!}
            </td>
        </tr> 
    </table>
{!! Form::close() !!}
    
</body>
</html>