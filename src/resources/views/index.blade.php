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
        <div class="image__box">

            <img class="image__box__item-image" src="{{$item->image}}" alt="item-image">

            <form class="favorite-form" action="/favorite/{id}" method="post">
                @csrf
                @if (Auth::check())
                @if ($favorites->where("user_id","=",$user_id)->where("item_id","=",$item["id"])->first())
                <input type="hidden" name="item_id" value="{{$item->id}}">
                <input class="favorite__on" type="image" src="img\bookmark_on.svg"></input>
                @else
                <input type="hidden" name="item_id" value="{{$item->id}}">
                <input class="favorite__off" type="image" src="img\bookmark_off.svg"></input>
                @endif
                @else
                <input type="hidden" name="item_id" value="{{$item->id}}">
                <input class="favorite__off" type="image" src="img\bookmark_off.svg"></input>
                @endif
            </form>



        </div>

        <div class="item-name">{{$item->name}}</div>
    </div>
    @endforeach
    <div class="item__content__blank">
    </div>
</div>


@stop