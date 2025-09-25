<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello</title>
    </head>
    <body>
    @foreach ($errors->all() as $message)
        {{ $message }}
    @endforeach
    <form method="post" action="{{ route('questions.store') }}">
        @csrf
        <p><input type="text" name="name" value="Петя"></p>
        <p><textarea name="description">Тестовое описание</textarea></p>
        <p><button type="submit">Сохранить</button></p>
    </form>
    <a href="{{ route('questions.index') }}">К списку</a>
    </body>
</html>
