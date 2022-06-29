<html>
<title>Tugas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/w3.CSS"

  

  <!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="<?base_url('profil')?>" class="w3-bar-item w3-button">Profil</a>
  <a href="<?base_url('portofolio')?>" class="w3-bar-item w3-button">Portofolio</a>
  <a href="<?base_url('hubungisaya')?>" class="w3-bar-item w3-button">Hubungi aya</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<img src="1.jpg" alt="Car" style="width:100%">

<div class="w3-container w3-deep-purple">
  <h1>Biodata Diri</h1>
</div>

<div class="container">

<p> Prestasi : <?=$prestasi?> </p>
<p> Pengalaman Kerja : <?=$pengalamankerja?> </p>

</div>

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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('profil')?>">Profil</a>
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


      
</body>
</html>