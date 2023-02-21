<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<main>     
        <div class="container">
            <div class="row">
                <div class="col col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading m-3">
                           <h2> 商品登録</h2>
                        </div>
                        <div class="panel-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $message)
                                        <li>{{$message}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{route('item.create')}}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name">名前</label>
                                    <input type="text" id="name" value="{{old('name')}}" name="name" class="form-control" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="type">種別</label>
                                    <input type="text" id="type" value="{{old('type')}}" name="type" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="detail">詳細</label>
                                    <input type="text" id="detail" value="{{old('detail')}}" name="detail" class="form-control" />
                                </div>
                                <div class="text-right m-3">
                                    <button type="submit" class="btn btn-primary">
                                        登録
                                    </button>
                                </div>
                            </form>
                        </div>   
                    </div>

            </div>
        </div>

       
        </main>
    </div>
</body>
 
</html>