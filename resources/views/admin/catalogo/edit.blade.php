<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Catalogo</title>
</head>
<body>
    <h1>Modifica Catalogo</h1>

    <form action="{{ route('catalogos.update', $catalogo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ $catalogo->name }}" required>
        <br>
        <label for="description">Descrizione:</label>
        <textarea id="description" name="description">{{ $catalogo->description }}</textarea>
        <br>
        <button type="submit">Aggiorna</button>
    </form>
</body>
</html>
