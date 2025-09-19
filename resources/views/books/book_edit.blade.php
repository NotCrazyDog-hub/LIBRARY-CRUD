<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de livros</title>
</head>
<body>
    <h1>Edição de livros</h1>
    <form action="{{ route('books.update', ['book' => $book->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="title" value="{{ $book->title }}">
        <br>
        <input type="text" name="author" value="{{ $book->author }}">
        <br>
        <input type="submit" value="Atualizar livro">
    </form>
</body>
</html>