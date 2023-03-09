<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>アカウント編集画面</title>
        
        <!-- Bootstrap CSSの読み込み -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
         <!-- CSSの読み込み -->
        <link rel="stylesheet" href="/css/mfstyle.css">
    </head>

 <body class="edit">   
 <div class="border border-info round" style="margin:10px auto; padding:20px; width:400px;">

 <div style="width:320px; margin:60px auto; text-align:center;">
 
    <h4 class="name">アカウント編集 ID:{{$user->id}}</h4>
    @can('admin-higher')<p>(管理者画面)</p>@endcan
    <form action="/memberEdit" method="post">
    @csrf
<input type="hidden" value="{{$user->id}}" name = "id">

<!-- ログイン中の管理者かつ自分のID情報を表示する場合 または　利用者が自分のID情報を表示する場合-->
    @if((Auth::user()->role == 1 and $user->id == Auth::id()) or Auth::user()->role == 0)
    <input type="hidden" value="1" name = "type">
        <div style="text-align:left;">名前</div>    
        <div class="form-group">
            <input class="form-control" type="text" name="name" value="{{$user->name}}">
        </div>
        @if ($errors->has('name'))
        <p class="text-danger">{{$errors->first('name')}}</p>
        @endif    
        <div style="text-align:left;">メールアドレス</div>
        <div class="form-group">
            <input class="form-control" type="text" name="email" value="{{$user->email}}">
        </div>
        @if ($errors->has('email'))
        <p class="text-danger">{{$errors->first('email')}}</p>
        @endif
        
        <div style="text-align:left;">パスワード<span class="badge badge-danger ml-2">{{ __('必須') }}</span><small id="passwordHelpInline" class="text-muted">　8文字以上で入力して下さい</small></div>
        <div class="form-group">
            <input class="form-control" type="password" name="password">
        </div>
        @if ($errors->has('password'))
        <p class="text-danger">{{$errors->first('password')}}</p>
        @endif

        <div style="text-align:left;">パスワード確認<span class="badge badge-danger ml-2">{{ __('必須') }}</span></div>
        <div class="form-group">
            <input class="form-control" type="password" name="confirm_password" >
        </div>
        @if ($errors->has('confirm_password'))
            <p class="text-danger">{{ $errors->first('confirm_password') }}</p>
        @endif
        <input type="hidden" name="role" value= "{{$user->role}}">
        
    
    <!-- 管理者が利用者のID画面を編集する場合 -->
    @else
    <input type="hidden" value="2" name = "type">
        <div style="text-align:left;">名前</div>{{$user->name}}
        <input type="hidden" value="{{$user->name}}" name = "name">
        <div style="text-align:left;">メールアドレス</div>
        {{$user->email}}
        <input type="hidden" value="{{$user->email}}" name = "email">
    @endif


    <div class="form-group">
        <input class="form-control" type="hidden" name="id" value="{{$user->id}}">
    </div>

    @can('admin-higher')
    <div style="text-align:left;">アクセス権限</div>
    <div class="check-box">
    <div class="form-check1">
      <label class="form-check-label">
      <input type="radio" name="role" value= "1">管理者</label>
    </div>
    <div class="form-check2">
    <label class="form-check-label">
    <input type="radio" name="role" value= "0">利用者
    </div>
    </div>
    @if ($errors->has('role'))
        <p class="text-danger">{{$errors->first('role')}}</p>
        @endif   
    @endcan
    <div class="form-group">
        <button type="submit" class="btn btn-info btn-block ">編集</button>
    </div>
    @can('admin-higher')
    <div class="form-group">
        <a href="/memberDelete/{{$user->id}}"><button type="button" class="btn btn-info btn-block">削除</button>
    </div>
    @endcan
     <a href="/users" class="btn btn-outline-info" role="button">ユーザー管理に戻る </a>
    
    </form>
 </div>   

</div>



 <!-- jQuery,Popper.js,Bootstrap JSの順番で読み込む-->
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Popper.jsの読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Bootstrapのjsの読み込み -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 </body>
 </html>