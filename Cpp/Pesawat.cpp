#include <iostream>
#include "Kendaraan.cpp"
using namespace std;

class Pesawat : public Kendaraan {

    private:
        string maskapaiPemilik;
        int ketinggianMaksimalKaki;
        string rutePenerbangan;
        int jumlahMesin;

    public:
        Pesawat() {
        }

        // konstruktor dengan parameter
        Pesawat(string jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, string statusMesin,
                string maskapaiPemilik, int ketinggianMaksimalKaki, string rutePenerbangan, int jumlahMesin)
            : Kendaraan(jenisBahanBakar, kapasitasPenumpang, tahunProduksi, statusMesin) {
            this->maskapaiPemilik = maskapaiPemilik;
            this->ketinggianMaksimalKaki = ketinggianMaksimalKaki;
            this->rutePenerbangan = rutePenerbangan;
            this->jumlahMesin = jumlahMesin;
        }

        // getter setter
        string getMaskapaiPemilik() {
            return maskapaiPemilik;
        }

        void setMaskapaiPemilik(string maskapaiPemilik) {
            this->maskapaiPemilik = maskapaiPemilik;
        }

        int getKetinggianMaksimalKaki() {
            return ketinggianMaksimalKaki;
        }

        void setKetinggianMaksimalKaki(int ketinggianMaksimalKaki) {
            this->ketinggianMaksimalKaki = ketinggianMaksimalKaki;
        }

        string getRutePenerbangan() {
            return rutePenerbangan;
        }

        void setRutePenerbangan(string rutePenerbangan) {
            this->rutePenerbangan = rutePenerbangan;
        }

        int getJumlahMesin() {
            return jumlahMesin;
        }

        void setJumlahMesin(int jumlahMesin) {
            this->jumlahMesin = jumlahMesin;
        }
};