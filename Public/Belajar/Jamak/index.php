<?php require "../../../app/core/MVC_model.php"; ?>
  <style>
    body{
      background-image: url("../../images/bg-universal.png");
    }
    .value{
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .header{
      display: flex;
      width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
    .header img{
      width: 200px;
    }
    .header h2{
      margin: auto;
    }
    .point{
      font-size: 30px;
    }

  </style>
</head>
<body>
  <?php require "$absolute_path/app/views/template/navbar.php" ?>
  <br><br><br>
  <div class="container">
    <div class="header">
      <img src="../../images/logo/Jamak.png" alt="">
      <h2>Jamak</h2>
    </div>

    <div class="value">
      <p>
      Kata benda tunggal hanya menyebutkan satu orang/hewan/tempat/benda/ide. Kata benda jamak adalah kata yang menunjukkan bahwa ada lebih dari satu orang/hewan/tempat/benda/ide. Saat kamu berbicara tentang lebih dari satu hal, maka kamu harus menggunakan kata benda jamak. Untuk bentuk jamak dari mayoritas kata benda, cukup tambahkan s. Untuk kata benda yang berakhiran ch, x, s, tambahkan es. Untuk kata benda yang berakhiran f atau fe, maka ubahlah f menjadi v dan tambahkan es, dll.
      </p>
      <img src="../../images/tabel.jpg" alt="">

    </div>

  </div>
</body>

<script src="../../js/bootstrap/bootstrap.min.js"></script>
</html>