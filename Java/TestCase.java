public class TestCase {

    static int totalTes = 0;
    static int lolos = 0;

    static void cekSama(String label, boolean kondisi) {
        totalTes++;
        if (kondisi) {
            lolos++;
            System.out.println("[PASS] " + label);
        } else {
            System.out.println("[FAIL] " + label);
        }
    }

    public static void main(String[] args) {
        System.out.println("=== TESTCASE JAVA ===\n");

        // Test 1: Konstruktor default
        Boeing737 b1 = new Boeing737();
        cekSama("Konstruktor default tidak error", b1 != null);

        // Test 2: Konstruktor dengan parameter (test getter dari semua level warisan)
        Boeing737 b2 = new Boeing737("Avtur", 189, 2018, "Mati", "Garuda Indonesia", 41000, "Jakarta - Bali", 2,
                                      "800 NG", 35.79, 18000.0, "CFM56-7B");

        cekSama("getJenisBahanBakar()", b2.getJenisBahanBakar().equals("Avtur"));
        cekSama("getKapasitasPenumpang()", b2.getKapasitasPenumpang() == 189);
        cekSama("getTahunProduksi()", b2.getTahunProduksi() == 2018);
        cekSama("getStatusMesin()", b2.getStatusMesin().equals("Mati"));
        cekSama("getMaskapaiPemilik()", b2.getMaskapaiPemilik().equals("Garuda Indonesia"));
        cekSama("getKetinggianMaksimalKaki()", b2.getKetinggianMaksimalKaki() == 41000);
        cekSama("getRutePenerbangan()", b2.getRutePenerbangan().equals("Jakarta - Bali"));
        cekSama("getJumlahMesin()", b2.getJumlahMesin() == 2);
        cekSama("getVarianSeri()", b2.getVarianSeri().equals("800 NG"));
        cekSama("getRentangSayapMeter()", b2.getRentangSayapMeter() == 35.79);
        cekSama("getKapasitasKargoKg()", b2.getKapasitasKargoKg() == 18000.0);
        cekSama("getTipeMesinTurbofan()", b2.getTipeMesinTurbofan().equals("CFM56-7B"));

        // Test 3: Setter mengubah nilai dengan benar
        b2.setStatusMesin("Menyala");
        cekSama("setStatusMesin() mengubah nilai", b2.getStatusMesin().equals("Menyala"));

        b2.setKapasitasPenumpang(200);
        cekSama("setKapasitasPenumpang() mengubah nilai", b2.getKapasitasPenumpang() == 200);

        b2.setVarianSeri("MAX 8");
        cekSama("setVarianSeri() mengubah nilai", b2.getVarianSeri().equals("MAX 8"));

        System.out.println("\nHasil: " + lolos + "/" + totalTes + " test lolos");
    }
}
