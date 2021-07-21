<?php $this->load->view('templates/Admin/Header');?>
<div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-lg-12">
           <h2> DATA ADMIN </h2>
           <hr>   
		</div><?=$this->session->flashdata('admin')?>
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama Admin</th>
					<th>Password</th>
					<th>Username</th>
					<th>Status</th>
					<th>No HP</th>
					<th>Alamat</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($admin as $key => $value) { ?>
				<tr class="warning">
					<td><?php echo $value->id_admin; ?></td>
					<td><?php echo $value->nama_admin; ?></td>
					<td><?php echo $value->password; ?></td>
					<td><?php echo $value->username; ?></td>
					<td><?php echo $value->status; ?></td>
					<td><?php echo $value->nohp; ?></td>
					<td><?php echo $value->alamat_admin; ?></td>
					<td>
						
						<a href="<?php echo site_url('admin/update/'.$value->id_admin); ?>"
							class="btn btn-primary">
							<i class="fa fa-pencil-square"></i>
						</a>
						<a href="<?php echo site_url('admin/delete/'.$value->id_admin); ?>"
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
</div>
<!-- /. PAGE WRAPPER  -->     
<?php $this->load->view('templates/Admin/Footer'); ?>