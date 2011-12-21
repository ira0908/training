<?php
	include "configuration/configuration.php";
	$query1 = mysql_query("SELECT * FROM Paket_Training");
	$query2 = mysql_query("SELECT * FROM Jadwal_Training");
?>
<html>
	<head>
		<title>
			Pendaftaran Training
		</title>
		<script type="text/javascript"> 
			$(document).ready(function(){
				$("#tanggal").datepicker({showAnim:"drop", showOptions:{ direction: "up" }});
				disabledMahasiswa();
			});
			function enabledMahasiswa(){
				document.getElementById("txtPerguruan").disabled=false;
				document.getElementById("txtJurusan").disabled=false;
				document.getElementById("txtSemester").disabled=false;
			}
			
			function disabledMahasiswa(){
				document.getElementById("txtPerguruan").disabled=true;
				document.getElementById("txtJurusan").disabled=true;
				document.getElementById("txtSemester").disabled=true;
			}
		</script>
	</head>
	<body>
		<script type="text/javascript">
		var ng_config = {
			assests_dir: 'assets/'	// the path to the assets directory
		}
	</script>
	<script type="text/javascript" src="ng_all.js"></script>
	<script type="text/javascript" src="components/calendar.js"></script>
	<script type="text/javascript">
	var my_cal;
	var my_cal2;
	ng.ready(function(){
			my_cal = new ng.Calendar({
				input: 'date1',	
				start_date: 'year-50',	
				end_date: 'year+100',
				date_format:'Y-m-d',
				display_date: new Date()
				
			});			
		});
	</script>
		
		
		<form method="POST" action="system/savePendaftaranTraining.php">
			<table>
					<td>
						Nama
					</td>
					<td>
						<input type="hidden" name="tanggalDaftar" value=<??>/>
						<input type="text" name="nama" class=""/>
					</td>
				</tr>
				<tr>
					<td>
						Alamat
					</td>
					<td>
						<textarea name="alamat" cols=30 rows=5 class=""></textarea>
					</td>
				</tr>
				<tr>
					<td>
						Tanggal Lahir
					</td>
					<td>
						<input id="date1" type="text" name="TanggalLahir" />
					</td>
				</tr>
				<tr>
					<td>
						Pekerjaan
					</td>
					<td>
						<input type="text" name="pekerjaan" />
					</td>
				</tr>
				<tr>
					<td>
						Email
					</td>
					<td>
						<input type="text" name="email" class="" />
					</td>
				</tr>
				<tr>
					<td>
						No. Telepon
					</td>
					<td>
						<input type="text" name="telp" class="" />
					</td>
				</tr>
				<tr>
					<td>
						Status
					</td>
					<td>
						<input type="radio" name="status" value="mahasiswa" onClick="enabledMahasiswa();">Mahasiswa
						<input type="radio" name="status" value="umum" onClick="disabledMahasiswa();">Umum			
					</td>
				</tr>
				<tr>
					<td>
						Perguruan Tinggi
					</td>
					<td>
						<input type="text" name="Perguruan_Tinggi" id="txtPerguruan"/>
					</td>
				</tr>
				<tr>
					<td>
						Jurusan
					</td>
					<td>
						<input type="text" name="jurusan" id="txtJurusan"/>
					</td>
				</tr>
				<tr>
					<td>
						Semester
					</td>
					<td>
						<input type="text" name="semester" id="txtSemester"/>
					</td>
				</tr>
				<tr>
					<td>
						Paket Training
					</td>
					<td>
						<select name="PaketTraining">
							<?php
								while($array1=mysql_fetch_array($query1))
								{
									echo"<option value=$array1[id]>$array1[nama_paket_training]</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Tanggal Training
					</td>
					<td>
						<select name="TanggalTraining">
							<?php
								while($array2=mysql_fetch_array($query2))
								{
									echo"<option value=$array2[id]>$array2[tanggal_mulai]</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Pembayaran DP
					</td>
					<td>
						<input type="radio" name="pembayaran" value="cash">
							Cash
						</input>
						<input type="radio" name="pembayaran" value="transfer">
							Transfer Via BCA
						</input>
					</td>
				</tr>
				<tr>
					<td>
						Keterangan
					</td>
					<td>
						<textarea name="keterangan" cols=30 rows=5 class=""></textarea>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						<input type="submit" value="submit" name="submit" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
