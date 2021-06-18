<?php require "../../app/core/MVC_model.php"; ?>
  <link rel="stylesheet" href="../css/diskusi.css?<?php echo time(); ?>">
  
<body>
  <?php require "$absolute_path/app/views/template/navbar.php" ?>
  <br><br><br>
  <div class="container">
  <br><br>
    <center>
      <a href="../Tambah_Diskusi/" class="btn btn-outline-primary">
        Upload Diskusi
      </a>
    </center>
    <br><br>
    
    <div class="folder_diskusi">
    <?php
      while( $row = mysqli_fetch_assoc($query)){ ?>
        <button class="btn btn-outline-primary" onclick="clicked(<?= $row['id_diskusi'] ?>)">
          <form action="" method="GET" class="diskusi">
            <img src="../images/logo-login.png" alt="">
            <p><?= $row['author'] ?></p>
            <h3 class="fs-5"><?= $row['judul'] ?></h3>
          </form>
        </button>
      <?php
      }
    ?>
    </div>
  </div>


<script>
  function clicked(id_diskusi){
        let url_header = "<?= BASE_URL ?>/Public/Topik_Diskusi/"+id_diskusi;
        window.location.assign(url_header);
      }

</script>
</body>