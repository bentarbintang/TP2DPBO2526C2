<?php
require_once 'Boeing737.php'; // otomatis ikut Pesawat.php & Kendaraan.php
session_start();

// ===== "Database" sederhana pakai session =====
if (!isset($_SESSION['databasePesawat'])) {
    $_SESSION['databasePesawat'] = [];

    $dummy = [
        new Boeing737("Avtur", 189, 2018, "Mati", "Garuda Indonesia", 41000, "Jakarta - Bali", 2, "800 NG", 35.79, 18000.0, "CFM56-7B", "garuda.jpg"),
        new Boeing737("Avtur", 215, 2021, "Menyala", "Lion Air", 41000, "Surabaya - Medan", 2, "900 ER", 35.79, 22000.0, "CFM56-7B", "lionair.jpg"),
        new Boeing737("Avtur", 189, 2015, "Mati", "Citilink", 41000, "Bandung - Makassar", 2, "800 NG", 35.79, 18000.0, "CFM56-7B", "citilink.jpg"),
        new Boeing737("Avtur", 210, 2023, "Menyala", "Batik Air", 41000, "Jakarta - Singapura", 2, "MAX 8", 35.92, 20000.0, "LEAP-1B", "batikair.jpg"),
        new Boeing737("Avtur", 149, 2010, "Mati", "Sriwijaya Air", 41000, "Jakarta - Pontianak", 2, "500 Classic", 28.88, 15000.0, "CFM56-3C1", "sriwijaya.jpg"),
    ];

    foreach ($dummy as $d) {
        $_SESSION['databasePesawat'][] = $d;
    }
}

$pesan = "";

// Fitur: Tambah Data Pesawat Baru (via form POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aksi']) && $_POST['aksi'] === 'tambah') {
    $maskapai  = htmlspecialchars($_POST['maskapai']);
    $rute      = htmlspecialchars($_POST['rute']);
    $seri      = htmlspecialchars($_POST['seri']);
    $tahun     = (int) $_POST['tahun'];
    $penumpang = (int) $_POST['penumpang'];
    $status    = htmlspecialchars($_POST['status']);

    // Upload foto_produk
    $namaFotoProduk = 'default.png';
    if (isset($_FILES['foto_produk']) && $_FILES['foto_produk']['error'] === UPLOAD_ERR_OK) {
        $folderUpload = __DIR__ . '/uploads/';
        if (!is_dir($folderUpload)) {
            mkdir($folderUpload, 0777, true);
        }
        $ekstensi = pathinfo($_FILES['foto_produk']['name'], PATHINFO_EXTENSION);
        $namaFotoProduk = 'pesawat_' . time() . '.' . $ekstensi;
        move_uploaded_file($_FILES['foto_produk']['tmp_name'], $folderUpload . $namaFotoProduk);
    }

    $pesawatBaru = new Boeing737(
        "Avtur", $penumpang, $tahun, $status,
        $maskapai, 41000, $rute, 2,
        $seri, 35.79, 18000.0, "CFM56-7B",
        $namaFotoProduk
    );

    $_SESSION['databasePesawat'][] = $pesawatBaru;
    $pesan = "✅ Data pesawat berhasil ditambahkan!";
}

$databasePesawat = $_SESSION['databasePesawat'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sistem Manajemen Pesawat</title>
<style>
    body { font-family: Arial, sans-serif; margin: 30px; background: #f4f6f8; }
    h1 { color: #1b3a57; }
    table { border-collapse: collapse; width: 100%; background: #fff; margin-bottom: 30px; }
    th, td { border: 1px solid #ccc; padding: 8px 10px; text-align: left; font-size: 14px; }
    th { background: #1b3a57; color: #fff; }
    img.foto { width: 70px; height: 50px; object-fit: cover; border-radius: 4px; }
    form { background: #fff; padding: 20px; border-radius: 6px; max-width: 500px; }
    form label { display: block; margin-top: 10px; font-weight: bold; }
    form input { width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box; }
    form button { margin-top: 15px; padding: 8px 16px; background: #1b3a57; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
    .pesan { color: green; font-weight: bold; }
</style>
</head>
<body>

<h1>✈️ Sistem Manajemen Pesawat</h1>

<?php if ($pesan): ?>
    <p class="pesan"><?= $pesan ?></p>
<?php endif; ?>

<h2>Tabel Data Pesawat</h2>
<table>
    <tr>
        <th>No</th>
        <th>Foto Produk</th>
        <th>Maskapai</th>
        <th>Rute</th>
        <th>Seri Boeing</th>
        <th>Tahun</th>
        <th>Penumpang</th>
        <th>Status Mesin</th>
    </tr>
    <?php foreach ($databasePesawat as $i => $p): ?>
    <tr>
        <td><?= $i + 1 ?></td>
        <td>
            <?php
                $pathFoto = __DIR__ . '/uploads/' . $p->getFotoProduk();
                $srcFoto = file_exists($pathFoto) ? 'uploads/' . $p->getFotoProduk() : 'https://via.placeholder.com/70x50?text=No+Img';
            ?>
            <img class="foto" src="<?= htmlspecialchars($srcFoto) ?>" alt="<?= htmlspecialchars($p->getFotoProduk()) ?>">
        </td>
        <td><?= htmlspecialchars($p->getMaskapaiPemilik()) ?></td>
        <td><?= htmlspecialchars($p->getRutePenerbangan()) ?></td>
        <td><?= htmlspecialchars($p->getVarianSeri()) ?></td>
        <td><?= htmlspecialchars($p->getTahunProduksi()) ?></td>
        <td><?= htmlspecialchars($p->getKapasitasPenumpang()) ?></td>
        <td><?= htmlspecialchars($p->getStatusMesin()) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<p>Total Data: <?= count($databasePesawat) ?> Pesawat</p>

<h2>Tambah Data Pesawat Baru</h2>
<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="aksi" value="tambah">

    <label>Nama Maskapai</label>
    <input type="text" name="maskapai" required>

    <label>Rute</label>
    <input type="text" name="rute" required>

    <label>Seri Boeing</label>
    <input type="text" name="seri" required>

    <label>Tahun Produksi</label>
    <input type="number" name="tahun" required>

    <label>Kapasitas Penumpang</label>
    <input type="number" name="penumpang" required>

    <label>Status Mesin</label>
    <input type="text" name="status" required>

    <label>Foto Produk</label>
    <input type="file" name="foto_produk" accept="image/*">

    <button type="submit">Tambah Data</button>
</form>

</body>
</html>