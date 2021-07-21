	<?php $this->load->view('templates/User/Header_member'); ?>

<!-- ____________________info kost______________________________--> 
	<div class="allcontain">
		<div class="feturedsection">
			<h1 class="text-center"><span class="bdots" style="font-family: Copperplate">&bullet; INFORMASI KAMAR KOST  &bullet; </span></h1>
		</div>

<div class="row">
<?php foreach ($hunian as $key => $value) { ?>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img style="width:300px; height: 200px; " width= "50%" height= "50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>" alt="...">
      <div class="caption">
        <h3><?php echo $value->nama_hunian; ?></h3>
        <p>Keterangan : <?php echo $value->deskripsi_hunian; ?></p>
        <p>Status : <b><?php echo $value->status_hunian; ?></b></p>
		    <h2>Harga Rp.<?php echo $value->harga_hunian; ?></h2><br>
        <p><a href="<?php echo base_url()."Pesan/pemesanan/".$value->id_hunian?>" class="btn btn-warning" class="btn btn-primary" role="button">Pesan</a> 
        <a href="<?php echo base_url()."Sewa/tambah/".$value->id_hunian?>" class="btn btn-success" class="btn btn-success">Bayar Sewa</a></p>
      </div>
    </div>
  </div><?php } ?>
</div>

	<?php $this->load->view('templates/User/Footer'); ?>