<?php
    
  // Page vars    
  $__title      = "Sign in - Hostx.com";
  $__meta_title = "HostX | HTML5 Hosting Template";    
  $__meta_description = "Login in now";
  $__meta_keywords    = "Buy VPS, Buy VPS Hosting,Buy Cheap VPS, Free VPS, Trial VPS";

  // Page class & id
  $__class  = "login-page";
  $__id     = "login-page";

  // Change between (true) and (false) to show or hide (Header, Footer, Live Chat Bubble).
  $__hide_header      = 'true';
  $__hide_footer      = 'true';
  $__hide_chat_bubble = 'true';

  // Include (init.php) file.
  include 'core/init.php';
      
?>

  <!-- Section I -->
  <div class="se-i">
    <!-- user-form -->
    <form class="user-form" action="#" method="POST" id="loginForm">
      <!-- logo -->
      <a href="index.php" class="logo">
        <img data-src="assets/images/theme/logo-l.png" class="lazy lt-img img-fluid" alt="HostX">
        <img data-src="assets/images/theme/logo-d.png" class="lazy dt-img img-fluid" alt="HostX">
      </a>
      <!-- title-1 -->
      <h1 class="title-1"><img data-src="assets/images/pages/user/waving-hand.png" class="lazy img-fluid" alt="Icon">We're waiting<br>for you back</h1>
      <!-- form-label -->
      <label class="form-label" for="email">
        <!-- form-input -->
        <input class="form-input" type="email" name="email" id="email" placeholder="Email Address" required>
        <!-- state -->
        <span class="state"></span>
      </label>
      <!-- form-label -->
      <label class="form-label" for="password">
        <!-- form-input -->
        <input class="form-input" type="password" name="password" id="password" placeholder="Password" required>
        <!-- state -->
        <span class="state"></span>
      </label>
      <!-- div -->
      <div class="text-right">
        <!-- pass-link -->
        <a href="reset-pass.php" class="pass-link">Forget Password?</a>
      </div>
      <!-- buttons -->
      <div class="buttons mt-2">
        <button type="submit" class="btn btn-sm btn-fill-success shadow-off text-uppercase w-100">Sign In</button>
      </div>
      <!-- or -->
      <div class="or mt-3 mb-3 text-center"><span>or</span></div>
      <!-- social-links -->
      <div class="social-links d-flex align-items-center justify-content-center">
        <!-- social-link -->
        <a href="#" class="social-link">
          <img data-src="assets/images/pages/user/facebook.svg" class="lazy img-fluid" alt="HostX">
        </a>
        <!-- social-link -->
        <a href="#" class="social-link">
          <img data-src="assets/images/pages/user/google.svg" class="lazy img-fluid" alt="HostX">
        </a>
        <!-- social-link -->
        <a href="#" class="social-link">
          <img data-src="assets/images/pages/user/twitter.svg" class="lazy img-fluid" alt="HostX">
        </a>
      </div>
      <!-- comment -->
      <p class="comment text-center">New to Hostx? <a href="register.php">Sign up</a></p>
    </form>
    <!-- text -->
    <div class="text">
      <!-- links -->
      <div class="links d-flex align-items-center justify-content-lg-start justify-content-center">
        <a href="index.php" class="d-inline-flex">Home</a>
        <a href="kb-2.php" class="d-inline-flex">Help Center</a>
        <a href="terms.php" class="d-inline-flex">Privacy Policy</a>
      </div>
      <!-- para-3 -->
      <p class="para-3">Use of this Site is subject to express terms of use.<br>By using this site, you signify that you agree to be bound by these <a href="terms.php">Universal Terms of Service</a>.</p>
    </div>
  </div>

<?php
  // Footer
  include 'templates/footer.inc.php';
?>
