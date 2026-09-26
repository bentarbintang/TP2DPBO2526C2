#include <iostream>
#include <cassert>
#include "Boeing737.cpp"
using namespace std;

int totalTes = 0;
int lolos = 0;

void cekSama(string label, bool kondisi) {
    totalTes++;
    if (kondisi) {
        lolos++;
        cout << "[PASS] " << label << endl;
    } else {
        cout << "[FAIL] " << label << endl;
    }
}

int main() {
    cout << "=== TESTCASE C++ ===\n\n";

    // Test 1: Konstruktor default
    Boeing737 b1;
    cekSama("Konstruktor default tidak error", true);

    // Test 2: Konstruktor dengan parameter (test getter dari semua level warisan)
    Boeing737 b2("Avtur", 189, 2018, "Mati", "Garuda Indonesia", 41000, "Jakarta - Bali", 2,
                 "800 NG", 35.79, 18000.0, "CFM56-7B");

    cekSama("getJenisBahanBakar()", b2.getJenisBahanBakar() == "Avtur");
    cekSama("getKapasitasPenumpang()", b2.getKapasitasPenumpang() == 189);
    cekSama("getTahunProduksi()", b2.getTahunProduksi() == 2018);
    cekSama("getStatusMesin()", b2.getStatusMesin() == "Mati");
    cekSama("getMaskapaiPemilik()", b2.getMaskapaiPemilik() == "Garuda Indonesia");
    cekSama("getKetinggianMaksimalKaki()", b2.getKetinggianMaksimalKaki() == 41000);
    cekSama("getRutePenerbangan()", b2.getRutePenerbangan() == "Jakarta - Bali");
    cekSama("getJumlahMesin()", b2.getJumlahMesin() == 2);
    cekSama("getVarianSeri()", b2.getVarianSeri() == "800 NG");
    cekSama("getRentangSayapMeter()", b2.getRentangSayapMeter() == 35.79);
    cekSama("getKapasitasKargoKg()", b2.getKapasitasKargoKg() == 18000.0);
    cekSama("getTipeMesinTurbofan()", b2.getTipeMesinTurbofan() == "CFM56-7B");

    // Test 3: Setter mengubah nilai dengan benar
    b2.setStatusMesin("Menyala");
    cekSama("setStatusMesin() mengubah nilai", b2.getStatusMesin() == "Menyala");

    b2.setKapasitasPenumpang(200);
    cekSama("setKapasitasPenumpang() mengubah nilai", b2.getKapasitasPenumpang() == 200);

    b2.setVarianSeri("MAX 8");
    cekSama("setVarianSeri() mengubah nilai", b2.getVarianSeri() == "MAX 8");

    cout << "\nHasil: " << lolos << "/" << totalTes << " test lolos\n";
    return 0;
}
