<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Добро пожаловать</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/select2.css" rel="stylesheet" />
        <!-- Javascript -->
        <script src="/js/jquery-1.12.4.min.js"></script>
        <script src="/js/scripts.js"></script>
        <script src="/js/select2.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="/" class="logo">Laravel</a>
                <div class="right">
                    <select class="js-example-basic-single">
                        <option></option>
                        @foreach($news as $article)
                            <option value="{{ $article->id }}">{{ $article->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </header>

        @yield('content')

        <footer>
            <div class="container">
                <p class="left">&copy; Andrew <?= date('Y') ?></p>

                <p class="right">Сегодня {{ date("j m Y") }} </p>
            </div>
        </footer>
    </body>
</html>