@extends('home.layout')
@section('contents')
<div class ="companyinfo">
    ペット用品登録が簡単に行える！登録商品はすぐに検索可能！
  <div class = "container">
     <div class = "text">新着商品⇒</div>
        <div class = "textitem">
        @foreach ($items as $item)
          <div>{{ $item->name }}&nbsp / &nbsp</div>
          @if ($loop->iteration === 5)
          @break
          @endif
          @endforeach
        </div>
    </div>
</div>
          <div class ="animalimg">
             <img src="/images/20220227-A7401691_TP_V.jpg" alt="">
          </div>
@endsection
