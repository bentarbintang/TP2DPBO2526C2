#include <iostream>
#include "Pesawat.cpp"
using namespace std;

class Boeing737 : public Pesawat {
public:
    string varianSeri;
    double rentangSayapMeter;
    double kapasitasKargoKg;
    string tipeMesinTurbofan;

    Boeing737(string jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, string statusMesin,
            string maskapaiPemilik, int ketinggianMaksimalKaki, string rutePenerbangan, int jumlahMesin,
            string varianSeri, double rentangSayapMeter, double kapasitasKargoKg, string tipeMesinTurbofan) 
            : Pesawat(jenisBahanBakar, kapasitasPenumpang, tahunProduksi, statusMesin, maskapaiPemilik, ketinggianMaksimalKaki, rutePenerbangan, jumlahMesin), 
            varianSeri(varianSeri), rentangSayapMeter(rentangSayapMeter), kapasitasKargoKg(kapasitasKargoKg), tipeMesinTurbofan(tipeMesinTurbofan) {}
};