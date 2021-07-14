
  <div class="py-5" style="	background-image: linear-gradient(to bottom, #dfe3ee, #dfe3ee);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <main>
      <section>
        <div class="container my-5">
          <div class="row">
            <div class="col-md-8 w-100 h-80" style="	background-image: linear-gradient(to bottom, #f7f7f7, 	#f7f7f7);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
              <div class="border p-5">
                <div class="d-flex justify-content-between">

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="indexhdm.html">Daftar Mitra</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Form Menjadi Pekerja
                      </li>
                    </ol>
                  </nav>
                </div>

                <?= form_open('isi_loker/submit_loker') ?>
                  <legend  class="mb-3 ">Form Menjadi Pekerja</legend>
                  <div class="row mb-3">
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                      <div class="col-sm-10">
                      <input id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" type="text" required="required" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Mitra</label>
                      <div class="col-sm-10">
                      <select id="id_mitra" name="mitra_id" required="required" class="custom-select">
                        <?php foreach ($data_mitra as $data): ?>
                          <option value="<?php echo $data->id ?>"><?php echo $data->nama ?></option>
                        <?php endforeach ?>
                      </select>
                      </div>
                    </div>   
                  </div>
                  <div class="row mb-3">
                    <div class="form-group row">
                    <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir</label>
                      <div class="col-sm-10">
                      <input id="tanggal_akhir" name="tanggal_akhir" type="date" required="required" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                      <div class="col-sm-10">
                        <input id="email" name="email" type="text" required="required" class="form-control">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Daftar</button>
                  <button type="submit" class="btn btn-danger">Batal</button>
                  <?= form_close() ?> 
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  <div class="py-3 h-25" style="	background-image: linear-gradient(to bottom, 	#dfe3ee, 	#dfe3ee);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center" style="	background-image: linear-gradient(to bottom, 	#dfe3ee, 	#dfe3ee);	background-position: top left;	background-size: auto;	background-repeat: repeat;">
          <div class="row" style="	background-image: linear-gradient(to bottom, 	#dfe3ee, 	#dfe3ee);	background-position: top left;	background-size: auto;	background-repeat: repeat;">
          </div>
        </div>
      </div>