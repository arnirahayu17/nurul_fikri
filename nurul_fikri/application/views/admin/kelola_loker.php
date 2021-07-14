<script>
function onDelete(pesan){
    if (confirm(pesan)){
        return true;
    }else{
        return false;
    }
}
</script>
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
        <li class="breadcrumb-item active" aria-current="page">Kelola Lowongan Kerja</li>
        </ol>
    </nav>
  </div>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center bg-white">
        <thead>
            <tr>
              <th>NO</th><th>Deskripsi Pekerjaan</th><th>Tanggal Akhir</th><th>Mitra</th><th>Email</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $nomor=1;
            foreach ($data_loker as $loker): ?>
              <tr><td><?= $nomor++ ?></td>
              <td><?= $loker->deskripsi_pekerjaan ?></td>
              <td><?= $loker->tanggal_akhir ?></td>
              <td><?= $loker->mitra_id ?></td>
              <td><?= $loker->email ?></td>
              <td><a href="<?= base_url('index.php/admin/edit_loker/'.$loker->id)?>" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fas fa-edit"></i></a>
              <a href="<?= base_url('index.php/admin/delete_loker/'.$loker->id)?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"
              onclick="return onDelete('Anda yakin untuk menghapus ? ')"><i class="fas fa-trash-alt"></i></a></td></tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="py-3 h-25" style="	background-image: linear-gradient(to bottom, 	#dfe3ee, 	#dfe3ee);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center" style="	background-image: linear-gradient(to bottom, 	#dfe3ee, 	#dfe3ee);	background-position: top left;	background-size: auto;	background-repeat: repeat;">
          <div class="row" style="	background-image: linear-gradient(to bottom, 	#dfe3ee, 	#dfe3ee);	background-position: top left;	background-size: auto;	background-repeat: repeat;">
          </div>
        </div>
      </div>