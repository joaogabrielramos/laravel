<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Usuário</title>
</head>
<body>
    
    <h1>{{$user->name}}</h1>
    <p>{{$user->email}}</p>
    <p>{{date('d/m/y h:i',strtotime($user->created_at))}}</p>

</body>
</html>