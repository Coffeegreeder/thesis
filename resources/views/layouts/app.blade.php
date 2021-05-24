<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Styles -->
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
  <div id="app">
    <header>
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
</body>

</html>
