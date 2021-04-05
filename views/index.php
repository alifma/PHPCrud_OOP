<?php
  include_once('../handler/index.php');
  getAll();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Tokomu | Home</title>
</head>

<body>
  <div class="container my-5">
    <h1 class="text-center mb-3">List Barang Toko</h1>
    <div class="card">
      <div class="card-header p-3">
        <a href="./add.php" class="btn-primary btn">Tambah Data Baru</a>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th class="text-start">Name</th>
              <th class="text-start">Description</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $i = 1;
              foreach(getAll() as $data){
            ?>
            <tr class="text-center">
              <td><?= $i++?></td>
              <td class="text-start"><?= $data['name']?></td>
              <td class="text-start"><?= $data['description']?></td>
              <td><?= $data['price']?></td>
              <td><?= $data['stock']?></td>
              <td>
                <a href="./update.php?updated_id=<?= $data['id']?>" class="btn btn-sm btn-warning">Update</a>
                <a href="./details.php?id=<?= $data['id']?>" class="btn btn-sm btn-success">Detail</a>
                <a href="../handler/index.php?deleted_id=<?= $data['id']?>"class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>