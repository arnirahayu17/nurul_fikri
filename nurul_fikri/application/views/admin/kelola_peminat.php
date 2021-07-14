  <!----Badan Website---->
  <div class="py-5" style="	background-image: linear-gradient(to bottom, 	#f7f7f7);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 w-100 h-50" style="	background-image: linear-gradient(to bottom, 	#f7f7f7);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
  <div class="container">
      <nav aria-label="breadcrumb" style="padding-top: 30px;">
        <ol class="breadcrumb bread justify-content-end bg-white">
        <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin')?>">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Peminat Lowongan</li>
        </ol>
    </nav>
  </div>

  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center bg-white">
        <thead>
            <tr>
              <th>NO</th><th>NIM</th><th>Nama</th><th>Alasan</th><th>Prodi</th><th>Lowongan</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $nomor=1;
            foreach ($data_peminat as $peminat): ?>
              <tr><td><?= $nomor++ ?></td>
              <td><?= $peminat->nim ?></td>
              <td><?= $peminat->nama ?></td>
              <td><?= $peminat->alasan ?></td>
              <td><?= $peminat->prodi_id ?></td>
              <td><?= $peminat->lowongan_id ?></td>
              <td><a href="<?= base_url('index.php/admin/detail_mitra/'.$peminat->id)?>" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fas fa-info"></i></a>
              <a href="<?= base_url('index.php/admin/edit_peminat/'.$peminat->id)?>" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fas fa-edit"></i></a>
              <a href="<?= base_url('index.php/admin/delete_peminat/'.$peminat->id)?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"
              onclick="return onDelete('Anda yakin untuk menghapus ? ')"><i class="fas fa-trash-alt"></i></a></td></tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
