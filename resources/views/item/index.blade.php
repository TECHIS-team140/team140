@extends('item.layout')

@section('content')
<div class="text-end m-3">
<form action="{{ url('/items/create') }}" method="GET">
                    <button type="submit" class="btn btn-primary">
                        新規登録
                    </button>   
</form>    
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>ステータス</th>
            <th>種別</th>
            <th>詳細</th>
            
            <th>更新日時</th>
            <th></th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><span class="p-1 text-white  {{ $item->status_class }}">{{$item->status_label}}</span></td>
                <td>{{$item->type_label}}</td>
                <td><a style="text-decoration:none;" href="#" class="d-inline-block" data-bs-toggle="tooltip" title="{{$item->detail}}">{{ Str::limit($item->detail, 15, '・・・') }}</a></td>
                <td>{{$item->updated_at}}</td>
                
                <td><a href="{{ url('items/edit/'.$item->id) }}" >＞＞編集</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

