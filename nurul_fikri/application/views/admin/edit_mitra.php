  <div class="container">
    <fieldset style="background-color: white;">
      <div class="col-md-12">
        <h2 class="mt-3 mb-4">Edit Mitra</h2>
      </div>
    
      <div class="container">
        <?= form_open('admin/update_mitra') ?>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                  <i class="far fa-building"></i>
                  </div>
                </div> 
                <input value="<?= $objmitra->nama ?>" id="nama" name="nama" type="text" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label> 
            <div class="col-8">
              <textarea  id="alamat" name="alamat" cols="40" rows="5" class="form-control"><?= $objmitra->alamat ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="kontak" class="col-4 col-form-label">Kontak</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-id-badge"></i>
                  </div>
                </div> 
                <input value="<?= $objmitra->kontak ?>" id="kontak" name="kontak" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="telpon" class="col-4 col-form-label">No.Telpon</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                </div> 
                <input value="<?= $objmitra->telpon ?>" id="telpon" name="telpon" type="text" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-envelope"></i>
                  </div>
                </div> 
                <input value="<?= $objmitra->email ?>" id="email" name="email" type="email" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="web" class="col-4 col-form-label">Website</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fab fa-blogger"></i>
                  </div>
                </div>
                <input value="<?= $objmitra->web ?>" id="web" name="web" placeholder="https://website.co.id" type="url" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 col-form-label" for="bidang_usaha_id">Bidang Usaha</label> 
            <div class="col-8">
              <select id="bidang_usaha_id" name="bidang_usaha_id" class="custom-select" required="required">
                <?php foreach ($data_bdusaha as $data): ?>
                  <option value="<?php echo $data->id ?>"><?php echo $data->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="sektor_usaha_id" class="col-4 col-form-label">Sektor Usaha</label> 
            <div class="col-8">
              <select id="sektor_usaha_id" name="sektor_usaha_id" class="custom-select" required="required">
                <?php foreach ($data_shusaha as $data): ?>
                  <option value="<?php echo $data->id ?>"><?php echo $data->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              <button name="reset" type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </div>
          <input type="hidden" name="idedit" value="<?= $objmitra->id ?>">
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