#include <iostream>
#include "Kendaraan.cpp"
using namespace std;

class Pesawat : public Kendaraan {
public:
    string maskapaiPemilik;
    int ketinggianMaksimalKaki;
    string rutePenerbangan;
    int jumlahMesin;

    Pesawat(string jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, string statusMesin,
            string maskapaiPemilik, int ketinggianMaksimalKaki, string rutePenerbangan, int jumlahMesin)
        : Kendaraan(jenisBahanBakar, kapasitasPenumpang, tahunProduksi, statusMesin),
        maskapaiPemilik(maskapaiPemilik), ketinggianMaksimalKaki(ketinggianMaksimalKaki),
        rutePenerbangan(rutePenerbangan), jumlahMesin(jumlahMesin) {}
};