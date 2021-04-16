<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Página para agregar usuarios</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store']) !!}
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
                 {!!Form::label('password', 'Clave: ')!!}
                </td>
                <td>
                 {!!Form::text('password')!!}
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
                 {!!Form::label('foto', 'Foto: ')!!}
                </td>
                <td>
                 {!!Form::file('ruta_foto')!!}
                </td>
            </tr>

            <tr>
                <td>
                 {!!Form::submit('Crear Usuario')!!}
                </td>
                <td>
                 {!!Form::reset('Limpiar')!!}
                </td>
            </tr> 
        </table>
    {!! Form::close() !!}
    
</body>
</html>