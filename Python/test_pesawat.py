"""
Testcase untuk pesawat.py
Jalankan: python3 test_pesawat.py
"""

from Kendaraan import Kendaraan
from Pesawat import Pesawat
from Boeing737 import Boeing737

total_tes = 0
lolos = 0


def cek_sama(label, kondisi):
    global total_tes, lolos
    total_tes += 1
    if kondisi:
        lolos += 1
        print(f"[PASS] {label}")
    else:
        print(f"[FAIL] {label}")


def main():
    print("=== TESTCASE PYTHON ===\n")

    # Test 1: Konstruktor default
    b1 = Boeing737()
    cek_sama("Konstruktor default tidak error", b1 is not None)

    # Test 2: Konstruktor dengan parameter (test getter dari semua level warisan)
    b2 = Boeing737("Avtur", 189, 2018, "Mati", "Garuda Indonesia", 41000, "Jakarta - Bali", 2,
                    "800 NG", 35.79, 18000.0, "CFM56-7B")

    cek_sama("get_jenis_bahan_bakar()", b2.get_jenis_bahan_bakar() == "Avtur")
    cek_sama("get_kapasitas_penumpang()", b2.get_kapasitas_penumpang() == 189)
    cek_sama("get_tahun_produksi()", b2.get_tahun_produksi() == 2018)
    cek_sama("get_status_mesin()", b2.get_status_mesin() == "Mati")
    cek_sama("get_maskapai_pemilik()", b2.get_maskapai_pemilik() == "Garuda Indonesia")
    cek_sama("get_ketinggian_maksimal_kaki()", b2.get_ketinggian_maksimal_kaki() == 41000)
    cek_sama("get_rute_penerbangan()", b2.get_rute_penerbangan() == "Jakarta - Bali")
    cek_sama("get_jumlah_mesin()", b2.get_jumlah_mesin() == 2)
    cek_sama("get_varian_seri()", b2.get_varian_seri() == "800 NG")
    cek_sama("get_rentang_sayap_meter()", b2.get_rentang_sayap_meter() == 35.79)
    cek_sama("get_kapasitas_kargo_kg()", b2.get_kapasitas_kargo_kg() == 18000.0)
    cek_sama("get_tipe_mesin_turbofan()", b2.get_tipe_mesin_turbofan() == "CFM56-7B")

    # Test 3: Setter mengubah nilai dengan benar
    b2.set_status_mesin("Menyala")
    cek_sama("set_status_mesin() mengubah nilai", b2.get_status_mesin() == "Menyala")

    b2.set_kapasitas_penumpang(200)
    cek_sama("set_kapasitas_penumpang() mengubah nilai", b2.get_kapasitas_penumpang() == 200)

    b2.set_varian_seri("MAX 8")
    cek_sama("set_varian_seri() mengubah nilai", b2.get_varian_seri() == "MAX 8")

    # Test 4: Private attribute benar-benar tidak bisa diakses langsung (name mangling)
    try:
        _ = b2.__varian_seri
        akses_langsung_gagal = False
    except AttributeError:
        akses_langsung_gagal = True
    cek_sama("Attribute private tidak bisa diakses langsung dari luar", akses_langsung_gagal)

    print(f"\nHasil: {lolos}/{total_tes} test lolos")


if __name__ == "__main__":
    main()
