<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!----BoostrapCSSS----->
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!---cssyangakubuat--->
  <link rel="stylesheet" href="<?php echo site_url ('public/css/theme.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo site_url ('public/css/theme1.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo site_url ('public/css/theme2.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo site_url ('public/css/themeteam.css')?>" type="text/css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <title>SILOKERNF.CO.ID</title>
</head>

<body>
  <!---Header Website-->
  <nav class="navbar navbar-dark bg-dark" style="	background-image: linear-gradient(to bottom, #3b5998, #3b5998);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container d-flex justify-content-center"> <a class="navbar-brand" href="index.html">
        <b>Sistem Informasi Lowongan Kerja NF - SILOKERNF</b>
      </a>
    </div>
  </nav>
  <!---Navbar--->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="	background-image: linear-gradient(to bottom, #3b5998, #3b5998);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container"> 
      <a class="navbar-brand" href="#">
         <i class="fa fa-briefcase" aria-hidden="true">
        <b>SILOKERNF</b>
         </i>  
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar11">
        <ul class="navbar-nav mr-auto">
          <i class="fa fa-home fa-2x" aria-hidden="true"></i>
          <li class="nav-item"> <a class="nav-link" href="<?=base_url('index.php')?>">Home</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?=base_url('index.php/Lowongan_baru')?>">Lowongan Baru</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?=base_url('index.php/isi_loker')?>">Isi Loker</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?=base_url('index.php/daftar_mitra')?>">Daftar Mitra</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?=base_url('index.php/Berita')?>">Berita</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?=base_url('index.php/about')?>">About</a> </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button type="button" class="btn btn-success">Search</button>
            <button type="button" class="btn btn-warning"><a class="nav-link" href="<?=base_url('index.php/login')?>">Login</a></button>
        </div>
        </ul>
      </div>
    </div>
  </nav>