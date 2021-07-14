  <div class="container">
    <fieldset style="background-color: white;">
      <div class="col-md-12">
        <h2 class="mt-3 mb-4">Edit Lowongan Pekerjaan</h2>
      </div>
    
    <div class="container">
        <?= form_open('admin/update_loker') ?>
          <div class="form-group row">
            <label for="deskripsi_pekerjaan" class="col-4 col-form-label">Deskripsi Pekerjaan</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-audio-description"></i>
                  </div>
                </div> 
                <input id="deskripsi_pekerjaan" value="<?= $objloker->deskripsi_pekerjaan ?>" name="deskripsi_pekerjaan" type="text" required="required" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div> 
                <input id="tanggal_akhir" value="<?= $objloker->tanggal_akhir ?>" name="tanggal_akhir" type="date" required="required" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="mitra" class="col-4 col-form-label">Mitra</label> 
            <div class="col-8">
              <select id="id_mitra" name="mitra_id" required="required" class="custom-select">
                <?php foreach ($data_mitra as $data): ?>
                  <option value="<?php echo $data->id?>"><?php echo $data->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-inbox"></i>
                  </div>
                </div> 
                <input id="email" value="<?= $objloker->email ?>" name="email" type="email" class="form-control">
              </div>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Update</button>
              <button name="reset" type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </div>
          <input type="hidden" name="idedit" value="<?= $objloker->id ?>">
        <?= form_close() ?>  
    </fieldset>
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