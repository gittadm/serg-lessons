<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello</title>
    </head>
    <body>
    <h3>Редактирование Вопрос #{{ $question->id }}</h3>
    @foreach ($errors->all() as $message)
        {{ $message }}
    @endforeach
    <form method="post" action="{{ route('questions.update', [$question->id]) }}">
        @csrf
        @method('put')
        <p><input type="text" name="name" value="{{ old('name', $question->name) }}" autocomplete="off"></p>
        <p><textarea name="description">{{ old('description', $question->description) }}</textarea></p>
        <p><select name="phone">
                <option value="+343434343111" @if(old('phone') == "+343434343111") selected @endif>+343434343111</option>
                <option value="+34343434388" @if(old('phone', "+34343434388") == "+34343434388") selected @endif>+343434343888</option>
                <option value="+343434343555">+343434343555</option>
            </select>
        </p>
        <p>
            <input type="checkbox" name="is_quick" value="1" @if(old('is_quick', $question->is_quick) == "1") checked @endif> Срочно
        </p>
        <p><button type="submit">Сохранить</button></p>
    </form>
    <a href="{{ route('questions.index') }}">К списку</a>
    </body>
</html>
