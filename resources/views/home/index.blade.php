@extends('home.layout')
@section('contents')
<div class ="companyinfo">
    様々なペット用品の取り揃えあり！新着商品多数紹介してます
  <div class = "item">
  
       新着商品⇒
       @foreach ($items as $item)
       {{ $item->name }}&nbsp / &nbsp
          @if ($loop->iteration === 5)
          @break
          @endif
          @endforeach
          <a href="/search">商品一覧はこちらから</a>
    </div>
</div>
         
   <img src="/images/20220227-A7401691_TP_V.jpg" alt="" class="top-image">
   
@endsection
