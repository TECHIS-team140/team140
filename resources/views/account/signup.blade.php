<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../Views/css/style.css">
 
    <title>アカウント登録画面</title>
    <meta name="description" content="アカウント登録画面です">
</head>

<body>
    <main>
        <!-- バリデーションエラーの表示 -->
        @include('account.common.errors')

        <!-- サインアップフォーム -->
        <form action="{{ url('/account/home_user')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <h1>新規アカウント登録</h1>
            <a href="{{ url('/') }}">※すでにアカウントをお持ちの方はこちら</a>
            <div class="form-group">
                <label for="name">ユーザー名</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">パスワード（確認）</label>
                <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-plus"></i>アカウント登録
            </button>
        </form>
    </main>
</body>

</html>