<?php
	
	include 'koneksi.php';

	if (isset($_POST['submit1'])) {
		// proses insert data
		$insert = mysqli_query($conn, "INSERT INTO tb_peserta VALUES (
			'".$_POST['jns_pendaftaran']."',
			'".$_POST['tgl_masuk']."',
			'".$_POST['nis']."',
			'".$_POST['no_peserta']."',
			'".$_POST['paud']."',
			'".$_POST['tk']."',
			'".$_POST['no_skhun']."',
			'".$_POST['no_ijazah']."',
			'".$_POST['hobi']."',
			'".$_POST['citacita']."'
		)");

		if ($insert) {
			echo "<center>Data Registrasi Peserta Didik Berhasil Terkirim<center>";
		} else {
			echo "Gagal!";
		}
	}

	if (isset($_POST['submit2'])) {
		// proses insert data
		$insert = mysqli_query($conn, "INSERT INTO tb_pribadi VALUES (
			'".$_POST['nama']."',
			'".$_POST['jns_kelamin']."',
			'".$_POST['nisn']."',
			'".$_POST['nik']."',
			'".$_POST['tmpt_lahir']."',
			'".$_POST['tgl_lahir']."',
			'".$_POST['agama']."',
			'".$_POST['kebutuhan']."',
			'".$_POST['jalan']."',
			'".$_POST['rt']."',
			'".$_POST['rw']."',
			'".$_POST['dusun']."',
			'".$_POST['desa']."',
			'".$_POST['kecamatan']."',
			'".$_POST['kode_pos']."',
			'".$_POST['tinggal']."',
			'".$_POST['transportasi']."',
			'".$_POST['hp']."',
			'".$_POST['telp']."',
			'".$_POST['email']."',
			'".$_POST['kip']."',
			'".$_POST['no_kip']."',
			'".$_POST['kewarganegaraan']."'
		)");

		if ($insert) {
			echo "<center>Data Pribadi Berhasil Terkirim<center>";
		} else {
			echo "Gagal!";
		}
	}

	if (isset($_POST['submit3'])) {
		// proses insert data
		$insert = mysqli_query($conn, "INSERT INTO tb_ayah VALUES (
			'".$_POST['nama_ayah']."',
			'".$_POST['tahun_ayah']."',
			'".$_POST['pendidikan_ayah']."',
			'".$_POST['pekerjaan_ayah']."',
			'".$_POST['penghasilan_ayah']."',
			'".$_POST['kebutuhan_ayah']."'
		)");

		if ($insert) {
			echo "<center>Data Ayah Kandung Berhasil Terkirim<center>";
		} else {
			echo "Gagal!";
		}
	}

	if (isset($_POST['submit4'])) {
		// proses insert data
		$insert = mysqli_query($conn, "INSERT INTO tb_ibu VALUES (
			'".$_POST['nama_ibu']."',
			'".$_POST['tahun_ibu']."',
			'".$_POST['pendidikan_ibu']."',
			'".$_POST['pekerjaan_ibu']."',
			'".$_POST['penghasilan_ibu']."',
			'".$_POST['kebutuhan_ibu']."'
		)");

		if ($insert) {
			echo "<center>Data Ibu Kandung Berhasil Terkirim<center>";
		} else {
			echo "Gagal!";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- bagian box formulir-->
	<section class="box-formulir">
		<h2 align="center">Formulir Peserta Didik</h2>

		<!-- bagian form -->
		<form method="post">
			<div class="box">			
			<h3>Registrasi Peserta Didik</h3>
				<table class="table-form" width="100%">
					<tr>
						<td>1. Jenis Pendaftaran</td>
						<td>:</td>
						<td>
							<select class="input-control" name="jns_pendaftaran">
								<option value="Siswa Baru">Siswa Baru</option>
								<option value="Pindahan">Pindahan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>2. Tanggal Masuk Sekolah</td>
						<td>:</td>
						<td>
							<input class="input-control" type="date" name="tgl_masuk">
						</td>
					</tr>
					<tr>
						<td>3. NIS</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="nis">
						</td>
					</tr>
					<tr>
						<td>4. Nomor Peserta Ujian</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="no_peserta">
						</td>
					</tr>
					<tr>
						<td>5. Apakah pernah PAUD</td>
						<td>:</td>
						<td>
							<input type="radio" name="paud" value="Ya"> Ya &nbsp;&nbsp;
							<input type="radio" name="paud" value="Tidak"> Tidak
						</td>
					</tr>
					<tr>
						<td>6. Apakah pernah TK</td>
						<td>:</td>
						<td>
							<input type="radio" name="tk" value="Ya"> Ya &nbsp;&nbsp;
							<input type="radio" name="tk" value="Tidak"> Tidak
						</td>
					</tr>
					<tr>
						<td>7. No. Seri SKHUN Sebelumnya</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="no_skhun">
						</td>
					</tr>
					<tr>
						<td>8. No. Seri Ijazah Sebelumnya</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="no_ijazah">
						</td>
					</tr>
					<tr>
						<td>9. Hobi</td>
						<td>:</td>
						<td>
							<select class="input-control" name="hobi">
								<option value="Olah Raga">Olah Raga</option>
								<option value="Kesenian">Kesenian</option>
								<option value="Membaca">Membaca</option>
								<option value="Menulis">Menulis</option>
								<option value="Traveling">Traveling</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>10. Cita-cita</td>
						<td>:</td>
						<td>
							<select class="input-control" name="citacita">
								<option value="PNS">PNS</option>
								<option value="TNI/POLRI">TNI/POLRI</option>
								<option value="Guru/Dosen">Guru/Dosen</option>
								<option value="Dokter">Dokter</option>
								<option value="Politikus">Politikus</option>
								<option value="Wiraswasta">Wiraswasta</option>
								<option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="submit1" class="btn-submit" value="KIRIM"></td>
					</tr>
				</table>
				<br>
				<h3>Data Pribadi</h3>
				<table class="table-form" width="100%">
					<tr>
						<td>11. Nama Lengkap</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="nama">
						</td>
					</tr>
					<tr>
						<td>12. Jenis kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jns_kelamin" value="Laki-laki"> Laki-laki &nbsp;&nbsp;
							<input type="radio" name="jns_kelamin" value="Perempuan"> Perempuan
						</td>
					</tr>
					<tr>
						<td>13. NISN</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="nisn">
						</td>
					</tr>
					<tr>
						<td>14. NIK</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="nik">
						</td>
					</tr>
					<tr>
						<td>15. Tempat Lahir</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="tmpt_lahir">
						</td>
					</tr>
					<tr>
						<td>16. Tanggal Lahir</td>
						<td>:</td>
						<td>
							<input class="input-control" type="date" name="tgl_lahir">
						</td>
					</tr>
					<tr>
						<td>17. Agama</td>
						<td>:</td>
						<td>
							<select class="input-control" name="agama">
								<option value="Islam">Islam</option>
								<option value="Kristen/Protestan">Kristen/Protestan</option>
								<option value="Katholik">Katholik</option>
								<option value="Hindu">Hindu</option>
								<option value="Budha">Budha</option>
								<option value="Khong Hu Chu">Khong Hu Chu</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>18. Berkebutuhan Khusus</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="kebutuhan">
						</td>
					</tr>
					<tr>
						<td>19. Alamat Jalan</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="jalan">
						</td>
					</tr>
					<tr>
						<td>20. RT</td>
						<td>:</td>
						<td>
							<input class="input-control" type="number" name="rt">
						</td>
					</tr>
					<tr>
						<td>21. RW</td>
						<td>:</td>
						<td>
							<input class="input-control" type="number" name="rw">
						</td>
					</tr>
					<tr>
						<td>22. Nama Dusun</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="dusun">
						</td>
					</tr>
					<tr>
						<td>23. Nama Kelurahan/Desa</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="desa">
						</td>
					</tr>
					<tr>
						<td>24. Nama Kecamatan</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="kecamatan">
						</td>
					</tr>
					<tr>
						<td>25. Kode Pos</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="kode_pos">
						</td>
					</tr>
					<tr>
						<td>26. Tempat Tinggal</td>
						<td>:</td>
						<td>
							<select class="input-control" name="tinggal">
								<option value="Bersama orang Tua">Bersama orang Tua</option>
								<option value="Wali">Wali</option>
								<option value="Kos">Kos</option>
								<option value="Asrama">Asrama</option>
								<option value="Panti Asuhan">Panti Asuhan</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>27. Moda Transportasi</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="transportasi">
						</td>
					</tr>
					<tr>
						<td>28. Nomor HP</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="hp">
						</td>
					</tr>
					<tr>
						<td>29. Nomor Telepon</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="telp">
						</td>
					</tr>
					<tr>
						<td>30. E-mail Pribadi</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="email">
						</td>
					</tr>
					<tr>
						<td>31. Penerima KPS/PKH/KIP</td>
						<td>:</td>
						<td>
							<input type="radio" name="kip" value="Ya"> Ya &nbsp;&nbsp;
							<input type="radio" name="kip" value="Tidak"> Tidak
						</td>
					</tr>
					<tr>
						<td>32. No. KPS/KKS/PKH/KIP</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="no_kip">
						</td>
					</tr>
					<tr>
						<td>33. Kewarganegaraan</td>
						<td>:</td>
						<td>
							<input type="radio" name="kewarganegaraan" value="WNI"> WNI &nbsp;&nbsp;
							<input type="radio" name="kewarganegaraan" value="WNA"> WNA
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="submit2" class="btn-submit" value="KIRIM"></td>
					</tr>
				</table>
				<br>
				<h3>Data Ayah Kandung</h3>
				<table class="table-form" width="100%">
					<tr>
						<td>34. Nama Ayah Kandung</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="nama_ayah">
						</td>
					</tr>
					<tr>
						<td>35. Tahun Lahir</td>
						<td>:</td>
						<td>
							<input class="input-control" type="number" name="tahun_ayah">
						</td>
					</tr>
					<tr>
						<td>36. Pendidikan Terakhir</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="pendidikan_ayah">
						</td>
					</tr>
					<tr>
						<td>37. Pekerjaan</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="pekerjaan_ayah">
						</td>
					</tr>
					<tr>
						<td>38. Penghasilan bulanan</td>
						<td>:</td>
						<td>
							<select class="input-control" name="penghasilan_ayah">
								<option value="< Rp.500.000">< Rp.500.000</option>
								<option value="Rp.500.000 - Rp.999.999">Rp.500.000 - Rp.999.999</option>
								<option value="Rp.1 Juta - Rp.1.999.999">Rp.1 Juta - Rp.1.999.999</option>
								<option value="Rp.2 Juta - Rp.4.999.999">Rp.2 Juta - Rp.4.999.999</option>
								<option value="Rp.5 Juta - Rp.20 Juta">Rp.5 Juta - Rp.20 Juta</option>
								<option value="> 20 Juta " >> 20 Juta </option>
							</select>
						</td>
					</tr>
					<tr>
						<td>39. Berkebutuhan Khusus</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="kebutuhan_ayah">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="submit3" class="btn-submit" value="KIRIM"></td>
					</tr>
				</table>
				<br>
				<h3>Data Ibu Kandung</h3>
				<table class="table-form" width="100%">
					<tr>
						<td>40. Nama Ibu Kandung</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="nama_ibu">
						</td>
					</tr>
					<tr>
						<td>41. Tahun Lahir</td>
						<td>:</td>
						<td>
							<input class="input-control" type="number" name="tahun_ibu">
						</td>
					</tr>
					<tr>
						<td>42. Pendidikan Terakhir</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="pendidikan_ibu">
						</td>
					</tr>
					<tr>
						<td>43. Pekerjaan</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="pekerjaan_ibu">
						</td>
					</tr>
					<tr>
						<td>44. Penghasilan bulanan</td>
						<td>:</td>
						<td>
							<select class="input-control" name="penghasilan_ibu">
								<option value="< Rp.500.000">< Rp.500.000</option>
								<option value="Rp.500.000 - Rp.999.999">Rp.500.000 - Rp.999.999</option>
								<option value="Rp.1 Juta - Rp.1.999.999">Rp.1 Juta - Rp.1.999.999</option>
								<option value="Rp.2 Juta - Rp.4.999.999">Rp.2 Juta - Rp.4.999.999</option>
								<option value="Rp.5 Juta - Rp.20 Juta">Rp.5 Juta - Rp.20 Juta</option>
								<option value="> 20 Juta " >> 20 Juta </option>
							</select>
						</td>
					</tr>
					<tr>
						<td>45. Berkebutuhan Khusus</td>
						<td>:</td>
						<td>
							<input class="input-control" type="text" name="kebutuhan_ibu">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="submit4" class="btn-submit" value="KIRIM"></td>
					</tr>
				</table>
			</div>
		</form>
	</section>
</body>
</html>