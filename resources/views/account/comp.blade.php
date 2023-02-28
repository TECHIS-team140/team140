<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
 
    <title>テスト画面</title>
    <meta name="description" content="アカウント登録完了">
</head>

<body>
    <main>
        <div class="mt-5 container-fluid" style="width:400px">
            <h1>アカウント登録成功！</h1>
            <a href="{{ url('/') }}">※ログイン画面はこちら</a>
        </div>
    </main>
</body>

</html>