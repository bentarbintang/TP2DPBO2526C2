// 3. Child Class
class Boeing737 extends Pesawat {
    String varianSeri;
    double rentangSayapMeter;
    double kapasitasKargoKg;
    String tipeMesinTurbofan;

    public Boeing737(String jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, String statusMesin,
                    String maskapaiPemilik, int ketinggianMaksimalKaki, String rutePenerbangan, int jumlahMesin,
                    String varianSeri, double rentangSayapMeter, double kapasitasKargoKg, String tipeMesinTurbofan) {
        super(jenisBahanBakar, kapasitasPenumpang, tahunProduksi, statusMesin,  maskapaiPemilik, ketinggianMaksimalKaki, rutePenerbangan, jumlahMesin);
        this.varianSeri = varianSeri;
        this.rentangSayapMeter = rentangSayapMeter;
        this.kapasitasKargoKg = kapasitasKargoKg;
        this.tipeMesinTurbofan = tipeMesinTurbofan;
    }
}