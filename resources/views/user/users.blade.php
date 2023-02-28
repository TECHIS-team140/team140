<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ユーザー一覧</title>
        <!-- Bootstrap CSSの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- CSSの読み込み -->
    <link rel="stylesheet" href="css/mfstyle.css">
    
 </head>
 <body class="users">
    <div style="width:700px; margin:100px auto; text-align:center;">
    <h4 class="name">ユーザー管理システム画面</h4>
    <div style="text-align:left;">
    <a href="/top" class="btn btn-outline-info" role="button">ホーム画面に戻る</a>
    </div>
    
    <div>
        <table class="table table-bordered" margin-top=10px;>
      

        <tr>
            <th style ="width:50px; ">ID</th>
            <th style ="width:150px;">名前</th>
            <th style ="width:250px;">メールアドレス</th>
            <th style ="width:150px;">ステータス</th>
            <th></th>
        
        </tr>
       
        </div>
        @foreach($users as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>@if($value->role == 1)
             管理者</td>
            @endif
            
            <td><a href="user/edit/{{$value->id}}"><button class="btn btn-info btn-block btn-sm">編集</button></a></td>
            
        </tr>
        @endforeach
        </div>
    </table>
    </div>
   
   
 </body>
 
 <a class="pagetop" href="#">
    <div class="pagetop__arrow"></div></a>
 </html>