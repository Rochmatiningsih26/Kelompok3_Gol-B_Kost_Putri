<?php $this->load->view('templates/Admin/Header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"> Form Fasilitas </h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Fasilitas: </label>
				<input type="text" name="nama_fasilitas" class="form-control" placeholder="Inputkan Nama Fasilitas" 
				required value="<?php echo $nama_fasilitas; ?>">
			</div>
			
			<div class="form-group">
				<label>Gambar Fasilitas: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Fasilitas">
			</div>

			<input type="hidden" name="id_fasilitas" value="<?php echo $id_fasilitas; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('fasilitas')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/Admin/Footer'); ?>