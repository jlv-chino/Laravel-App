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

    @if (Session::has('usuario_borrado'))
       <p class="bg-danger">{{session('usuario_borrado')}}</p> 
    @endif

    <h1 style="text-align: center; margin:50px 0">Página principal del administrador</h1>

    <table width="600" class="table">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>