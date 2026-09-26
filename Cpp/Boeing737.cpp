#include <iostream>
#include "Pesawat.cpp"
using namespace std;

class Boeing737 : public Pesawat {

    private:
        string varianSeri;
        double rentangSayapMeter;
        double kapasitasKargoKg;
        string tipeMesinTurbofan;

    public:
        Boeing737() {
        }

        // konstruktor dengan parameter
        Boeing737(string jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, string statusMesin,
                string maskapaiPemilik, int ketinggianMaksimalKaki, string rutePenerbangan, int jumlahMesin,
                string varianSeri, double rentangSayapMeter, double kapasitasKargoKg, string tipeMesinTurbofan)
            : Pesawat(jenisBahanBakar, kapasitasPenumpang, tahunProduksi, statusMesin,
                    maskapaiPemilik, ketinggianMaksimalKaki, rutePenerbangan, jumlahMesin) {
            this->varianSeri = varianSeri;
            this->rentangSayapMeter = rentangSayapMeter;
            this->kapasitasKargoKg = kapasitasKargoKg;
            this->tipeMesinTurbofan = tipeMesinTurbofan;
        }

        // getter setter
        string getVarianSeri() {
            return varianSeri;
        }

        void setVarianSeri(string varianSeri) {
            this->varianSeri = varianSeri;
        }

        double getRentangSayapMeter() {
            return rentangSayapMeter;
        }

        void setRentangSayapMeter(double rentangSayapMeter) {
            this->rentangSayapMeter = rentangSayapMeter;
        }

        double getKapasitasKargoKg() {
            return kapasitasKargoKg;
        }

        void setKapasitasKargoKg(double kapasitasKargoKg) {
            this->kapasitasKargoKg = kapasitasKargoKg;
        }

        string getTipeMesinTurbofan() {
            return tipeMesinTurbofan;
        }

        void setTipeMesinTurbofan(string tipeMesinTurbofan) {
            this->tipeMesinTurbofan = tipeMesinTurbofan;
        }
};