<form action="" method="POST">
	<b>
		<?php
		$tgl=date('l, d-m-y');
		echo $tgl;
		?>
	</b>
	
	<hr>

	<b>
		<?php
		date_default_timezone_set('Asia/jakarta');
		echo "Waktu Sekarang Menunjukkan AdaLah : "   . date("h:i:s");
		?>	
	</b>
	<hr>

	<div>
		<label>Nama Agenda :</label>
		<input type="text" name="nama_agenda" placeholder="Masukkan Nama Agenda">
	</div>

	<button type="submit" value="simpan" name="simpan">SIMPAN</button>


		
</form>