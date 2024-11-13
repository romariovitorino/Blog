<html>

<head>
    <title>Blog</title>
</head>

<body>
    <h1>Editar o post <strong>{{ $post->titulo }}</strong></h1>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        <!-- @csrf é utilizado para criar um token de validação do
formulário -->
        @csrf
        @method('put')
        <input type="text" name="titulo" id="titulo" placeholder="Digite
um título" value="{{ $post->titulo }}">
        <textarea name="conteudo" id="conteudo" cols="30" rows="5" placeholder="Digite o conteudo">{{ $post->titulo }}
        </textarea>
        <button type="submit">Alterar</button>
    </form>
</body>

</html>