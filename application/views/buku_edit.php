<?php echo form_open('buku/proses', '', array('id' => $buku->id_buku)); ?>
	<table>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td>
				<?php echo form_input('judul', $buku->judul, 'required="required"'); ?>
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
				<?php echo form_input(array('type' => 'submit', 'name' => 'edit', 'value' => 'Edit')); ?>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>