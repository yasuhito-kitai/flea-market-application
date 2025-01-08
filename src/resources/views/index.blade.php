@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@stop

@section('content')
<div class="tab__group">
    <div class="recommend--tab">
        <a class="recommend-link" href="/index">おすすめ</a>
    </div>

    <div class="mylist--tab">
        <a class="mypage-link" href="/index/mylist">マイリスト</a>
    </div>
</div>

<div class="item__content__group">
    @foreach($items_all as $item)
    <div class="item__content">
        <div class="item-image">
            <img src="{{$item->image}}" alt="item-image">
        </div>

        <div class="item-name">{{$item->name}}</div>
    </div>
    @endforeach
    <div class="item__content__blank">
    </div>
</div>


@stop