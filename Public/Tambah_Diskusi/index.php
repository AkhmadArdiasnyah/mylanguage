<?php require "../../app/core/MVC_model.php"; ?>
<link rel="stylesheet" href="../css/tambah_diskusi.css?<?php echo time(); ?>">
<body>
  <?php require "$absolute_path/app/views/template/navbar.php" ?><br><br><br>
  <div class="container">
    <h1 class="text-center">
      Tambah Diskusi
    </h1>
    <form action="" method="POST">
      <div class="input_tambah">
        <input type="text" class="form-control" name="judul_diskusi" placeholder="Judul Diskusi">
        <div class="form-floating">
          <textarea class="form-control input_tambah" name="input_diskusi" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        <br>
        <center>
          <button class="btn btn-primary" type="submit" name="upload_diskusi">Posting</button>
        </center>
        <input type="hidden" name="id_akun" value="<?= $_SESSION['id_akun'] ?>">
      </div>
    </form>
      
  </div>
</body>