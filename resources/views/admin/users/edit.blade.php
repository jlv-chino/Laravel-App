<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center; margin:50px 0">Página para editar usuarios</h1>

    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}
    <table width="600" class="table">
        <tr>
            <td><img src="/images/{{$user->foto ? $user->foto->ruta_foto : 'generico.jpg'}}" width="80px"/></td>        
        </tr>
        <tr>
            <td colspan="2">
             {!!Form::file('foto_id')!!}
            </td>
        </tr>
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
             {!!Form::submit('Actualizar Usuario')!!}
            </td>
            <td>
             {!!Form::reset('Limpiar')!!}
            </td>
        </tr> 
    </table>
{!! Form::close() !!}

{!! Form::model($user, ['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
<table width="600" class="table">
    <tr>
        <td>
           {!!Form::submit('Eliminar Usuario')!!} 
        </td>
    </tr>   
</table>    
{!! Form::close() !!}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>