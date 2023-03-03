@extends('home.layout')
@section('contents')
<div class ="companyinfo">ペット用品登録が簡単に行える！登録商品はすぐに検索可能！</div>
<div>新着商品</div>

@foreach ($items as $item)
<div>{{ $item->name }}</div>
@if ($loop->iteration === 3)
    @break
@endif
@endforeach
<div class ="animalimg">
<img src="/images/img1.jpg.avif" alt="">
<img src="/images/img1.jpg.avif" alt="">
</div>
</div>
@endsection
