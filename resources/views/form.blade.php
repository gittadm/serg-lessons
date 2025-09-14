<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form</title>
    </head>
    <body>
        <h1>Form</h1>
        <form method="post" action="{{ route('form.store') }}">
            @csrf
            <input type="text" name="address" required><br><br>
            <select name="type">
                <option>Type 1</option>
                <option>Type 2</option>
            </select><br><br>
            <input type="checkbox" name="is_quickly" value="1"> Срочно<br><br>
            <button type="submit">Отправить</button>
        </form>
        <p>{{ session('message') }}</p>
    </body>
</html>
