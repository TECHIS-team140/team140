<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
 
    <title>アカウント登録</title>
    <meta name="description" content="アカウント登録画面です">
</head>

<body>
    <main>
        <div class="my-5 container-fluid" style="width:400px">
            <!-- バリデーションエラーの表示 -->
            @include('account.common.errors')

            <!-- サインアップフォーム -->
            <form action="/account/store" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <h1 class="text-center">新規アカウント登録</h1>

                <a href="{{ url('/') }}" class="my-3 row justify-content-center">※すでにアカウントをお持ちの方はこちら</a>
                
                <div class="my-3 form-group">
                    <label for="name">ユーザー名</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="my-3 form-group">
                    <label for="email">メールアドレス</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="my-3 form-group">
                    <label for="password">パスワード</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="my-3 form-group">
                    <label for="password_confirmation">パスワード（確認）</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <button type="submit" class="my-3 btn btn-primary d-grid mx-auto" style="width: 130px">
                    <i class="fa fa-plus"></i>アカウント登録
                </button>
            </form>
        </div>
    </main>
</body>

</html>