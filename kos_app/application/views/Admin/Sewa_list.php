<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php $this->load->view('templates/Admin/Header');?>
<div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-lg-12">
           <h2>DATA PEMBAYARAN SEWA</h2>
           <hr> 
	</div>

	<div class="navbar-form navbar-right">
		
	</div>

   <div class="navbar-form navbar-left">
   	<?php echo form_open('Sewa/search'); ?>
   	<input type="text"  style="width: 300px" name="keyword" class="form_control" placeholder="Search">
   	<button type="submit" class="btn btn-success">Cari</button>

   	<?php echo form_close(); ?>
   </div>

	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID </th>
					<th>Nama</th>
					<th>Kamar Kost</th>
					<th>Tanggal Pembayaran</th>
					<th>Nominal</th>
					<th>Bukti Transfer Sewa</th>
					<th>Bulan </th>
					<th>Status</th>
					<th style="width:200px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($sewa as $key => $value) { ?>
				<tr class="warning">
					<td><?php echo $value->id_sewa; ?></td>
					<td><?php echo $value->nama_member ?></td>
					<td><?php echo $value->nama_hunian; ?></td>
					<td><?php echo $value->tanggal; ?></td>
					<td><?php echo $value->nominal; ?></td>
					<td><?php echo $value->gambar; ?><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>"></td>
					<td><?php echo $value->bulan; ?></td>
					<td><?php echo $value->status; ?></td>
					<td>
						<a href="<?php echo site_url('Sewa/update/'.$value->id_sewa); ?>"
							class="btn btn-primary">
							<i class="fa fa-pencil-square"></i>
						</a>
						
						<a href="<?php echo site_url('Sewa/delete/'.$value->id_sewa); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash-o"></i>
						</a>

						<a href="<?php echo site_url('Sewa/cetak/'.$value->id_sewa); ?>"
							class="btn btn-warning">
							<i class="fa fa-print"></i>
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
</body>
</html>
