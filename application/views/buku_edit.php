<div style="margin-bottom: 20px;">
	<h3>Edit Buku</h3>
</div>

<?php
// echo form_open('buku/proses', '', array('id' => $buku->id_buku));
?>
<form action="<?=site_url('buku/proses')?>" method="post">
	<input type="hidden" name="id" value="<?=$buku->id_buku?>">
	<table>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td>
				<input type="text" name="judul" value="<?=$buku->judul?>" required>
			</td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td>:</td>
			<td>
				<?php echo form_input('pengarang', $buku->pengarang, 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td>:</td>
			<td>
				<?php echo form_input(array('type' => 'number', 'value' => $buku->tahun_terbit, 'name' => 'tahun', 'required' => 'required')); ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="edit">Simpan</button>
				<a href="<?=site_url('buku');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
	</table>
<form>