<?php require "../../app/core/MVC_model.php"; ?>

<style>
  .isi{
    width: 80%;
    border: 1px solid black;
    background-color: white;
  }
  .input_komentar{
    margin-top: 30px;
    width: 60%;
  }
    .folder_komentar {
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      width: 800px;
      margin-left: auto;
      margin-right: auto;
      background-color: white;
    }
    .komentar {
      width: 800px;
      height: 20px;
      display: flex;
      justify-content: space-around;
      margin-bottom: 30px;
      margin-top: 30px;
      padding-right: 10px;
    }

</style>
<body>
  <?php require "$absolute_path/app/views/template/navbar.php" ?><br><br><br>
  <center>
    <h1><?= $judul ?></h1>
    <h1 class="fs-5 text-primary">oleh <?= $author ?></h1>
    <br><br>
    <div class="isi">
      <p><?= $isi ?></p>
    </div>
    
    <form action="" method="POST">
      <div class="input_komentar">
        <div class="form-floating">
          <textarea class="form-control input_komentar" name="input_komentar" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        <br>
        <center>
          <button class="btn btn-primary" type="submit" name="tambah_komentar">tambahkan komentar</button>
        </center>
        <input type="hidden" name="id_akun" value="<?= $_SESSION['id_akun'] ?>">
      </div>
    </form>
    <br>

    <div class="folder_komentar">
    <?php
      while( $row = mysqli_fetch_assoc($komentar)){ ?>
        <button class="btn btn-outline-dark">
          <form action="" method="GET" class="komentar">
            <p><?= $row['username'] ?></p>
            <h3 class="fs-5"><?= $row['isi'] ?></h3>
          </form>
        </button>
      <?php
      }
    ?>
    </div>
    <br><br><br>
    
  </center>
</body>