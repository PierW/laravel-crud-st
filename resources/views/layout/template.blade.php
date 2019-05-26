<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="{{mix('js/app.js')}}" charset="utf-8"></script>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
  <body>
    <header class="text-white">
      <h1>Header</h1>
    </header>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
      <ul>
        <li>{{session('success')}}</li>
      </ul>
    </div>
    @endif

    @yield('content')

    <footer class="text-white">
      <h1>Footer</h1>
    </footer>
  </body>
</html>
