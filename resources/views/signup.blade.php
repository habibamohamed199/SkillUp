<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkillUp SignUp</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <header>
    <div class="navbar">
        <h1 class="logo">SkillUp</h1>
        <div class="search-container">
            <img src="images/glass.png" alt="search-icon" class="search-icon">
            <input type="search" placeholder="Search For Courses">
        </div>
        <nav>
            <a href="#">Categories</a>
            <a href="#">All Courses</a>
        </nav>
    </div>
  </header>
  <div class="welcome">
    <h2>Welcome to SkillUp</h2>
    </div>
  <main>
    <div class="signup-container">
      <form>
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
            <p>Already Registered? <a href="#" class="signin-link">Sign in</a></p>
          </div>
        </div>
        <button type="submit" class="signup-btn">Sign Up</button>
      </form>
    </div>
  </main>
</body>
</html>
