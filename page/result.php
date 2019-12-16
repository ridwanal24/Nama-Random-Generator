<div class="row">
   <div class="col-md-4"></div>
   <div class="col-md-4 p-3 bg-light rounded">
      <table class="table table-striped">
		<thead>
			<th>No</th>
			<th>Nama</th>
		</thead>
      <?php
$angka = 100;
$nama = "";
$tempAngka = 100;
$no=1;
for ($a = 0; $a < $_GET['jumlah']; $a++) {
	
	for ($i = 0; $i < 2; $i++) { 
				// code...
		
		while ($angka == $tempAngka) {
				// code...
			$angka = rand(1, 10);
		}
		$tempAngka = $angka;

		switch ($angka) {
			case 1:
					// code...
				$nama .= " Tono";
				break;

			case 2:
					// code...
				$nama .= " Andi";
				break;

			case 3:
					// code...
				$nama .= " Udin";
				break;

			case 4:
					// code...
				$nama .= " Bagus";
				break;

			case 5:
					// code...
				$nama .= " Suparman";
				break;

			case 6:
					// code...
				$nama .= " Jamal";
				break;

			case 7:
					// code...
				$nama .= " Dobleh";
				break;

			case 8:
					// code...
				$nama .= " Kabur";
				break;

			case 9:
					// code...
				$nama .= " Jono";
				break;

			case 10:
					// code...
				$nama .= " Suryo";
				break;
		}
	}
?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $nama; ?></td>
		</tr>	
<?php
	$no++;	
	$angka = 100;
	$nama = "";
	$tempAngka = 100;
}
//echo $nama;

?>
</table>
   </div>
   <div class="col-md-4"></div>
</div>

	<center><a class="btn btn-danger m-5" href="?page=home">HOME</a></center>
