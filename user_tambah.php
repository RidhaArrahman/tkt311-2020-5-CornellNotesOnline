<!DOCTYPE html>
<html>
<head>
	<title>Cornell Notes Online</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Tambah Tugas</h2>
		<form action="user_act.php" method="post" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>Nama Tugas:</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="namaTugas" required="required">
			</div>
			<div class="form-group">
				<label>Detil Tugas :</label>
				<textarea class="form-control" name="detilTugas" required="required"></textarea>
			</div>
			<div class="form-group">
				<label>Berkas :</label>
				<input type="file" name="berkas" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan: .pdf</p>
			</div>	
			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>

</body>
</html>