<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../Views/css/style.css">
 
    <title>ログイン画面</title>
    <meta name="description" content="ログイン画面です">
</head>

<body>
    <main>
        <!-- サインアップフォーム -->
        <form action="{{ url('/account/home_user')}}" method="GET" class="form-horizontal">
            {{ csrf_field() }}

            <h1>ログイン</h1>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="text" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-plus"></i>ログイン
            </button>
            <p><a href="{{ url('/account/signup') }}">※初めてご利用される方はこちら</a></p>
        </form>
    </main>
</body>

</html>