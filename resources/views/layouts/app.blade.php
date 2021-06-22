<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Styles -->
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">


</head>

<body>
  <div id="app">
    <header class="layout-header">
      <div class="logo">
        <a href="{{ route('home') }}">reaph</a>
      </div>
      <v-nav></v-nav>
  </header>
        <main class="container">
          <div class="row">
            <router-view></router-view>
          </div>
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/victor/1.1.0/victor.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.1.1/pixi.min.js"></script>
    <script src="{{ asset('js/ruler.js') }}"></script>
    <script src="{{ asset('js/JQuery.js') }}"></script>
    <script src="{{ asset('js/jquery.gridster.min.js') }}"></script>
</body>

</html>
