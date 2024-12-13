<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillUp SignUp</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>SkillUp</h1>
        <input type="text" placeholder="Search For Courses">
        <nav>
            <a href="#">Categories</a>
            <a href="#">All Courses</a>
        </nav>
    </header>

    <div class="container">
        <div class="form-box">
            <h2>Welcome to SkillUp</h2>
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter Your E-Mail">
                </div>

                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" placeholder="Enter Your Full Name">
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" placeholder="Enter Your Phone Number">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter Your Password">
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" placeholder="Confirm Password">
                </div>

                <div class="form-group gender">
                    <label>Gender</label>
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                </div>

                <div class="form-group">
                    <span>Already Registered? <a href="#">Sign in</a></span>
                </div>

                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
