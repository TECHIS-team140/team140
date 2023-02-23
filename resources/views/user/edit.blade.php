<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>アカウント情報編集</title>
        <!-- Bootstrap CSSの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
 </head>
 <body>   

<div style="width:300px; margin:100px auto; text-align:center;">
   <h4>ユーザー管理システム</h4>
   <form action="/memberRegister" method="post">
   @csrf
   <div class="form-group">
       <input class="form-control" type="text" name="name" placeholder="名前">
   </div>

   <div class="form-group">
       <input class="form-control" type="text" name="email" placeholder="メールアドレス">
   </div>

   <div class="form-group">
       <input class="form-control" type="text" name="password" placeholder="アクセス権限">
   </div>

   <div class="form-group">
       <button type="submit" class="btn btn-secondary">削除</button>
   </div>
   </form>    
</div>

 </body>
 
 </html>