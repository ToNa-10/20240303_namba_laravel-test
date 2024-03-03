<!-- ログイン画面 -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <form action="/contacts/register" method="post">
                @csrf
                <div class="header__logo" href="/">
                    FashionablyLate
                    <button class="form__button-submit header__button" type="submit">register</button>
                </div>
            </form>
        </div>
    </header>
    <main>
        <div class="login__content">
            <div class="login__heading">
                <h2>Login</h2>
            </div>
            <div class="login__box">
                <form class="form" action="/contacts/admin" method="post">
                    @csrf
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="email" name="email" placeholder="例: test@example.com">
                            </div>
                            <div class="form__error">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">パスワード</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="password" name="password" placeholder="例: coachtech1106">
                                </div>
                                <div class="form__error">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form__button">
                        <button class="form__button-submit form__button" type="submit">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>