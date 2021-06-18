<?php require "../../app/core/MVC_model.php"; ?>


  <link rel="stylesheet" href="../css/login.css?<?php echo time(); ?>">
  <style>
    .form-control{
      width: 290px;
      margin-bottom: 20px;
    }
  </style>
<body>
  <div class="label">
    <center>
      <img src="../images/logo.png" alt="">
      </center>
  </div>
  <div class="container">
    <center>
      <div class="login-frame">
        
        <form action="" method="POST">
          <img src="../images/logo-login.png" alt="">
          <input type="text" class="form-control" name="email_login_input" placeholder="Email Address">
          <input type="password" class="form-control" name="password_login_input" placeholder="Password">
          <button type="submit" name="submit_login" class="btn btn-primary">Login</button>
          <a class="btn btn-primary" href="<?= BASE_URL ?>/Public/Registrasi">Registrasi</a>
        </form>
      </div>
    </center>
  </div>
</body>