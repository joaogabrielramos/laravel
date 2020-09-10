<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de post</title>
</head>
<body>
    


<table>
<tr>
    <td>#ID</td>
    <td>Título:</td>
    <td>Conteudo:</td>
    <td>Açôes:</td>


</tr>


    @foreach($posts as $post)

        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->text}}</td>
            <td>
                <a href="">Post</a>
                <form action="{{Route('post.destroy',['post'=>$post->id])}}" method='post'>
                @csrf
                @method('delete')
                    <input type="hidden" name='post' value=''>
                    <input type="submit" value='remover'>
                </form>



            </td>
        </tr>
    @endforeach
</table>

</body>
</html>