<?php $this->load->view('templates/Admin/Header');?>

<div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-lg-12">
           <h2>Data Fasilitas</h2>
           <hr> 
		</div><?=$this->session->flashdata('pesan')?>	
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('fasilitas/tambah'); ?>" class="btn btn-success" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Tambah Data</a>
		</div>	

	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th>Nama Fasilitas</th>
					<th style="width:200px">Gambar Fasilitas</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($fasilitas as $key => $value) { ?>
				<tr class="warning">
					<td><?php echo $value->id_fasilitas; ?></td>
					<td><?php echo $value->nama_fasilitas; ?></td>
					<td><img style="width:200px; height: 200px;" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar_fasilitas; ?>"></td>
					<td>
						
						<a href="<?php echo site_url('fasilitas/update/'.$value->id_fasilitas); ?>"
							class="btn btn-primary">
							<i class="fa fa-pencil-square"></i>
						</a>
						<a href="<?php echo site_url('fasilitas/delete/'.$value->id_fasilitas); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash-o"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<!-- /. ROW  --> 
</div>
<!-- /. PAGE INNER  -->

<?php $this->load->view('templates/Admin/Footer'); ?>
	