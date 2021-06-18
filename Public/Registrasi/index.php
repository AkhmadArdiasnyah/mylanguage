<?php require "../../app/core/MVC_model.php"; ?>


  <link rel="stylesheet" href="../css/login.css?<?php echo time(); ?>">
  <style>
    .form-control{
      width: 290px;
      margin-bottom: 20px;
    }
    .name_input{
      width: 150px;
    }
    .login-frame {
      padding-top: 100px;
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
          <span style="display: flex;justify-content:center">
            <input type="text" class="form-control name_input" name="first_name_input" placeholder="First Name">
            <input type="text" class="form-control name_input" name="last_name_input" placeholder="Last Name">
          
          </span>
          <input type="text" class="form-control" name="email_registrasi_input" placeholder="Email Address">
          <input type="password" class="form-control" name="password_registrasi_input" placeholder="Password">
          <input type="password" class="form-control" name="password_confirmasi_registrasi_input" placeholder="Confirmasi Password">
          <button type="submit" name="submit_registrasi" class="btn btn-primary">Registrasi</button>
          <a class="btn btn-primary" href="<?= BASE_URL ?>/Public/Login">Login</a>
        </form>
      </div>
    </center>
  </div>
</body>