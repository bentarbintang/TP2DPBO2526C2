<?php

class Kendaraan {

    private $jenisBahanBakar;
    private $kapasitasPenumpang;
    private $tahunProduksi;
    private $statusMesin;

    public function __construct($jenisBahanBakar = null, $kapasitasPenumpang = null, $tahunProduksi = null, $statusMesin = null) {
        $this->jenisBahanBakar = $jenisBahanBakar;
        $this->kapasitasPenumpang = $kapasitasPenumpang;
        $this->tahunProduksi = $tahunProduksi;
        $this->statusMesin = $statusMesin;
    }

    // getter setter
    public function getJenisBahanBakar() {
        return $this->jenisBahanBakar;
    }

    public function setJenisBahanBakar($jenisBahanBakar) {
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    public function getKapasitasPenumpang() {
        return $this->kapasitasPenumpang;
    }

    public function setKapasitasPenumpang($kapasitasPenumpang) {
        $this->kapasitasPenumpang = $kapasitasPenumpang;
    }

    public function getTahunProduksi() {
        return $this->tahunProduksi;
    }

    public function setTahunProduksi($tahunProduksi) {
        $this->tahunProduksi = $tahunProduksi;
    }

    public function getStatusMesin() {
        return $this->statusMesin;
    }

    public function setStatusMesin($statusMesin) {
        $this->statusMesin = $statusMesin;
    }
}