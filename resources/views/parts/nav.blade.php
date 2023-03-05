<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="">商品管理システム</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
            @auth
@if (auth()->user()->role === 1)
                <li class="nav-item active">
                    <a class="nav-link" href="/users">ユーザー管理</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/items">商品管理</a>
                </li>
                @endif
@endauth
                <li class="nav-item active">
                    <a class="nav-link" href="/home">ホーム</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/search">商品一覧</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">ログアウト</a>
                </li>
                <li class ="nav-item active">
                    <p class ="nav-link">ようこそ、{{ $user->name }}さん</p>
                </li>
            </ul>
        </div>
    </nav> 