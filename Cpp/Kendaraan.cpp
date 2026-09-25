#include <iostream>
using namespace std;

class Kendaraan {

    private : 
        string jenisBahanBakar;
        int kapasitasPenumpang;
        int tahunProduksi;
        string statusMesin;

    public :
        Kendaraan(){
        }

        //konstruktor dengan parameter
        Kendaraan(string jenisBahanBakar, int kapasitasPenumpang, int tahunProduksi, string statusMesin){
            this->jenisBahanBakar = jenisBahanBakar;
            this->kapasitasPenumpang = kapasitasPenumpang;
            this->tahunProduksi = tahunProduksi;
            this->statusMesin = statusMesin;
        }

        //getter setter
        string getJenisBahanBakar() {
            return jenisBahanBakar;
        }

        void setJenisBahanBakar(string jenisBahanBakar) {
            this->jenisBahanBakar = jenisBahanBakar;
        }

        int getKapasitasPenumpang() {
            return kapasitasPenumpang;
        }

        void setKapasitasPenumpang(int kapasitasPenumpang) {
            this->kapasitasPenumpang = kapasitasPenumpang;
        }

        int getTahunProduksi() {
            return tahunProduksi;
        }

        void setTahunProduksi(int tahunProduksi) {
            this->tahunProduksi = tahunProduksi;
        }

        string getStatusMesin() {
            return statusMesin;
        }

        void setStatusMesin(string statusMesin) {
            this->statusMesin = statusMesin;
        }
};