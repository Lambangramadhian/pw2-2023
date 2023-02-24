<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
  <style>
    body {
      background-color: beige;
    }
    .font-courier {
      font-family:'Courier New', Courier, monospace;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4 font-courier">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
        ?>
        <tr>
          <td>B</td>
          <td>Berry</td>
          <td>Merah</td>
          <td>8</td>
          <td>12000</td>
          <td>Buah kecil dengan biji yang bisa dimakan</td>
        </tr>
        <tr>
          <td>M</td>
          <td>Melon</td>
          <td>Hijau</td>
          <td>15</td>
          <td>28000</td>
          <td>Buah berwarna hijau yang segar</td>
        </tr>
        <tr>
          <td>P</td>
          <td>Pisang</td>
          <td>Kuning</td>
          <td>20</td>
          <td>15000</td>
          <td>Pisang dengan rasa manis</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>