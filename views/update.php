<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Tokomu | Update Data</title>
</head>
<?php
  include_once('../handler/index.php');
  $process = new DataCollection();

  $id = 0;
  if(isset($_GET['updated_id'])){
    $id = $_GET['updated_id'];
  }
  $details = $process->getDetail($id);

  if (isset($_POST['update_record'])) {
    $data = [
      'name' => $_POST['name'],
      'description' => $_POST['description'],
      'price' => $_POST['price'],
      'stock' => $_POST['stock']
    ];
    $process->updateRecord($data, $id);
    $details = $process->getDetail($id);
  }
?>

<body>
  <div class="container my-5">
    <h1 class="text-center mb-3">Update Data</h1>
    <div class="card">
      <div class="card-header p-3">
        <a href="./index.php" class="btn-danger btn">Kembali</a>
      </div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="mb-3">
            <div class="row">
              <div class="col-6">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" required value="<?= $details['name']?>">
              </div>
              <div class="col-3">
                <label class="form-label">Harga</label>
                <div class="input-group">
                <span class="input-group-text">Rp.</span>
                <input type="number" name="price" class="form-control" value="<?= $details['price']?>">
                </div>
              </div>
              <div class="col-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stock" class="form-control" value="<?= $details['stock']?>">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3"><?= $details['description']?></textarea>
          </div>
          <div class="mb-3">
            <div class="text-end">
              <button type="submit" name="update_record" class="btn-success btn">Update</button>
            </div>
          </div>
        </form>
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