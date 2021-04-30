<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Página principal del administrador</h1>

    <table width="600" border="1">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Foto:</th>
            <th scope="col">Role Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Creado</th>
            <th scope="col">Actualizado</th>
        </tr>

        @if ($users)
         @foreach ($users as $user)
           <tr>
            <td>{{$user->id}}</td>
            <td><img src="/images/{{$user->foto ? $user->foto->ruta_foto : 'generico.jpg'}}" width="80px"/></td> 
            <td>{{$user->role_id}}</td>

            <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>

            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
           </tr>  
         @endforeach   
        @endif
    </table>
    
</body>
</html>