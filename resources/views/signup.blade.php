<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkillUp - Sign Up</title>
  <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
  <header>
    <div class="header-container">
      <div class="logo">SkillUp</div>
      <div class="search-bar-container">
        <input type="text" class="search-bar" placeholder="Search For Courses">
        <button class="search-btn"><i class="fa fa-search"></i></button>
      </div>
      <nav>
        <ul class="nav-list">
          <li><a href="#">Categories</a></li>
          <li><a href="#">All Courses</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="form-container">
    <h1 class="form-title">Welcome to SkillUp</h1>
    <form class="form">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter Your E-Mail">
      </div>
      <div class="form-group">
        <label for="full-name">Full Name</label>
        <input type="text" id="full-name" placeholder="Enter Your Full Name">
      </div>
      <div class="form-group">
        <label for="phone-number">Phone Number</label>
        <input type="tel" id="phone-number" placeholder="Enter Your Phone Number">
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter Your Password">
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" placeholder="Confirm Password">
        </div>
      </div>
      <div class="form-row gender-row">
        <label class="gender-label">Gender</label>
        <div class="gender-options">
          <label><input type="radio" name="gender" value="male"> Male</label>
          <label><input type="radio" name="gender" value="female"> Female</label>
        </div>
      </div>
      <button type="submit" class="sign-up-btn">Sign Up</button>
      <p class="already-registered">Already Registered? <a href="#">Sign in</a></p>
    </form>
  </div>
</body>
</html>
