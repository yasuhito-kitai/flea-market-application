<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>

<body>
    <header class="header">
        <div class="logo">ロゴ画像</div>
    </header>

    <main>
        <div class="register__content">
            <div class="section-title">
                <h2>会員登録</h2>
            </div>

            <form class="auth-form__form" action="/register" method="post">
                @csrf
                <div class="auth-form__group">
                    <div class="auth-form__group-title">
                        <div class="auth-form__group-title--text">ユーザー名</div>
                    </div>

                    <div class="auth-form__group-content">
                        <div class="auth-form__input--text">
                            <input type="text" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="error-message">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="auth-form__group">
                    <div class="auth-form__group-title">
                        <div class="auth-form__group-title--text">メールアドレス</div>
                    </div>

                    <div class="auth-form__group-content">
                        <div class="auth-form__input--text">
                            <input type="text" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="error-message">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="auth-form__group">
                    <div class="auth-form__group-title">
                        <div class="auth-form__group-title--text">パスワード</div>
                    </div>

                    <div class="auth-form__group-content">
                        <div class="auth-form__input--text">
                            <input type="password" name="password">
                        </div>

                        <div class="error-message">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="auth-form__group">
                    <div class="auth-form__group-title">
                        <div class="auth-form__group-title--text">確認用パスワード</div>
                    </div>

                    <div class="auth-form__group-content">
                        <div class="auth-form__input--text">
                            <input type="password" name="password_confirmation">
                        </div>

                        <div class="error-message">
                            @error('password_confirmation')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <input class="auth-form__btn" type="submit" value="登録する">
                </div>
            </form>

            <div class="guidance">
                <a class="guidance-link" href="/login">ログインはこちら</a>
            </div>

        </div>
    </main>
</body>

</html>