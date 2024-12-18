<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action={{route('register-user')}} method="POST" style="margin: 10px;">
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </body>
</html>
