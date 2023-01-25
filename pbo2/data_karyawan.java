import java.util.Scanner;

public class data_karyawan {
    public static void main(String[] args) {
        // deklarasi variabel
        String nama, alamat;
        int usia, gaji;

        // membuat scanner baru
        Scanner keyboard = new Scanner (System.in);

        // Tampilkan output ke user
        System.out.println("### Pendataan Karyawan PT. Petani Kode ###");
        System.out.print("Nama Karyawan: ");
        // menggunakan scanner dan menyimpan apa yang diketik di variabel nama
        nama = keyboard.nextLine();
        // tampilkan output lagi
        System.out.print("Alamt : ");
        //menggunakan scaner lagi
        alamat = keyboard.nextLine();

        System.out.print("Usia: ");
        usia = keyboard.nextInt();

        System.out.print("Gaji : ");
        gaji = keyboard.nextInt();

        // Menampilkan apa yang sudah simpan di variabel
        System.out.println ("-------------------") ;
        System.out.println ("Nama Karyawan :" + nama) ;
        System.out.println ("Alamat : " + alamat) ; 
        System.out.println ("Usia : " + usia + " tahun" );
        System.out.println ("Gaji : Rp " + gaji);
    }
}
