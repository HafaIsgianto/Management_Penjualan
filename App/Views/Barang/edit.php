<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Management Penjualan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/css/adminlte.min.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-title {
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container form-container">
    <h2 class="form-title">Edit Barang</h2>
    
    <form action="index.php?controller=barang&action=update" method="POST">
        <div class="form-group">
            <label for="kode_barang">ID Barang:</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?= $Barang['kode_barang'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $Barang['nama_barang'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $Barang['harga'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?= $Barang['stok'] ?>" required>
        </div>
        
        <button type="submit" class="btn btn-success">Update</button>
        <a href="index.php?controller=barang&action=index" class="btn btn-outline-light">Kembali</a>
    </form>
</div>
<!-- jQuery -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/js/demo.js"></script>
</body>
</html>