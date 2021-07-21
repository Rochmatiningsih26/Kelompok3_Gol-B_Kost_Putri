  <?php $this->load->view('templates/User/Header'); ?>

  <!-- ____________________info kost______________________________--> 
  <div class="allcontain">
    <div class="feturedsection">
      <h1 class="text-center"><span class="bdots" style="font-family: Copperplate">&bullet; KONTAK  &bullet; </span></h1>
    </div>
    
    <div class="row">
      <?php foreach ($kontak as $key => $value) { ?>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar_pemilik; ?>" alt="...">
            <div class="caption">
              <p>Nama :  <?php echo $value->nama_kontak; ?></p>
              <p>Alamat :  <?php echo $value->alamat; ?></p>
              <p>Email  :  <?php echo $value->email; ?></p>
              <p>No Telepon  :  <?php echo $value->no_telepon; ?></p>
              <p>No Rekening  :  <?php echo $value->no_rekening; ?></p>
            </div>
          </div>
        </div><?php } ?>
      </div>
      

  <?php $this->load->view('templates/User/Footer'); ?>