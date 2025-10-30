<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello</title>

    </head>
    <body>
      <h1>Relations</h1>
      Просмотры: {{ $views }}

    @foreach($articles as $article)
        {{ $article->title }} <br>
        {{ $article->user?->name }}
{{--        {{ $article->user?->cars }}--}}
        <hr>
    @endforeach

    </body>
</html>
