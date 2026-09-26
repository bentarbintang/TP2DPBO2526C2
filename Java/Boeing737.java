class Boeing737 extends Pesawat {

    private String varianSeri;
    private double rentangSayapMeter;
    private double kapasitasKargoKg;
    private String tipeMesinTurbofan;

    public Boeing737() {
        super();
    }

    // konstruktor dengan parameter
    public Boeing737(String jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, String statusMesin,
                      String maskapaiPemilik, int ketinggianMaksimalKaki, String rutePenerbangan, int jumlahMesin,
                      String varianSeri, double rentangSayapMeter, double kapasitasKargoKg, String tipeMesinTurbofan) {
        super(jenisBahanBakar, kapasitasPenumpang, tahunProduksi, statusMesin,
              maskapaiPemilik, ketinggianMaksimalKaki, rutePenerbangan, jumlahMesin);
        this.varianSeri = varianSeri;
        this.rentangSayapMeter = rentangSayapMeter;
        this.kapasitasKargoKg = kapasitasKargoKg;
        this.tipeMesinTurbofan = tipeMesinTurbofan;
    }

    // getter setter
    public String getVarianSeri() {
        return varianSeri;
    }

    public void setVarianSeri(String varianSeri) {
        this.varianSeri = varianSeri;
    }

    public double getRentangSayapMeter() {
        return rentangSayapMeter;
    }

    public void setRentangSayapMeter(double rentangSayapMeter) {
        this.rentangSayapMeter = rentangSayapMeter;
    }

    public double getKapasitasKargoKg() {
        return kapasitasKargoKg;
    }

    public void setKapasitasKargoKg(double kapasitasKargoKg) {
        this.kapasitasKargoKg = kapasitasKargoKg;
    }

    public String getTipeMesinTurbofan() {
        return tipeMesinTurbofan;
    }

    public void setTipeMesinTurbofan(String tipeMesinTurbofan) {
        this.tipeMesinTurbofan = tipeMesinTurbofan;
    }
}