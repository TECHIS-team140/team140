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
<header class="sticky-top ">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand ms-3" href="#">商品管理システム</a>
    <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/items') }}">商品一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/items/create') }}">新規登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}">ログアウト</a>
                </li>
            </ul>
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