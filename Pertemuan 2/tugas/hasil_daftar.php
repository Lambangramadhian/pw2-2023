<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-center mb-2 mt-2 pb-2 pt-2">Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Lambang Ramadhian</td>
					<td>lambangramadhian47@gmail.com</td>
					<td>Jl. Kupang Tanjakan no. 114 RT06 RW01, Tugu, Cimanggis, Depok, West Java</td>
					<td>+62895374461582</td>
				</tr>
				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */
				  if (isset($_POST['submit'])) {

					//variabel untuk menampung  data
					$_NamaLengkap= $_POST["full_name"];
					$_email = $_POST["email"];
					$_alamat = $_POST["address"];
					$_telepon = $_POST["telephone"];
			
					//tampilkan data dari variabel
					echo '<td>2</td>'; 
					echo '<td>', $_NamaLengkap, '</td>';
					echo '<td>', $_email, '</td>';
					echo '<td>', $_alamat, '</td>';
					echo '<td>', $_telepon, '</td>';

					
			
				}
				?>

			</tbody>
		</table>
	</div>
</body>
</html>