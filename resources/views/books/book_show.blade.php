<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<body>
    <h1>Livro - "{{ $book->title }}"</h1>
    <p>De {{ $book->author }}</p>
    <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="Deletar livro">
    </form>
</body>
</html>