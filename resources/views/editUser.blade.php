<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>

<form action="{{route('users.edit',['user'=>$user->id])}}" method='post'>
    @csrf
    @method('PUT')
    <label for="">Nome do usuário</label>
    <input type="text" name='name' value="{{$user->name}}">

    <label for="">E-mail do usuário</label>
    <input type="email" name='email' value="{{$user->email}}">

    <label for="">Senha do usuário</label>
    <input type="password" name='password'>

    <input type="submit" value='Editar usuário'>

</form>
    
</body>
</html>