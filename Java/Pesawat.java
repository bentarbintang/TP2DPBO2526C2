class Pesawat extends Kendaraan {
    String maskapaiPemilik;
    int ketinggianMaksimalKaki;
    String rutePenerbangan;
    int jumlahMesin;

    public Pesawat(String jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, String statusMesin, String maskapaiPemilik, int ketinggianMaksimalKaki, String rutePenerbangan, int jumlahMesin) {
        super(jenisBahanBakar, kapasitasPenumpang, tahunProduksi, statusMesin);
        this.maskapaiPemilik = maskapaiPemilik;
        this.ketinggianMaksimalKaki = ketinggianMaksimalKaki;
        this.rutePenerbangan = rutePenerbangan;
        this.jumlahMesin = jumlahMesin;
    }
}