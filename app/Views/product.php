<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&family=Bubblegum+Sans&display=swap");
        * {
        padding: 0;
        margin: 0;
        font-family: "Baloo Chettan 2", cursive;
        }
        .product {
            font-weight: bold;
            font-size: 30px;
            letter-spacing: 1.4px;
        }
        .desc {
            font-size: 18px;
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?> ">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('product') ?>">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('history') ?>">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="h3">Product</h3>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <p>Ini merupakan halaman Produk saya. </p>
        <?php if (!empty(session()->getFlashdata('message'))) :?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            </hr />
            <?php echo session()->getFlashdata('message'); ?>
        </div>
        <?php endif; ?>
        <a title="Edit" href="<?= base_url("/product/add/"); ?>" class="btn btn-primary">Tambah</a> 
        <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($productx as $row){
                ?>
                <tr>
                <th scope="row"><?= $row->id_barang; ?></th>
                <td><?= $row->nama_barang; ?></td>
                <td><?= "Rp".number_format($row->harga,0,',','.') ?></td>
                <td><?= $row->stok; ?></td>
                <td>
                <a title="Edit" href="<?= base_url('product/edit/' .$row->id_barang); ?>" class="btn btn-success">Edit</a>
                <a title="Delete" href="<?= base_url('product/delete/' .$row->id_barang); ?>" class="btn 
                btn-danger" onclick="return confirm('Apakah anda yakn ingin menghapus data product?')">Delete</a>
                </td>
                </tr>
                <tr>
                <?php
            }
            ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<footer class="jumbroton jumbroton-fluid mt-5 mb-0">
            <div class="container text-center">Copyright &copy <?= Date('Y') ?> Riski Amin </div> 
</footer>
            <!-- Jquery dan Bootstrap JS -->
            <script src="<? base_url('js/query.min.js') ?>"</script>
            <script src="<? base_url('js/bootstrap.min.js') ?>"</script>
        </body>
    </html>
