<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSSの読み込み -->
    <link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet" type="text/css">
    <title>商品一覧</title>
</head>

<body>
    @include('parts.nav')
    <h1 class="shadow-sm p-2 mb-4 bg-body rounded">
        <a class="text-body text-decoration-none" href="{{ route('index') }}">
            商品一覧
        </a>
    </h1>

    <div class="wrapper m-4">
        <div class="post-search-form col-md-6">
        <form class="form-inline" action="{{ route('index') }}" method="get">
            <div class="form-group d-flex">
                <select name="type" class="form-select text-muted w-25 bg-light" aria-label="Default select example">
                    <option value="" selected>種別を選択</option>
                    @foreach(config('pref') as $key => $score)
                    <option value="{{$key}}">{{ $score }}</option>
                    @endforeach
                </select>
                <input type="text" name="keyword"  class="form-control" placeholder="キーワードを入力">
                <input type="submit" value="検索" class="btn btn-primary">
            </div>
        </form>
        </div>


        <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">名前</th>
                <th scope="col">種別</th>
                <th scope="col">更新日時</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody">
        @foreach ($items as $item)
            <tr class="align-baseline">
                <td scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->typeAsString() }}</td>
                <td>{{ $item->updated_at }}</td>
                <td><a href="{{ route('detail', ['id'=>$item->user_id]) }}" class="btn btn-outline-success ">詳細</a></td>
            </tr>
        @endforeach
        </tbody>
        </table>


</body>
</html>