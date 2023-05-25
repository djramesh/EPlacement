<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="notification.css">
  <link rel="stylesheet" href="utility.css">
  <link rel="stylesheet" href="form.css">
  <link rel="shortcut icon" href="./assets/images/bvec.jpg" type="image/x-icon">
  <title>BVEC Training and Placement</title>
</head>

<body>
  <!-- All href will open in new tab -->
  <!-- <base href="" target="_blank"> -->
  <div id="show"><i class="fas fa-solid fa-bars basic_mrgn" id="s" onclick="show()"></i></div>
  <div class="container">

    <header>
      <nav id="navbar">
        <ul id="ul">
          <li><a href="index.html">Home</a></li>
          <li><a href="notification.html">Notification</a></li>
          <li><a href="internship.html">Internship</a></li>
          <li><a href="JavaScript:void(0)">For Students <i class="fas fa-caret-down"></i></a>
            <div class="dropdown_menu">
              <ul><a href="slogin.html"><i class="fa-solid fa-right-to-bracket"></i>&nbsp Student Login</a></ul>
              <ul><a href="#"><i class="fa-regular fa-message"></i>&nbsp Forum</a></ul>
              <ul><a href="#">Resume Generator</a></ul>
              <ul><a href="NOC-form.php">NOC Apply</a></ul>


              <ul><a href="https://drive.google.com/file/d/15CY83lWnHaGVrk8RpDufH_iYzoJfI-ME/view?usp=share_link "
                  target="_blank">Placement Policies</a></ul>
            </div>
          </li>
          <li><a href="JavaScript:void(0)">For Recruiters <i class="fas fa-caret-down"></i></a>
            <div class="dropdown_menu">
              <ul><a href="record.html">Placement Record</a></ul>
              <ul><a href="#reach_us">Reaching BVEC</a></ul>
              <ul><a href="#">Facilities</a></ul>
              <ul><a href="https://drive.google.com/file/d/15CY83lWnHaGVrk8RpDufH_iYzoJfI-ME/view?usp=share_link "
                  target="_blank">Placement Policies</a></ul>
            </div>
          </li>
          <li><a href="JavaScript:void(0)">Co-ordinator <i class="fas fa-caret-down"></i></a>
            <div class="dropdown_menu">
              <ul><a href="slogin.html">Co-ordinator Login</a></ul>
            </div>
          </li>
          <li><a href="JavaScript:void(0)">Alumni <i class="fas fa-caret-down"></i></a>
            <div class="dropdown_menu">
              <ul><a href="slogin.php"><i class="fa-solid fa-right-to-bracket"></i>&nbsp Alumni Login</a></ul>
              <ul><a href="#"><i class="fa-solid fa-magnifying-glass"></i>&nbsp Alumni Search</a></ul>
            </div>
          </li>
          <li><a href="JavaScript:void(0)">Contact Us</i></a>

          </li>
          <li><a
              href="https://www.linkedin.com/company/training-and-placement-cell-barak-valley-engineering-college/about/"
              target="_blank">
              <i class="fa fa-linkedin" aria-hidden="true"
                style="background-color: blue;padding: 5px;border-radius: 30%;"></i>
            </a>
          </li>
        </ul>

      </nav>
    </header>

    <br><br><br><br>
    <!-- Everything must be done under section class, add class or id  -->
    <section id="sign-in-body">
      <div class="container-form">
        <div class="login-left">
          <div class="login-header">
            <h1>Welcome to T&P Cell BVEC</h1><br>
            <p class="error-msg">Invalid email or password. Please try again.</p>
          </div>

          <form class="login-form" action="student-validation.php" method="post">
            <div class="login-form-content">
              <?php
              if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errorMessage)) {
                echo '<p style="color: red;">' . $errorMessage . '</p>';
              }
              ?>
              
              <div class="input-control">
                <label>Email</label>
                <input type="text" id="email" name="email">
              </div>
              <div class="input-control" id="pass">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
              </div>
              <div class="input-control">
                <div class="checkbox">
                  <input type="checkbox" id="rememberMeCheckbox"> Remember Me
                  <!-- <label for="rememberMeCheckbox" id="checkboxLabel">Remember me</label> -->
                </div>
                <br>
                <button class="btn-sign-in" type="submit">Sign In</button>
          </form>
        </div>

      </div>
      <br>
      <br>
      <div class="forgot-pass">
        <a href="forgot.html">
          <p>Forgot Password?</p>
        </a>
      </div>
      <br>
      <br>
      <h4>Do not have an account?</h4><br>
      <a href="create-account.php"> <button class="btn-sign-up">Create Account</button></a>
  </div>
  <!-- <div class="login-right">
                <img src="./books.png" alt="">
            </div> -->
  </section>
  <br>


  <!-- Footer section -->
  <hr>
  <footer class="">
    <div class="left">
      <h4>&copy;2023, Centre for Career Development</h4>
      <h5>Barak Valley Engineering College</h5>
    </div>
    <div class="right">
      <h4>Developed & maintained By <a href="https://github.com/MiniProjectTeam12/EPlacement">Team-12</a>
      </h4>
    </div>
  </footer>



  <!-- Javascript section -->
  <script src="https://kit.fontawesome.com/c5009e06c9.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script>
    const marquee = document.getElementById('myMarquee');
    const h3Elements = marquee.getElementsByTagName('h3');
    for (let i = 0; i < h3Elements.length; i++) {
      h3Elements[i].addEventListener('mouseover', function () {
        marquee.stop();
      });
      h3Elements[i].addEventListener('mouseout', function () {
        marquee.start();
      });
    }
  </script>
</body>

</html>