<?php
  include_once('../handler/index.php');
  $id = 0;
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
  $details = getDetail($id);
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

  <title>Tokomu | Detail</title>
</head>

<body>
  <div class="container my-5">
    <h1 class="text-center mb-3">Detail Data</h1>
    <div class="card">
      <div class="card-header p-3">
        <a href="./index.php" class="btn-danger btn">Kembali</a>
        <a href="./update.php?updated_id=<?= $id ?>" class="btn-warning btn float-end">Edit Data</a>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <div class="row">
            <div class="col-6">
              <label class="form-label">Nama</label>
              <input type="text" name="name" class="form-control" readonly value="<?= $details['name']?>">
            </div>
            <div class="col-3">
              <label class="form-label">Harga</label>
              <div class="input-group">
              <span class="input-group-text">Rp.</span>
              <input type="number" name="price" readonly class="form-control" value="<?= $details['price']?>">
              </div>
            </div>
            <div class="col-3">
              <label class="form-label">Stok</label>
              <input type="number" name="stock" readonly class="form-control" value="<?= $details['stock']?>">
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" readonly name="description" rows="3"><?= $details['description']?></textarea>
        </div>
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