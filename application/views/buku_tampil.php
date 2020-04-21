<div style="margin-bottom: 20px;">
	<a href="<?=site_url('buku/add');?>"><button class="btn">Tambah</button></a>
</div>

<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Tahun Terbit</th>
		<th></th>
	</tr>
	<?php
	$no = 1;
	foreach ($buku as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->judul;?></td>
			<td><?=$row->pengarang;?></td>
			<td><?=$row->tahun_terbit;?></td>
			<td>
				<a href="<?=site_url('buku/edit/'.$row->id_buku);?>"><button class="btn">Edit</button></a>
				<a href="<?=site_url('buku/del/'.$row->id_buku);?>" onclick="return confirm('Yakin akan menghapus data?')"><button class="btn">Hapus</button></a>
			</td>
		</tr>
	<?php	
	} ?>
</table>