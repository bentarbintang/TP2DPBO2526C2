class Pesawat extends Kendaraan {

    private String maskapaiPemilik;
    private int ketinggianMaksimalKaki;
    private String rutePenerbangan;
    private int jumlahMesin;

    public Pesawat() {
        super();
    }

    // konstruktor dengan parameter
    public Pesawat(String jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, String statusMesin,
                    String maskapaiPemilik, int ketinggianMaksimalKaki, String rutePenerbangan, int jumlahMesin) {
        super(jenisBahanBakar, kapasitasPenumpang, tahunProduksi, statusMesin);
        this.maskapaiPemilik = maskapaiPemilik;
        this.ketinggianMaksimalKaki = ketinggianMaksimalKaki;
        this.rutePenerbangan = rutePenerbangan;
        this.jumlahMesin = jumlahMesin;
    }

    // getter setter
    public String getMaskapaiPemilik() {
        return maskapaiPemilik;
    }

    public void setMaskapaiPemilik(String maskapaiPemilik) {
        this.maskapaiPemilik = maskapaiPemilik;
    }

    public int getKetinggianMaksimalKaki() {
        return ketinggianMaksimalKaki;
    }

    public void setKetinggianMaksimalKaki(int ketinggianMaksimalKaki) {
        this.ketinggianMaksimalKaki = ketinggianMaksimalKaki;
    }

    public String getRutePenerbangan() {
        return rutePenerbangan;
    }

    public void setRutePenerbangan(String rutePenerbangan) {
        this.rutePenerbangan = rutePenerbangan;
    }

    public int getJumlahMesin() {
        return jumlahMesin;
    }

    public void setJumlahMesin(int jumlahMesin) {
        this.jumlahMesin = jumlahMesin;
    }
}