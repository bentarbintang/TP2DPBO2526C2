<?php
require_once 'Pesawat.php';

class Boeing737 extends Pesawat {

    private $varianSeri;
    private $rentangSayapMeter;
    private $kapasitasKargoKg;
    private $tipeMesinTurbofan;
    private $fotoProduk; // ketentuan khusus: path/nama file foto pesawat

    public function __construct($jenisBahanBakar = null, $kapasitasPenumpang = null, $tahunProduksi = null, $statusMesin = null,
                                 $maskapaiPemilik = null, $ketinggianMaksimalKaki = null, $rutePenerbangan = null, $jumlahMesin = null,
                                 $varianSeri = null, $rentangSayapMeter = null, $kapasitasKargoKg = null, $tipeMesinTurbofan = null,
                                 $fotoProduk = 'default.png') {
        parent::__construct($jenisBahanBakar, $kapasitasPenumpang, $tahunProduksi, $statusMesin,
                             $maskapaiPemilik, $ketinggianMaksimalKaki, $rutePenerbangan, $jumlahMesin);
        $this->varianSeri = $varianSeri;
        $this->rentangSayapMeter = $rentangSayapMeter;
        $this->kapasitasKargoKg = $kapasitasKargoKg;
        $this->tipeMesinTurbofan = $tipeMesinTurbofan;
        $this->fotoProduk = $fotoProduk;
    }

    // getter setter
    public function getVarianSeri() {
        return $this->varianSeri;
    }

    public function setVarianSeri($varianSeri) {
        $this->varianSeri = $varianSeri;
    }

    public function getRentangSayapMeter() {
        return $this->rentangSayapMeter;
    }

    public function setRentangSayapMeter($rentangSayapMeter) {
        $this->rentangSayapMeter = $rentangSayapMeter;
    }

    public function getKapasitasKargoKg() {
        return $this->kapasitasKargoKg;
    }

    public function setKapasitasKargoKg($kapasitasKargoKg) {
        $this->kapasitasKargoKg = $kapasitasKargoKg;
    }

    public function getTipeMesinTurbofan() {
        return $this->tipeMesinTurbofan;
    }

    public function setTipeMesinTurbofan($tipeMesinTurbofan) {
        $this->tipeMesinTurbofan = $tipeMesinTurbofan;
    }

    public function getFotoProduk() {
        return $this->fotoProduk;
    }

    public function setFotoProduk($fotoProduk) {
        $this->fotoProduk = $fotoProduk;
    }
}