<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
 
    <title>ログイン画面</title>
    <meta name="description" content="ログイン画面です">
</head>

<body>
    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
            <div class="flash_message bg-success text-center text-white py-3 my-0">
                {{ session('flash_message') }}
            </div>
    @endif

    <main>
        <div class="my-5 container-fluid" style="width:400px">
            <!-- ログインフォーム -->
            <form action="/account/auth" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                
                <h1 class="text-center">ログイン</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="my-3 form-group">
                    <label for="email">メールアドレス</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="my-3 form-group">
                    <label for="password">パスワード</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary d-grid mx-auto" style="width: 130px">
                    <i class="fa fa-plus"></i>ログイン
                </button>

                <p><a href="{{ url('/account/signup') }}" class="my-3 row justify-content-center">※初めてご利用される方はこちら</a></p>
            </form>
        </div>
    </main>
</body>

</html>