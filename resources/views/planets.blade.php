<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Planeten Overzicht</title>
</head>
<body>
    <h1>Planeten</h1>

    <ul>
        @forelse ($planets as $planet)
            <li>
                <strong>{{ $planet['name'] }}</strong>
                <p>{{ $planet['description'] }}</p>
            </li>
        @empty
            <li>Geen planeet gevonden met deze naam.</li>
        @endforelse
    </ul>
</body>
</html>