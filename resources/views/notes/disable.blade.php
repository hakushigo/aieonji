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
        <form action="{{ route('disablenote') }}" method="post">
            @csrf
            <input type="hidden" value="NO" name="protectnote">
            <div class="form-group">
                <label for="text">Letter's ID</label><br>
                <input type="text" name="id" class="input-control">
            </div>
            <div class="form-group">
                <label for="text">The Author's key</label><br>
                <input type="text" name="authorkey" class="input-control">
            </div>
            <div class="form-group">
                <button type="submit">Disable this note</button>
            </div>
        </form>
        <div class="end">
            <a href="{{route('homepage')}}">feel not ready? you can back to the homepage</a>
        </div>
    </div>
</div>
</body>
</html>
