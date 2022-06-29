<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tugas</title>

  <!-- Bootstrap core CSS -->
  <link  href="<?=base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=base_url();?>/assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
  <div class="row d-flexZZZ" style="line-height:50px;">
    <div class="col-md-12">
      <div class="bg-primary border-right" id="sidebar-wrapperZZZ">
        <div class="sidebar-heading">Start Anisa </div>
        
      </div>
    </div>
  </div>
  <div class="d-flexZZZ row" id="wrapperZZZ" style="height:450px;">

  <div class="col-md-10">
    <div class="container-fluid">
        <img  src="anisa.jpg" alt="Northern Lights, Norway" width="300" height="300">
<p> Nama : <?=$nama?> </p>
<p> NIM : <?=$nim?> </p>
<p> Jenis Kelamin : <?=$jeniskelamin?> </p>
<p> Alamat : <?=$alamat?> </p>
      </div>
 
  </div>
  <div class="col-md-2">
  <div class="list-group list-group-flush">
        <a href="<?=base_url('profil')?>"  class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="<?=base_url('portopolio')?>" class="list-group-item list-group-item-action bg-light">Portofolio</a>
        <a href="<?=base_url('hubungiSaya')?> " class="list-group-item list-group-item-action bg-light">Hubungi Saya...</a>
      </div>
  </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-primary bg-primary border-bottom">
        <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('profil')?>">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('portofolio')?>">Portofolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('hubungisaya')?>">Hubungi Saya</a>
            </li>
          </ul>
        </div>
      </nav>

<!-- Page Content -->

</body>
</html>