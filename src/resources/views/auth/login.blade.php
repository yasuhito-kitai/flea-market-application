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
                <h2>ログイン</h2>
            </div>

            <form class="auth-form__form" action="/login" method="post">
                @csrf
                <div class="auth-form__group">
                    <div class="auth-form__group-title">
                        <div class="auth-form__group-title--text">ユーザー名/メールアドレス</div>
                    </div>

                    <div class="auth-form__group-content">
                        <div class="auth-form__input--text">
                            <input type="text" name="account_id" value="{{ old('account_id') }}">
                        </div>

                        <div class="error-message">
                            @error('account_id')
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

                <div>
                    <input class="auth-form__btn" type="submit" value="ログインする">
                </div>
            </form>

            <div class="guidance">
                <a class="guidance-link" href="/register">会員登録はこちら</a>
            </div>

        </div>
    </main>
</body>

</html>