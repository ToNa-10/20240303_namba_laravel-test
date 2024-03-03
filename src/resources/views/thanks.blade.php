<!-- ありがとうページ thanks.blade.php -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo" href="/">
                FashionablyLate
                <p class="line"></p>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>

    <main>
        <div class="thanks__content">
            <div class="thanks__box">
                <div class="thanks__heading">
                    <h2>
                        お問い合わせありがとうございました
                    </h2>
                </div>
                <div class="thanks__button">
                    <button class="thanks__button-submit" type="submit">HOME</button>
                </div>
            </div>
            <div class="thanks__back">
                Thank you
            </div>
        </div>
    </main>

</html>