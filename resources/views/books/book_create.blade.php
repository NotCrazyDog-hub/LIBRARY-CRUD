<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>
    <h1>Cadastro de livros</h1>
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Título do livro">
        <br>
        <input type="text" name="author" placeholder="Autor do livro">
        <br>
        <input type="submit" value="Cadastrar livro">
    </form>
</body>
</html>