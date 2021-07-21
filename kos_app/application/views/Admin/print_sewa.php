<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
<div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-lg-12">
           <h2>DATA PEMBAYARAN SEWA</h2>
           <hr> 
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
				</tr>
				<?php } ?>
			</tbody>
		</table>

		<script type="text/javascript">
			window.print();
		</script>
	</div>
</div>

<!-- /. ROW  --> 
</div>
</div>
</body></html>
