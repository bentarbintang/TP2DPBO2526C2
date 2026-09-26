<?php
require_once 'Kendaraan.php';

class Pesawat extends Kendaraan {

    private $maskapaiPemilik;
    private $ketinggianMaksimalKaki;
    private $rutePenerbangan;
    private $jumlahMesin;

    public function __construct($jenisBahanBakar = null, $kapasitasPenumpang = null, $tahunProduksi = null, $statusMesin = null,
                                 $maskapaiPemilik = null, $ketinggianMaksimalKaki = null, $rutePenerbangan = null, $jumlahMesin = null) {
        parent::__construct($jenisBahanBakar, $kapasitasPenumpang, $tahunProduksi, $statusMesin);
        $this->maskapaiPemilik = $maskapaiPemilik;
        $this->ketinggianMaksimalKaki = $ketinggianMaksimalKaki;
        $this->rutePenerbangan = $rutePenerbangan;
        $this->jumlahMesin = $jumlahMesin;
    }

    // getter setter
    public function getMaskapaiPemilik() {
        return $this->maskapaiPemilik;
    }

    public function setMaskapaiPemilik($maskapaiPemilik) {
        $this->maskapaiPemilik = $maskapaiPemilik;
    }

    public function getKetinggianMaksimalKaki() {
        return $this->ketinggianMaksimalKaki;
    }

    public function setKetinggianMaksimalKaki($ketinggianMaksimalKaki) {
        $this->ketinggianMaksimalKaki = $ketinggianMaksimalKaki;
    }

    public function getRutePenerbangan() {
        return $this->rutePenerbangan;
    }

    public function setRutePenerbangan($rutePenerbangan) {
        $this->rutePenerbangan = $rutePenerbangan;
    }

    public function getJumlahMesin() {
        return $this->jumlahMesin;
    }

    public function setJumlahMesin($jumlahMesin) {
        $this->jumlahMesin = $jumlahMesin;
    }
}