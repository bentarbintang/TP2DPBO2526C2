from Boeing737 import Boeing737

database_pesawat = []

def buat_data_dummy():
    database_pesawat.append(Boeing737("Avtur", 189, 2018, "Mati", "Garuda Indonesia", 41000, "Jakarta - Bali", 2, "800 NG", 35.79, 18000.0, "CFM56-7B"))
    database_pesawat.append(Boeing737("Avtur", 215, 2021, "Menyala", "Lion Air", 41000, "Surabaya - Medan", 2, "900 ER", 35.79, 22000.0, "CFM56-7B"))
    database_pesawat.append(Boeing737("Avtur", 189, 2015, "Mati", "Citilink", 41000, "Bandung - Makassar", 2, "800 NG", 35.79, 18000.0, "CFM56-7B"))
    database_pesawat.append(Boeing737("Avtur", 210, 2023, "Menyala", "Batik Air", 41000, "Jakarta - Singapura", 2, "MAX 8", 35.92, 20000.0, "LEAP-1B"))
    database_pesawat.append(Boeing737("Avtur", 149, 2010, "Mati", "Sriwijaya Air", 41000, "Jakarta - Pontianak", 2, "500 Classic", 28.88, 15000.0, "CFM56-3C1"))


def tampilkan_tabel():
    print("\n----------------------------------------------------------------------------------------------------------")
    print("| {:<3} | {:<16} | {:<20} | {:<12} | {:<6} | {:<9} | {:<12} |".format(
        "No", "Maskapai", "Rute", "Seri Boeing", "Tahun", "Penumpang", "Status Mesin"))
    print("----------------------------------------------------------------------------------------------------------")

    for i, p in enumerate(database_pesawat):
        print("| {:<3} | {:<16} | {:<20} | {:<12} | {:<6} | {:<9} | {:<12} |".format(
            i + 1, p.get_maskapai_pemilik(), p.get_rute_penerbangan(), p.get_varian_seri(),
            p.get_tahun_produksi(), p.get_kapasitas_penumpang(), p.get_status_mesin()))

    print("----------------------------------------------------------------------------------------------------------")
    print(f"Total Data: {len(database_pesawat)} Pesawat\n")


def tambah_data():
    print("\n--- TAMBAH DATA PESAWAT ---")
    maskapai = input("Masukkan Nama Maskapai : ")
    rute = input("Masukkan Rute          : ")
    seri = input("Masukkan Seri Boeing   : ")
    tahun = int(input("Tahun Produksi         : "))
    penumpang = int(input("Kapasitas Penumpang    : "))
    status = input("Status Mesin           : ")

    pesawat_baru = Boeing737(
        "Avtur", penumpang, tahun, status,
        maskapai, 41000, rute, 2,
        seri, 35.79, 18000.0, "CFM56-7B"
    )

    database_pesawat.append(pesawat_baru)
    print("✅ Data pesawat berhasil ditambahkan!\n")

def main():
    buat_data_dummy()

    berjalan = True
    while berjalan:
        print("\n=== SISTEM MANAJEMEN PESAWAT ===")
        print("1. Tampilkan Tabel Data Pesawat")
        print("2. Tambah Data Pesawat Baru")
        print("3. Keluar")
        pilihan = input("Pilih menu (1-3): ")

        if pilihan == "1":
            tampilkan_tabel()
        elif pilihan == "2":
            tambah_data()
        elif pilihan == "3":
            berjalan = False
            print("Program selesai.")
        else:
            print("Pilihan tidak valid!")

if __name__ == "__main__":
    main()