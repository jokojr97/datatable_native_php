<!DOCTYPE html>
<html>
<head>
	<title>Cara Menggunakan Datatables | Malas Ngoding</title>	
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
</head>
<?php 
	
    $conn = mysqli_connect('localhost', 'root', '', 'odcbjn');
?>
<body>
	<center>
		<h1>Datatable Native</h1>
	</center>
	<br/>
	<br/>
	<div class="container">
		<table class="table table-striped table-bordered data">
			<thead style="background-color: green">
				<tr>			
					<th style="color:white">Id</th>
					<th style="color:white">Nama Satker</th>
					<th style="color:white">Nama Paket</th>											
                    <th style="color:white;width: 15%">Nilai Kontrak</th>											
				</tr>
			</thead>
			<tbody>
				<?php					        
					$rev = mysqli_query($conn, "SELECT * from odcbjn_rup2019 ");
					while ($nem = mysqli_fetch_array($rev)) {?>
						<tr>
							<td>
								<p><?= $nem['id']; ?></p>
							</td>
							<td>
								<p><?= $nem['nama']; ?></p>
							</td>
							<td>
								<p><?= $nem['nama_satker']; ?></p>
							</td>
							<td>
								<p><?php $duit = $nem['total_pagu']; echo "Rp. ".number_format((float)"$duit",0,",","."); ; ?></p>
							</td>
						</tr>
					<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();

	});
</script>
</html>