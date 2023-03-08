@extends('item.layout')

@section('content')

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
                    <input type="text" id="name" maxlength="100"  value="{{old('name')}}" name="name" class="form-control" />
                </div>
                <div class="form-group mb-3">
                    <label for="type">種別</label>
                    <select id="type" name="type" class="form-control">
                        <option value="" selected disabled></option>
                        @foreach(\App\Models\Item::TYPE as $key => $val)
                            <option value="{{ $key }}">
                            {{ $val['label'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="detail">詳細</label>
                    <textarea id="detail" maxlength="500" name="detail" class="form-control" rows="5">{{old('detail','')}}</textarea>
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
@endsection
