<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $planet['name'] }}</title>
</head>
<body>
    <h1>{{ $planet['name'] }}</h1>
    <p>{{ $planet['description'] }}</p>

    <br>
    <a href="/planets">← Terug naar alle planeten</a>
</body>
</html>