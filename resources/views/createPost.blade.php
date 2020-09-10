<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('post.store')}}" method='post'>
@csrf
<label for="">Título</label>
<input type="text" name='title'>


<input type="text" name='text'>

<input type="submit" value='enviar post'>

</form>
</body>
</html>