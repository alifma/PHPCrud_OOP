<?php
include_once("../config/db.php");

// Display All Data
function getAll(){
  global $con;
  $results = [];
  $get = $con->query("SELECT * FROM tbl_products");
  while ($row = $get->fetch_assoc()) {
    array_push($results, $row);
  }
  return $results;
}

// Display Specific Data
function getDetail($id){
  global $con;
  $detail = $con->query("SELECT * FROM tbl_products WHERE id=$id");
  return $detail->fetch_assoc();
}
// Handler post request
if (isset($_POST["submit_record"])) {
  $data = [
    "name" => $_POST["name"],
    "description" => $_POST["description"],
    "price" => $_POST["price"],
    "stock" => $_POST["stock"]
  ];
  // calls insert record function to insert the data
  insertRecord($data);
} 
// Insert new record
function insertRecord($data){
  global $con;
  $name        = $con->real_escape_string($data["name"]);
  $description = $con->real_escape_string($data["description"]);
  $price       = $con->real_escape_string($data["price"]);
  $stock       = $con->real_escape_string($data["stock"]);
  $post        = $con->query("INSERT INTO tbl_products (name, description, price, stock) VALUE ('$name', '$description', $price, $stock)");
  if(!$post){
    echo '
    <div style="text-align:center">
      <h2>Tambah Data Gagal</h2>
      <a href="../views/add.php">Coba Lagi</a>
    </div>
    ';
    die();
  }
  echo '
  <div style="text-align:center">
    <h2>Data Berhasil Dibuat</h2>
    <a href="../views/index.php">Kembali Ke laman Utama</a>
  </div>
  ';
}

// Update new record
function updateRecord($data, $id){
  global $con;
  $name = $con->real_escape_string($data['name']);
  $description = $con->real_escape_string($data['description']);
  $price = $con->real_escape_string($data['price']);
  $stock = $con->real_escape_string($data['stock']);

  $update = $con->query("UPDATE tbl_products SET name='$name', description='$description', price=$price, stock=$stock WHERE id=$id");

  if(!$update){
    echo '
      <div class="alert alert-danger" role="alert">
        Update Data Gagal
      </div>
    ';
    die();
  }
  echo '
    <div class="alert alert-primary" role="alert">
      Update Data Sukses!
    </div>
  ';
}

if(isset($_GET['deleted_id'])){
  global $con;
  $id = $_GET['deleted_id'];
  $delete = $con->query("DELETE FROM tbl_products WHERE id=$id");
  if(!$delete){
    echo '
      <div style="text-align:center">
        <h2>Data Gagal Dihapus</h2>
        <a href="../views/index.php">Kembali Ke laman Utama</a>
      </div>
    ';
    die();
  }
  echo '
  <div style="text-align:center">
    <h2>Data Berhasil Dihapus</h2>
    <a href="../views/index.php">Kembali Ke laman Utama</a>
  </div>
  ';
}