<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Nuovo Oggetto</title>
</head>
<body>
    <h1>Crea Nuovo Oggetto</h1>

    <form action="{{ route('objects.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">Descrizione:</label>
        <textarea id="description" name="description"></textarea>
        <br>
        <button type="submit">Salva</button>
    </form>
</body>
</html>
