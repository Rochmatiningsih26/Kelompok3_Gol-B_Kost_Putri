<?php $this->load->view('templates/Admin/Header');?>

<div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-lg-12">
           <h2>Data Kontak</h2>
           <hr> 
		</div><?=$this->session->flashdata('pesan')?>	
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('kontak/tambah'); ?>" class="btn btn-success" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Tambah Data</a>
		</div>	

	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th>Nama </th>
					<th>Alamat </th>
					<th>Email </th>
					<th>No Telepon </th>
					<th>No Rekening </th>
					<th style="width:200px">Gambar </th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($kontak as $key => $value) { ?>
				<tr class="warning">
					<td><?php echo $value->id_kontak; ?></td>
					<td><?php echo $value->nama_kontak; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->no_telepon; ?></td>
					<td><?php echo $value->no_rekening; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar_pemilik; ?>"></td>
					<td>
						
						<a href="<?php echo site_url('kontak/update/'.$value->id_kontak); ?>"
							class="btn btn-primary">
							<i class="fa fa-pencil-square"></i>
						</a>
						<a href="<?php echo site_url('kontak/delete/'.$value->id_kontak); ?>"
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
	