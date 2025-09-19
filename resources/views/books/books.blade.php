<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de livros</title>
</head>
<body>
    <h1>Catálogo de livros</h1>
    <a href="{{ route('books.create') }}">+ Adicionar livro</a>
    <ul>
        @foreach ($books as $book)
            <li>{{$book->id}} - {{$book->title}} | <a href="{{ route('books.edit', ['book' => $book->id]) }}">Editar</a> | <a href="{{ route('books.show', ['book' => $book->id]) }}">Mostrar</a></li>
        @endforeach
    </ul>
</body>
</html>