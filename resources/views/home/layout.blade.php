<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link href="{{ asset('css/style_eve.css') }}" rel="stylesheet"> 
     <title>ホーム</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="">会社名</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">ホーム</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">商品一覧</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">ログアウト</a>
                </li>
            </ul>
        </div>
    </nav> 
@yield('contents')
 </body>
</html>