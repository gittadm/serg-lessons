<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello</title>
    </head>
    <body>

    @foreach($questions as $question)
        {{ $question->id }} | {{ $question->name }} <br>
    @endforeach
    </body>
</html>
