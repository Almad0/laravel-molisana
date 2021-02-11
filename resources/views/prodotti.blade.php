<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>la molisana @yield('homeTitle')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>

    <body>

      <header>
        @include('partials.header')
      </header>

      <main>
        <h2>Paste lunghe</h2>

        <div class="pasteLunghe">
          @foreach ($pasteDB as $value)
            @if ($value['tipo'] =="lunga")
              <img src="{{$value['src']}}" alt="">
            @endif
          @endforeach
        </div>
      </main>

      <footer>

      </footer>
    </body>
</html>
