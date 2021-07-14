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
        <li class="breadcrumb-item active" aria-current="page">Kelola Berita</li>
        </ol>
    </nav>
  </div>
 <div class="container">
    <fieldset style="background-color: white;">
      <legend style="padding-left: 10px; font-size: 30px;"> Isi Berita </legend>
      
      <div class="container">

        <form  class="formm">
          <div class="form-group row">
              <label for="user" class="col-sm-3 col-form-label">Judul Berita</label>
              <div class="col-sm">
                <input type="text" class="form-control" id="username" required placeholder="">
              </div>
          </div>

            <div class="form-group row">
              <label for="text-area" class="col-sm-3 col-form-label">Deskripsi Berita / Isi Berita</label>
              <div class="col-sm">
                <textarea class="form-control" id="text-area" rows="3" required placeholder=""></textarea>
              </div>  
          </div>

          <div class="form-group row">
            <label for="number" class="col-3 col-form-label">Nama</label> 
            <div class="col-sm">
              <input id="number" name="number" type="text" class="form-control" required placeholder="">
            </div>
          </div>

          <div class="form-group row">
              <label for="number" class="col-3 col-form-label">Asal Kampus</label> 
              <div class="col-sm">
                <input id="number" name="number" type="text" class="form-control" required placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="number" class="col-3 col-form-label">Email</label> 
              <div class="col-sm">
                <input id="number" name="number" type="text" class="form-control" required placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-3 col-form-label">No. HP/Telpon</label> 
              <div class="col-sm">
                <input id="email" name="email" type="email" class="form-control" required placeholder="">
              </div>
            </div> 

            <br>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Publish</button>
              <button class="btn btn-danger" type="reset">Batal</button>
            </div>
            <br>
        </form>

    </fieldset>
    
  </div>
  <div class="py-3 h-25" style="	background-image: linear-gradient(to bottom, 	#dfe3ee, 	#dfe3ee);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center" style="	background-image: linear-gradient(to bottom, 	#dfe3ee, 	#dfe3ee);	background-position: top left;	background-size: auto;	background-repeat: repeat;">
          <div class="row" style="	background-image: linear-gradient(to bottom, 	#dfe3ee, 	#dfe3ee);	background-position: top left;	background-size: auto;	background-repeat: repeat;">
          </div>
        </div>
      </div>