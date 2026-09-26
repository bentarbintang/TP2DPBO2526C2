class Kendaraan:

    def __init__(self, jenis_bahan_bakar=None, kapasitas_penumpang=None,
                tahun_produksi=None, status_mesin=None):
        self.__jenis_bahan_bakar = jenis_bahan_bakar
        self.__kapasitas_penumpang = kapasitas_penumpang
        self.__tahun_produksi = tahun_produksi
        self.__status_mesin = status_mesin

    # getter setter
    def get_jenis_bahan_bakar(self):
        return self.__jenis_bahan_bakar

    def set_jenis_bahan_bakar(self, jenis_bahan_bakar):
        self.__jenis_bahan_bakar = jenis_bahan_bakar

    def get_kapasitas_penumpang(self):
        return self.__kapasitas_penumpang

    def set_kapasitas_penumpang(self, kapasitas_penumpang):
        self.__kapasitas_penumpang = kapasitas_penumpang

    def get_tahun_produksi(self):
        return self.__tahun_produksi

    def set_tahun_produksi(self, tahun_produksi):
        self.__tahun_produksi = tahun_produksi

    def get_status_mesin(self):
        return self.__status_mesin

    def set_status_mesin(self, status_mesin):
        self.__status_mesin = status_mesin