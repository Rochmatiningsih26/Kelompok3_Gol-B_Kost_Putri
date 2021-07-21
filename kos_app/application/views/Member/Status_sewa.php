<?php $this->load->view('templates/User/Header_member'); ?>
		<!--_______________________________________Register_________________________________ -->
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots" style="font-family: Copperplate">&bullet; STATUS PEMBAYARAN SEWA SELURUH MEMBER &bullet; </span></h1>
	</div>
</div>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>Nama</th>
					<th>Hunian </th>
					<th>Bulan-Tahun</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($sewa as $key => $value) { ?>
				<tr>
					<td><?php echo $value->nama_member ?></td>
					<td><?php echo $value->nama_hunian; ?></td>
					<td><?php echo $value->bulan; ?></td>
					<td><?php echo $value->status; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<BR>
	<br>
	<?php $this->load->view('templates/User/Footer'); ?>