<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dei Cataloghi</title>
</head>
<body>
    <h1>Lista dei Cataloghi</h1>

    <a href="{{ route('catalogos.create') }}">Crea Nuovo Catalogo</a>
    <ul>
        @foreach ($catalogos as $catalogo)
            <li>
                <strong>{{ $catalogo->name }}</strong>
                <a href="{{ route('catalogos.show', $catalogo->id) }}">Visualizza</a>
                <a href="{{ route('catalogos.edit', $catalogo->id) }}">Modifica</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
