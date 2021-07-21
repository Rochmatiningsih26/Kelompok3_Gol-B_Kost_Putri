	<?php $this->load->view('templates/User/Header'); ?>

	<!-- ____________________info kost______________________________--> 
	<div class="allcontain">
		<div class="feturedsection">
			<h1 class="text-center"><span class="bdots" style="font-family: Copperplate">&bullet; FASILITAS UMUM  &bullet; </span></h1>
		</div>
		
		<div class="row">
			<?php foreach ($fasilitas as $key => $value) { ?>

			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img style="width:300px; height: 300px;" width= "50%" height= "50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar_fasilitas; ?>" alt="...">
			      <div class="caption">
			        <h3><?php echo $value->nama_fasilitas; ?></h3>
			      </div>
			    </div>
			  </div><?php } ?>
			</div>
			

	<?php $this->load->view('templates/User/Footer'); ?>