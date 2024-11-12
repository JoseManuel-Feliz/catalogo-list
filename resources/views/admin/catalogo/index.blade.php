<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista di Oggetti</title>
</head>

<body>
    <h1>Lista di Oggetti</h1>

    <ul>
        @foreach ($catalogos as $catalogo)
        <li>
            <strong>{{ $object->name }}</strong>: {{ $object->description }}
        </li>
        @endforeach
    </ul>
</body>

</html>