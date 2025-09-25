<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello</title>
    </head>
    <body>
    <p style="color: green;">{{ session('message') }}</p>
    {{ $question->id }} | {{ $question->name }} | {{ $question->description }}<br>
    <a href="{{ route('questions.index') }}">К списку</a>
    </body>
</html>
