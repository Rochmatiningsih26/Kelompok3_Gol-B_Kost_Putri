<?php $this->load->view('templates/Admin/Header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"> Form Kontak </h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama : </label>
				<input type="text" name="nama_kontak" class="form-control" placeholder="Inputkan Nama Kontak"
				required value="<?php echo $nama_kontak; ?>">
			</div>

			<div class="form-group">
				<label>Alamat : </label>
				<input type="text" name="alamat" class="form-control" placeholder="Inputkan Alamat" 
				required value="<?php echo $alamat; ?>">
			</div>
			
			<div class="form-group">
				<label>Email : </label>
				<input type="text" name="email" class="form-control" placeholder="Inputkan Email" 
				required value="<?php echo $email; ?>">
			</div>

			<div class="form-group">
				<label>No Telepon : </label>
				<input type="text" name="no_telepon" class="form-control" placeholder="Inputkan No Telepon" 
				required value="<?php echo $no_telepon; ?>">
			</div>

			<div class="form-group">
				<label>No Rekening : </label>
				<input type="text" name="no_rekening" class="form-control" placeholder="Inputkan No Rekening" 
				required value="<?php echo $no_rekening; ?>">
			</div>

			<div class="form-group">
				<label>Gambar : </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Pemilik">
			</div>

			<input type="hidden" name="id_kontak" value="<?php echo $id_kontak; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('kontak')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/Admin/Footer'); ?>