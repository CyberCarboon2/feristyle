<?php
$Nama = $_POST["nama"];
$email = $_POST["email"];
$kelamin = $_POST["jenis_kelamin"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hasil</title>
  <style>
    body {
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body>
  <h5>NAMA : <?php echo "$Nama"; ?></h5>
  <br>
  <h5 style="color: white;">Alamat Email : <?php echo "$email"; ?></h5>
  <br>
  <h5>Jenis Kelamin : <?php echo "$kelamin" ?></h5>
</body>
</html>