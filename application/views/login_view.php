<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login/Logout animation concept</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
</head>
<body>
  <div class="cont">
    <div class="demo">
      <div class="login">
        <div class="login__check"></div>
        <div class="login__form">
          <form action="<?= base_url('login/auth'); ?>" method="POST">
            <div class="login__row">

              <input type="text" id="user" name="user" class="login__input name" placeholder="Username" />
          </div>
          <div class="login__row">
            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
              <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
            </svg>
            <input type="password" id="pass" name="pass" class="login__input pass" placeholder="Password" />
        </div>
        <button type="submit" class="login__submit">Sign in</button>
      </form>
      <p class="login__signup">
        Don't have an account? &nbsp;<a>Sign up</a>
      </p>
    </div>
  </div>
  <!-- ... rest of the content ... -->
</div>
</div>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<script src="<?php echo base_url('assets/script.js'); ?>"></script>
</body>
</html>