<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>アカウント編集画面</title>
        <!-- Bootstrap CSSの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
    </head>

 <body>   
 <div style="text-align:left;">
     <a href="/users"> >>ユーザー一覧に戻る </a>
    </div>
 <div style="width:300px; margin:100px auto; text-align:center;">
    <h4>アカウント編集 ID:{{$user->id}}</h4>
    <form action="/memberEdit" method="post">
    @csrf
    <div style="text-align:left;">名前</div>
    <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{$user->name}}">
    </div>
    <div style="text-align:left;">メールアドレス</div>
    <div class="form-group">
        <input class="form-control" type="text" name="email" value="{{$user->email}}">
    </div>
    
    <div class="form-group">
        <input class="form-control" type="hidden" name="id" value="{{$user->id}}">
    </div>

    
    <div class="form-check" style="text-align:center;">
      <label class="form-check-label">
      <input type="radio" name="role" value= "1" checked>管理者
      <input type="radio" name="role" value= "0">利用者
      </label>
    </div>

   
    <div class="form-group">
        <button type="submit" class="btn btn-secondary">編集</button>
    </div>
    
    <div class="form-group">
        <a href="/memberDelete/{{$user->id}}"><button type="button" class="btn btn-secondary">削除</button>
    </div>
    </form>
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