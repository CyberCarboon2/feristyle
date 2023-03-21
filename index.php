<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar PHP</title>
  <style>
    .container h1 {
      text-align: center;
      margin: auto;
      font-family: 'Verdana', Serif;
      margin-top: 20px;
    }
    .container .form {
      margin-top: 20px;
    }
  </style>
</head>
<body>
   <form action="proses.php" method="POST">
    <h5>Nama</h5>
    <input type="text" name="nama">
    <br>
    <h5>Masukkan Alamat Email</h5>
    <input type="email" name="email">
    <br>
    <h5>Pilih Jenis Kelamin</h5>
    <select name="jenis_kelamin" id="">
      <option value="Laki_laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Kirim">
  </form>
</body>
</html>