<html>

<head>
    <title>Blog</title>
</head>

<body>
    <a href="{{ route( 'posts.create') }}"> Criar Post</a>

    <h1>Listagem de Posts</h1>

    @foreach($posts as $post)
    <p>
        {{$post->titulo}}
        [ <a href="{{ route( 'posts.show', $post->id ) }}">Conteúdo</a>]
        [ <a href="{{ route( 'posts.edit', $post->id ) }}">Editar</a>]
    </p>
    @endforeach
</body>

</html>