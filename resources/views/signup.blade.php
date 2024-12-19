<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SkillUp SignUp</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
              integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset("css/signup.css")}}">
        <link rel="stylesheet" href="{{asset("css/navbar.css")}}">
    </head>
    <body>
        @include("layouts.components._navbar_logged_out")
        <div class="welcome">
            <h2>Welcome to SkillUp</h2>
        </div>
        <main>
            <div class="signup-container">
                <form class="signup-form">
                    <div class="form-group">
                        <div class="form-column">
                            <label>Email</label>
                            <input type="email" placeholder="Enter Your E-Mail">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter Your Full Name">
                            <label>Phone Number</label>
                            <input type="tel" placeholder="Enter Your Phone Number">
                        </div>
                        <div class="form-column">
                            <label>Password</label>
                            <input type="password" placeholder="Enter Your Password">
                            <label>Confirm Password</label>
                            <input type="password" placeholder="Confirm Password">
                            <div class="gender">
                                <label>Gender</label>
                                <div class="gender-options">
                                    <label><input type="radio" name="gender"> Male</label>
                                    <label><input type="radio" name="gender"> Female</label>
                                </div>
                            </div>
                            <p class="already-registered">Already Registered? <a href="#" class="signin-link">Sign
                                    in</a></p>
                        </div>
                    </div>
                    <button type="submit" class="signup-btn">Sign Up</button>
                </form>
            </div>
        </main>
    </body>
</html>
