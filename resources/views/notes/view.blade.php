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
        @if($protected == true)

            <form action="/notes/protected/read/{{ $id }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="text">Enter the password to see their letter!</label><br>
                    <input type="text" name="notepassword" placeholder="type here the password they give to you?" class="input-control">
                </div>
                <div class="form-group">
                    <button type="submit">click me to open!</button>
                </div>
            </form>

        @else

            <form>
                <div class="form-group">
                    <label for="text">Subject of this letter</label><br>
                    <input disabled type="text" value="{{ $subject }}" class="input-control">
                </div>
                <div class="form-group">
                    <label for="text">Content of this letter</label><br>
                    <textarea disabled class="input-control">{{ $content }}</textarea>
                </div>
            </form>

        @endif
        <div class="end">
            <a href="{{route('homepage')}}">Back to the homepage</a>
        </div>
    </div>
</div>
</body>
</html>
