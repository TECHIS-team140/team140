<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ユーザー一覧</title>
        <!-- Bootstrap CSSの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
 </head>
 <body>
    <div style="width:700px; margin:100px auto;">
    <div style="text-align:left;">
     <a href="/top"> >>TOPに戻る </a>
    </div>
    
    <div>
        <table border="1" style="margin:10px" >
       
        <tr>
            <th style ="width:150px; text-align:center;">ID</th>
            <th style ="width:150px; text-align:center;">名前</th>
            <th style ="width:250px; text-align:center;">メールアドレス</th>
            <th style ="width:150px; text-align:center;">ステータス</th>
            <th></th>
        
        </tr>
       
        </div>
        @foreach($users as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->role}}</td>
            <td><a href="user/edit/{{$value->id}}"><button type="button">編集</button></a></td>

        </tr>
        @endforeach
    </table>
    </div>
    
 </body>

 </html>