<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="body">
    <div class="content">
        <a href="{{ route('homepage') }}">
            <img class="logoimage" src="/img/logo.png">
            <h1>Aieonji</h1>
        </a>
        <p>愛 (jp:love) + 편지 (kr:letter)</p>
        <div class="row">
            <div class="rowsec">
                <img class="rowimg" src="/img/password.png">
                <p>first, create a letter <br> (<b>and password if you want to</b>)</p>
            </div>
            <div class="rowsec">
                <img class="rowimg" src="/img/tellem.png">
                <p>tell your crush the letter address <br> (<b>don't forget with the password</b>)</p>
            </div>
            <div class="rowsec">
                <img class="rowimg" src="/img/read.png">
                <p>let them read it! (<i>and wait their reaction</i>)</p>
            </div>
        </div>

        <div class="end">
            <p>
                <a href="{{route('write')}}">create!</a>

                <i>or</i>

                <a href="{{ route('delete') }}">delete!</a>

                <i>or</i>

                <a href="#">disable!</a>

                <i>or</i>

                <a href="#">edit!</a>

                <span>a letter</span>
            </p>
            <p>
                <b>
                    <i>
                        Still in development! Data in this project may gone!
                    </i>
                </b>
            </p>
        </div>
    </div>
</div>
</body>
</html>
