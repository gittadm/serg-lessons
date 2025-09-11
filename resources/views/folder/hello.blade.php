<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello</title>
    </head>
    <body>
      <h1>Hello</h1>
      <p>{{ $date }}</p>

      <p>{{ $randomValue }}</p>
      @php
        $year = date('Y');
      @endphp

      @if($count > 50)
        <p>Достигнут предел</p>
      @else
        <p>{{ $count }}</p>
      @endif

      @foreach($products as $index => $product)
          @if($index === 0)
              !!!
          @endif
          <p @if($product['price'] > 100) style="color: red;" @endif>{!! $product['name'] . '!' !!}, {{ $product['price'] }} p ({{ $year }})</p>
      @endforeach

    <a href="{{ route('tasks.task1') }}">task1</a>
    </body>
</html>
