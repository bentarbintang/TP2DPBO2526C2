from Pesawat import Pesawat

class Boeing737(Pesawat):

    def __init__(self, jenis_bahan_bakar=None, kapasitas_penumpang=None,
                tahun_produksi=None, status_mesin=None,
                maskapai_pemilik=None, ketinggian_maksimal_kaki=None,
                rute_penerbangan=None, jumlah_mesin=None,
                varian_seri=None, rentang_sayap_meter=None,
                kapasitas_kargo_kg=None, tipe_mesin_turbofan=None):
        super().__init__(jenis_bahan_bakar, kapasitas_penumpang, tahun_produksi, status_mesin,
                        maskapai_pemilik, ketinggian_maksimal_kaki, rute_penerbangan, jumlah_mesin)
        self.__varian_seri = varian_seri
        self.__rentang_sayap_meter = rentang_sayap_meter
        self.__kapasitas_kargo_kg = kapasitas_kargo_kg
        self.__tipe_mesin_turbofan = tipe_mesin_turbofan

    # getter setter
    def get_varian_seri(self):
        return self.__varian_seri

    def set_varian_seri(self, varian_seri):
        self.__varian_seri = varian_seri

    def get_rentang_sayap_meter(self):
        return self.__rentang_sayap_meter

    def set_rentang_sayap_meter(self, rentang_sayap_meter):
        self.__rentang_sayap_meter = rentang_sayap_meter

    def get_kapasitas_kargo_kg(self):
        return self.__kapasitas_kargo_kg

    def set_kapasitas_kargo_kg(self, kapasitas_kargo_kg):
        self.__kapasitas_kargo_kg = kapasitas_kargo_kg

    def get_tipe_mesin_turbofan(self):
        return self.__tipe_mesin_turbofan

    def set_tipe_mesin_turbofan(self, tipe_mesin_turbofan):
        self.__tipe_mesin_turbofan = tipe_mesin_turbofan