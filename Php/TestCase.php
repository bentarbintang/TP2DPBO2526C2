<?php
require_once 'Boeing737.php';

$totalTes = 0;
$lolos = 0;

function cekSama($label, $kondisi) {
    global $totalTes, $lolos;
    $totalTes++;
    if ($kondisi) {
        $lolos++;
        echo "[PASS] $label\n";
    } else {
        echo "[FAIL] $label\n";
    }
}

echo "=== TESTCASE PHP ===\n\n";

// Test 1: Konstruktor default
$b1 = new Boeing737();
cekSama("Konstruktor default tidak error", $b1 !== null);

// Test 2: Konstruktor dengan parameter (test getter dari semua level warisan)
$b2 = new Boeing737("Avtur", 189, 2018, "Mati", "Garuda Indonesia", 41000, "Jakarta - Bali", 2,
                     "800 NG", 35.79, 18000.0, "CFM56-7B");

cekSama("getJenisBahanBakar()", $b2->getJenisBahanBakar() === "Avtur");
cekSama("getKapasitasPenumpang()", $b2->getKapasitasPenumpang() === 189);
cekSama("getTahunProduksi()", $b2->getTahunProduksi() === 2018);
cekSama("getStatusMesin()", $b2->getStatusMesin() === "Mati");
cekSama("getMaskapaiPemilik()", $b2->getMaskapaiPemilik() === "Garuda Indonesia");
cekSama("getKetinggianMaksimalKaki()", $b2->getKetinggianMaksimalKaki() === 41000);
cekSama("getRutePenerbangan()", $b2->getRutePenerbangan() === "Jakarta - Bali");
cekSama("getJumlahMesin()", $b2->getJumlahMesin() === 2);
cekSama("getVarianSeri()", $b2->getVarianSeri() === "800 NG");
cekSama("getRentangSayapMeter()", $b2->getRentangSayapMeter() === 35.79);
cekSama("getKapasitasKargoKg()", $b2->getKapasitasKargoKg() === 18000.0);
cekSama("getTipeMesinTurbofan()", $b2->getTipeMesinTurbofan() === "CFM56-7B");
cekSama("getFotoProduk() default", $b2->getFotoProduk() === "default.png");

// Test 3: Setter mengubah nilai dengan benar
$b2->setStatusMesin("Menyala");
cekSama("setStatusMesin() mengubah nilai", $b2->getStatusMesin() === "Menyala");

$b2->setKapasitasPenumpang(200);
cekSama("setKapasitasPenumpang() mengubah nilai", $b2->getKapasitasPenumpang() === 200);

$b2->setVarianSeri("MAX 8");
cekSama("setVarianSeri() mengubah nilai", $b2->getVarianSeri() === "MAX 8");

$b2->setFotoProduk("boeing_max8.jpg");
cekSama("setFotoProduk() mengubah nilai", $b2->getFotoProduk() === "boeing_max8.jpg");

// Test 4: Property private tidak bisa diakses langsung dari luar class
try {
    $refleksi = new ReflectionClass($b2);
    $aksesLangsungGagal = $refleksi->getProperty("varianSeri")->isPrivate();
} catch (Throwable $e) {
    $aksesLangsungGagal = false;
}
cekSama("Property private tidak bisa diakses langsung dari luar", $aksesLangsungGagal);

echo "\nHasil: $lolos/$totalTes test lolos\n";
