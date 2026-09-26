from Kendaraan import Kendaraan

class Pesawat(Kendaraan):

    def __init__(self, jenis_bahan_bakar=None, kapasitas_penumpang=None,
                tahun_produksi=None, status_mesin=None,
                maskapai_pemilik=None, ketinggian_maksimal_kaki=None,
                rute_penerbangan=None, jumlah_mesin=None):
        super().__init__(jenis_bahan_bakar, kapasitas_penumpang, tahun_produksi, status_mesin)
        self.__maskapai_pemilik = maskapai_pemilik
        self.__ketinggian_maksimal_kaki = ketinggian_maksimal_kaki
        self.__rute_penerbangan = rute_penerbangan
        self.__jumlah_mesin = jumlah_mesin

    # getter setter
    def get_maskapai_pemilik(self):
        return self.__maskapai_pemilik

    def set_maskapai_pemilik(self, maskapai_pemilik):
        self.__maskapai_pemilik = maskapai_pemilik

    def get_ketinggian_maksimal_kaki(self):
        return self.__ketinggian_maksimal_kaki

    def set_ketinggian_maksimal_kaki(self, ketinggian_maksimal_kaki):
        self.__ketinggian_maksimal_kaki = ketinggian_maksimal_kaki

    def get_rute_penerbangan(self):
        return self.__rute_penerbangan

    def set_rute_penerbangan(self, rute_penerbangan):
        self.__rute_penerbangan = rute_penerbangan

    def get_jumlah_mesin(self):
        return self.__jumlah_mesin

    def set_jumlah_mesin(self, jumlah_mesin):
        self.__jumlah_mesin = jumlah_mesin