<html>

<head>
    <title>Blog</title>
</head>

<body>
    <h1>Cadastrar Post</h1>

    <form action="{{ route('posts.store') }}" method="post">

        <!-- @csrf é utilizado para criar um token de validação do formulário -->
        @csrf
        <input type="text" name="titulo" id="titulo" placeholder="Digite um título">
        <textarea name="conteudo" id="conteudo" cols="30" rows="5" placeholder="Digite o conteudo"> </textarea>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>