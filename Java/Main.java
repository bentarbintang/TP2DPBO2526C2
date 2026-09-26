import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    static ArrayList<Boeing737> databasePesawat = new ArrayList<>();
    static Scanner input = new Scanner(System.in);

    public static void main(String[] args) {
        buatDataDummy();

        boolean berjalan = true;
        while (berjalan) {
            System.out.println("\n=== SISTEM MANAJEMEN PESAWAT ===");
            System.out.println("1. Tampilkan Tabel Data Pesawat");
            System.out.println("2. Tambah Data Pesawat Baru");
            System.out.println("3. Keluar");
            System.out.print("Pilih menu (1-3): ");

            String pilihan = input.nextLine();

            switch (pilihan) {
                case "1":
                    tampilkanTabel();
                    break;
                case "2":
                    tambahData();
                    break;
                case "3":
                    berjalan = false;
                    System.out.println("Program selesai.");
                    break;
                default:
                    System.out.println("Pilihan tidak valid!");
            }
        }
    }

    static void buatDataDummy() {
        databasePesawat.add(new Boeing737("Avtur", 189, 2018, "Mati", "Garuda Indonesia", 41000, "Jakarta - Bali", 2, "800 NG", 35.79, 18000.0, "CFM56-7B"));
        databasePesawat.add(new Boeing737("Avtur", 215, 2021, "Menyala", "Lion Air", 41000, "Surabaya - Medan", 2, "900 ER", 35.79, 22000.0, "CFM56-7B"));
        databasePesawat.add(new Boeing737("Avtur", 189, 2015, "Mati", "Citilink", 41000, "Bandung - Makassar", 2, "800 NG", 35.79, 18000.0, "CFM56-7B"));
        databasePesawat.add(new Boeing737("Avtur", 210, 2023, "Menyala", "Batik Air", 41000, "Jakarta - Singapura", 2, "MAX 8", 35.92, 20000.0, "LEAP-1B"));
        databasePesawat.add(new Boeing737("Avtur", 149, 2010, "Mati", "Sriwijaya Air", 41000, "Jakarta - Pontianak", 2, "500 Classic", 28.88, 15000.0, "CFM56-3C1"));
    }

    static void tampilkanTabel() {
        System.out.println("\n----------------------------------------------------------------------------------------------------------");
        System.out.printf("| %-3s | %-16s | %-20s | %-12s | %-6s | %-9s | %-12s |%n",
                        "No", "Maskapai", "Rute", "Seri Boeing", "Tahun", "Penumpang", "Status Mesin");
        System.out.println("----------------------------------------------------------------------------------------------------------");

        for (int i = 0; i < databasePesawat.size(); i++) {
            Boeing737 p = databasePesawat.get(i);
            System.out.printf("| %-3d | %-16s | %-20s | %-12s | %-6d | %-9d | %-12s |%n",
                            (i + 1), p.getMaskapaiPemilik(), p.getRutePenerbangan(), p.getVarianSeri(),
                            p.getTahunProduksi(), p.getKapasitasPenumpang(), p.getStatusMesin());
        }
        System.out.println("----------------------------------------------------------------------------------------------------------");
        System.out.println("Total Data: " + databasePesawat.size() + " Pesawat\n");
    }

    static void tambahData() {
        System.out.println("\n--- TAMBAH DATA PESAWAT ---");
        System.out.print("Masukkan Nama Maskapai : ");
        String maskapai = input.nextLine();

        System.out.print("Masukkan Rute          : ");
        String rute = input.nextLine();

        System.out.print("Masukkan Seri Boeing   : ");
        String seri = input.nextLine();

        System.out.print("Tahun Produksi         : ");
        int tahun = Integer.parseInt(input.nextLine());

        System.out.print("Kapasitas Penumpang    : ");
        int penumpang = Integer.parseInt(input.nextLine());

        System.out.print("Status Mesin           : ");
        String status = input.nextLine();

        Boeing737 pesawatBaru = new Boeing737(
            "Avtur", penumpang, tahun, status,
            maskapai, 41000, rute, 2,
            seri, 35.79, 18000.0, "CFM56-7B"
        );

        databasePesawat.add(pesawatBaru);
        System.out.println("✅ Data pesawat berhasil ditambahkan!\n");
    }
}