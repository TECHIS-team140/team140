<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    @yield('styles')
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/items">＞＞商品一覧</a>
    <div class="my-navbar-control">
      @if(Auth::check())
      <span class="my-navbar-item">ようこそ, {{ Auth::user()->name }}さん</span>
        
        <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>

      @endif
    </div>
  </nav>
</header>
<main>     
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div> 
</main>
@yield('scripts')   
</body>
 
</html>