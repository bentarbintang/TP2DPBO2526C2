// 1. Base Class
class Kendaraan {
    String jenisBahanBakar;
    int kapasitasPenumpang;
    int tahunProduksi;
    String statusMesin;

    public Kendaraan(String jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, String statusMesin) {
        this.jenisBahanBakar = jenisBahanBakar;
        this.kapasitasPenumpang = kapasitasPenumpang;
        this.tahunProduksi = tahunProduksi;
        this.statusMesin = statusMesin;
    }
}