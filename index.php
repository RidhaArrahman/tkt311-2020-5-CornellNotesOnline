<?php include 'koneksi.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title>Cornell Notes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
	.header {
  padding: 40px;
  text-align: left;
  background: #add8e6;
  color: white;
  font-size: 30px;
  font-family:arial;
}

	</style>
</head>
<body>
	<div class="header">
  <h1><a href="index.html">Cornell Note Online</a></h1>
</div>
	<div class="container">
		
		<h2 style="text-align: center;">Data-data Tugas</h2>		
		<br>
	<br/>
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>
				
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Sukses</h4>
					Berhasil Disimpan
				</div> 	
				
				
				<?php
			}
		}
		?>
		<br>
		<a href="user_tambah.php" class="btn btn-info btn-sm">Tambah Data</a>
		<br>		
		<br>		
		<table class="table table-bordered">
			<tr>
				<th width="10%">No</th>
				<th width="20%">Nama Tugas</th>
				<th width="40%">Detil Tugas</th>
				<th width="20%">Berkas</th>
				<th width="10%">Tindakan</th>
			</tr>
			
			<?php 
			$data = mysqli_query($koneksi,"select * from nama")or die(mysql_error());
			$nomor=1;
			while($d = mysqli_fetch_array($data)){
				?>
				
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $d['namaTugas']; ?></td>
					<td><?php echo $d['detilTugas']; ?></td>
					<td><?php echo $d['berkas']; ?></td>
					<td>
					<a href="hapus.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
					</td>
				</tr>
				<?php
			}

			?>
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>