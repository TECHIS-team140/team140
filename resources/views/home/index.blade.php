@extends('home.layout')
@section('contents')
<div class ="companyinfo">
    ペット用品登録が簡単に行える！登録商品はすぐに検索可能！
  <div class = "item">
       新着商品⇒

        @foreach ($items as $item)
       {{ $item->name }}&nbsp / &nbsp
          @if ($loop->iteration === 5)
          @break
          @endif
          @endforeach
    </div>
</div>
         
   <img src="/images/20220227-A7401691_TP_V.jpg" alt="" class="top-image">
   
@endsection
