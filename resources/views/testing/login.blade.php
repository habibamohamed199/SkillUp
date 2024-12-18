<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @foreach($errors as $error)
            {{$error}} <br>
        @endforeach
        <form action={{route("login-user")}} method="POST" style="margin: 10px;">
            @csrf
            <label for="email">Email</label>
            <input type="text" name="email" value="{{old('email')}}">
            <label for="password">Password</label>
            <input type="password" name="password">
            <input type="submit">
        </form>

            @if ($errors->any())
                <div class="alert alert-danger" style="width:30%;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    </body>
</html>
