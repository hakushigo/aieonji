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
        <form>
            <div class="form-group">
                <label for="text">Your romantic notes address</label><br>
                <input disabled type="text" value="{{ $host }}/notes/read/{{ $id }}" class="input-control">
            </div>
            <div class="form-group">
                <label for="text">Subject of this letter</label><br>
                <input disabled type="text" value="{{ $subject }}" class="input-control">
            </div>
            <div class="form-group">
                <label for="text">Content of this letter</label><br>
                <textarea disabled class="input-control">{{ $content }}</textarea>
            </div>
            <div class="form-group">
                <label for="text">Author's Key (to edit/delete the note)</label><br>
                <input disabled type="text" value="{{ $authorkey }}" class="input-control">
            </div>
            <div class="form-group">
                <label for="text">Password of this letter</label><br>
                <input disabled type="text" value="{{ ($password == null) ? "There's no password for this note" : $password }}" class="input-control">
            </div>
        </form>
        <div class="end">
            <a href="{{route('homepage')}}">Back to the homepage</a>
        </div>
    </div>
</div>
</body>
</html>
