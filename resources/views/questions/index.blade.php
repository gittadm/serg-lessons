<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello</title>
    </head>
    <body>

    {{ __('my.word') }}
    <p><a href="{{ route('questions.create') }}">Добавить вопрос</a></p>

    @if(session()->has('message'))
        <p style="color: green;">{{ session('message') }}</p>
    @endif

    @foreach($questions as $question)
        {{ $question->id }} | {{ $question->name }} | {{ $question->description }}
        <a href="{{ route('questions.show', [$question->id]) }}">Посмотреть</a>
        <a href="{{ route('questions.edit', [$question->id]) }}">Редактировать</a>
        @if($question->trashed())
            <a href="{{ route('questions.destroy', [$question->id]) }}">Восстановить</a>
{{--        <form><button type="submit">Удалить</button></form>--}}
        @else
            <a href="{{ route('questions.destroy', [$question->id]) }}">Удалить мягко</a>

        @endif
        <a href="{{ route('questions.destroy', [$question->id]) }}">Удалить полностью</a>

        <br>
    @endforeach

{{--    {{ $question?->id }}--}}
{{--    {{ empty($question) ? '' : $question->id }}--}}
    </body>
</html>
