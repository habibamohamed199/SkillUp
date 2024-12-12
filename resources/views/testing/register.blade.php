<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        @foreach($errors as $error)
            {{$error}} <br>
        @endforeach
        <form action={{route('register-user')}} method="POST">
            @csrf
            <label for="email">Email</label>
            <input type="text" name="email">
            <label for="password">Password</label>
            <input type="password" name="password">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" name="confirm-password">
            <label for="name">Full Name</label>
            <input type="text" name="name">
            <label for="gender">Gender</label>
            <input type="text" name="gender">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone">
            <input type="submit">
        </form>

    </body>
</html>
