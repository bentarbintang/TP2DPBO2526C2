#include <iostream>
#include <string>
#include <vector>
#include <iomanip>
#include <sstream>
#include <limits>

#include "Boeing737.cpp"

using namespace std;


vector<Boeing737> databasePesawat;

void buatDataDummy() {
    databasePesawat.push_back(Boeing737("Avtur", 189, 2018, "Mati", "Garuda Indonesia", 41000, "Jakarta - Bali", 2, "800 NG", 35.79, 18000.0, "CFM56-7B"));
    databasePesawat.push_back(Boeing737("Avtur", 215, 2021, "Menyala", "Lion Air", 41000, "Surabaya - Medan", 2, "900 ER", 35.79, 22000.0, "CFM56-7B"));
    databasePesawat.push_back(Boeing737("Avtur", 189, 2015, "Mati", "Citilink", 41000, "Bandung - Makassar", 2, "800 NG", 35.79, 18000.0, "CFM56-7B"));
    databasePesawat.push_back(Boeing737("Avtur", 210, 2023, "Menyala", "Batik Air", 41000, "Jakarta - Singapura", 2, "MAX 8", 35.92, 20000.0, "LEAP-1B"));
    databasePesawat.push_back(Boeing737("Avtur", 149, 2010, "Mati", "Sriwijaya Air", 41000, "Jakarta - Pontianak", 2, "500 Classic", 28.88, 15000.0, "CFM56-3C1"));
}

void tampilkanTabel() {
    cout << "\n----------------------------------------------------------------------------------------------------------\n";
    cout << "| " << left << setw(3) << "No" << " | " << setw(16) << "Maskapai" << " | " << setw(20) << "Rute"
        << " | " << setw(12) << "Seri Boeing" << " | " << setw(6) << "Tahun" << " | " << setw(9) << "Penumpang"
        << " | " << setw(12) << "Status Mesin" << " |\n";
    cout << "----------------------------------------------------------------------------------------------------------\n";

    for (size_t i = 0; i < databasePesawat.size(); i++) {
        Boeing737 &p = databasePesawat[i];
        cout << "| " << left << setw(3) << (i + 1) << " | " << setw(16) << p.maskapaiPemilik << " | "
            << setw(20) << p.rutePenerbangan << " | " << setw(12) << p.varianSeri << " | "
            << setw(6) << p.tahunProduksi << " | " << setw(9) << p.kapasitasPenumpang << " | "
            << setw(12) << p.statusMesin << " |\n";
    }
    cout << "----------------------------------------------------------------------------------------------------------\n";
    cout << "Total Data: " << databasePesawat.size() << " Pesawat\n\n";
}

void tambahData() {
    // cin.ignore(numeric_limits<streamsize>::max(), '\n');
    string maskapai, rute, seri, status;
    int tahun, penumpang;

    cout << "\n--- TAMBAH DATA PESAWAT ---\n";
    cout << "Masukkan Nama Maskapai : ";
    getline(cin, maskapai);

    cout << "Masukkan Rute          : ";
    getline(cin, rute);

    cout << "Masukkan Seri Boeing   : ";
    getline(cin, seri);

    cout << "Tahun Produksi         : ";
    cin >> tahun;

    cout << "Kapasitas Penumpang    : ";
    cin >> penumpang;
    cin.ignore(numeric_limits<streamsize>::max(), '\n');

    cout << "Status Mesin           : ";
    getline(cin, status);

    Boeing737 pesawatBaru("Avtur", penumpang, tahun, status,
                        maskapai, 41000, rute, 2,
                        seri, 35.79, 18000.0, "CFM56-7B");

    databasePesawat.push_back(pesawatBaru);
    cout << "Data pesawat berhasil ditambahkan!\n\n";
}

int main() {
    buatDataDummy();

    bool berjalan = true;
    while (berjalan) {
        cout << "\n=== SISTEM MANAJEMEN PESAWAT ===\n";
        cout << "1. Tampilkan Tabel Data Pesawat\n";
        cout << "2. Tambah Data Pesawat Baru\n";
        cout << "3. Keluar\n";
        cout << "Pilih menu (1-3): ";

        string pilihan;
        getline(cin, pilihan);

        if (pilihan == "1") {
            tampilkanTabel();
        } else if (pilihan == "2") {
            tambahData();
        } else if (pilihan == "3") {
            berjalan = false;
            cout << "Program selesai.\n";
        } else {
            cout << "Pilihan tidak valid!\n";
        }
    }

    return 0;
}