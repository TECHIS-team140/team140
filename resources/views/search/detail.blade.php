<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSSの読み込み -->
    <link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet" type="text/css">
    <title>商品詳細</title>
</head>

<body>
    @include('parts.nav')
    <h1 class="shadow-sm p-2 mb-4 bg-body rounded">
        <a class="text-body text-decoration-none" href="{{ route('index') }}">
            商品詳細
        </a>
    </h1>
    <div class="wrapper m-4">
        <a class="" href="{{ route('index') }}">
            <-商品一覧画面に戻る
        </a>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">名前</th>
                <th scope="col">種別</th>
                <th scope="col">更新日時</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->typeAsString() }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>
        </tbody>
        </table>
        <h2 class="fs-4">商品について：</h2>
        <p>{!! nl2br(e($item->detail)) !!}</p>
    </div>

</body>
</html>