class Kendaraan {

    private String jenisBahanBakar;
    private int kapasitasPenumpang;
    private int tahunProduksi;
    private String statusMesin;

    public Kendaraan() {
    }

    // konstruktor dengan parameter
    public Kendaraan(String jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, String statusMesin) {
        this.jenisBahanBakar = jenisBahanBakar;
        this.kapasitasPenumpang = kapasitasPenumpang;
        this.tahunProduksi = tahunProduksi;
        this.statusMesin = statusMesin;
    }

    // getter setter
    public String getJenisBahanBakar() {
        return jenisBahanBakar;
    }

    public void setJenisBahanBakar(String jenisBahanBakar) {
        this.jenisBahanBakar = jenisBahanBakar;
    }

    public int getKapasitasPenumpang() {
        return kapasitasPenumpang;
    }

    public void setKapasitasPenumpang(int kapasitasPenumpang) {
        this.kapasitasPenumpang = kapasitasPenumpang;
    }

    public int getTahunProduksi() {
        return tahunProduksi;
    }

    public void setTahunProduksi(int tahunProduksi) {
        this.tahunProduksi = tahunProduksi;
    }

    public String getStatusMesin() {
        return statusMesin;
    }

    public void setStatusMesin(String statusMesin) {
        this.statusMesin = statusMesin;
    }
}