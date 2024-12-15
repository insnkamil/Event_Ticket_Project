<?php

require '../controllers/pemesanan_tiket.php';

// Variabel mengambil data dari 0 pada tabel
$query = query("SELECT * FROM tb_pemesanan_tiket")[0];
// Format tanggal
$tanggal_berangkat = new DateTime($query['tanggal_kunjungan']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CDN Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CDN Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <!-- CSS Invoice -->
    <link rel="stylesheet" href="../assets/css/invoice.css">
    <!-- Icon -->
    <link rel="shortcun icon" href="../assets/img/depan.png">
    <title>Invoice</title>
</head>
<body>
    <!-- Navbar (Navigasi Bar) -->
    <nav class="shadow">
        <a href="#" class="logo">Tiket Kereta Api</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="../index.html">Home</a></li>
            <li><a href="tempat_tujuan.php">Tempat Tujuan</a></li>
            <li><a href="pesan_tiket.php">Pesan Tiket</a></li>
            <li><a href="invoice.php">Invoice</a></li>
        </ul>
        <div class="user">
            <a href="#">
                <i class="bx bxs-user-account"></i> Halo!
            </a>
        </div>
    </nav>
    <br><br>
    <div class="container-lg mt-4">
        <div class="card">
            <div class="row ms-5 me-0">
                <h3 class="mb-4 mt-3 text-center">Invoice Pemesanan Tiket</h3>
                <label for="nama" class="col-sm-6 col-form-label">Nama Lengkap</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['nama']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Nomer Identitas</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['nomer_identitas']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">No. HP</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['no_hp']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Tempat Destinasi</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['tempat_tujuan']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Tanggal Kunjungan</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $tanggal_berangkat->format('d-m-Y'); ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Jumlah Pengunjung Dewasa</label>
                <div class="col-md-6 mt-2">
                <p>: <?= $query['pengunjung_dewasa']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Jumlah Pengunjung Anak-Anak</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['pengunjung_anakanak']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Harga Tiket</label>
                <div class="col-md-6 mt-2">
                    <p>: Rp. <?= $query['harga_tiket']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Total Harga</label>
                <div class="col-md-6 mt-2">
                    <p>: Rp. <?= $query['total_bayar']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <br>
    
    <!-- CDN Javascript Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container-lg mt-4">
        <p><center><h4>RIWAYAT PEMESANAN</h4><center></p>
<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'db_tiket_kereta'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT nama, nomer_identitas, no_hp, tempat_tujuan, tanggal_kunjungan, pengunjung_dewasa, pengunjung_anakanak, harga_tiket, total_bayar 
		FROM tb_pemesanan_tiket';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table>
		<thead>
			<tr>
				<th>Nama Lengkap</th>
				<th>Nomor Identitas</th>
				<th>No. HP</th>
				<th>Tempat Tujuan</th>
                <th>Tanggal Kunjungan</th>
                <th>Jumlah Pengunjung Dewasa</th>
                <th>Jumlah Pengunjung Anak-Anak</th>
                <th>Harga Tiket</th>
                <th>Total Harga</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['nama'].'</td>
			<td>'.$row['nomer_identitas'].'</td>
            <td>'.$row['no_hp'].'</td>
            <td>'.$row['tempat_tujuan'].'</td>
            <td>'.$row['tanggal_kunjungan'].'</td>
            <td>'.$row['pengunjung_dewasa'].'</td>
            <td>'.$row['pengunjung_anakanak'].'</td>
            <td>'.number_format($row['harga_tiket'], 0, ',', '.').'</td>
            <td>'.number_format($row['total_bayar'], 0, ',', '.').'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII 
//<td>'.number_format($row['harga'], 0, ',', '.').'</td>
//<td class="right">'.$row['kuantitas'].'</td>
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
?>
</body>
</html>