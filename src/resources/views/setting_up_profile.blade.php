@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/setting_up_profile.css') }}">
@stop

@section('content')
<div class="profile__content">
    <div class="section-title">
        <h2>プロフィール設定</h2>
    </div>

    @if($no_profile)
    <form class="auth-form__form" action="/mypage/profile" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{$no_profile['id']}}">

        <div class="auth-form__group">
            <div class="auth-form__group-title">
                <div class="auth-form__group-title--text">ユーザー名</div>
            </div>

            <div class="auth-form__group-content">
                <div class="auth-form__input--text">
                    <input type="text" name="name" value="{{$no_profile['name']}}">
                </div>

                <div class="error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class=" auth-form__group">
            <div class="auth-form__group-title">
                <div class="auth-form__group-title--text">郵便番号</div>
            </div>

            <div class="auth-form__group-content">
                <div class="auth-form__input--text">
                    <input type="text" name="postal_code" minlength="7" maxlength="8" pattern="\d*" value="{{ old('postal_code') }}">
                </div>

                <div class="error-message">
                    @error('postal_code')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="auth-form__group">
            <div class="auth-form__group-title">
                <div class="auth-form__group-title--text">住所</div>
            </div>

            <div class="auth-form__group-content">
                <div class="auth-form__input--text">
                    <input type="text" name="address" value="{{ old('address') }}">
                </div>

                <div class="error-message">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="auth-form__group">
            <div class="auth-form__group-title">
                <div class="auth-form__group-title--text">建物名</div>
            </div>

            <div class="auth-form__group-content">
                <div class="auth-form__input--text">
                    <input type="text" name="building">
                </div>
            </div>
        </div>

        <div>
            <input class="auth-form__btn" type="submit" value="更新する">
        </div>
    </form>
    @else



    
    @endif
</div>


@stop