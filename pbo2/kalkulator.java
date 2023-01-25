import java.util.Scanner;

public class kalkulator {
    public static void main (String[]args) throws 
    Exception{
        Scanner input = new Scanner(System.in);
        int numbers1,numbers2,choice,result = 0;
        System.out.println("Program Kalkulator Sederhana");
        System.out.println("1.Penjualan");
        System.out.println("2.Pengurangan");
        System.out.println("3.Pembagiam");
        System.out.println("4.Perkalian");
        System.out.println("5.Sisa Bagi");
        System.out.println("============");
    
        // input data
        System.out.println("Masukkan Angkan Pertama: ");
        numbers1 = input.nextInt();
        System.out.println("Masukkan Angka Kedua: ");
        numbers2 = input.nextInt();

        //pilihan operasi
        System.out.println("Masukkan Operasi: ");
        choice = input.nextInt();

        switch (choice) {
            case 1:
            result = numbers1 + numbers2;
            break;
            case 2:
            result = numbers1 - numbers2;
            break;
            case 3:
            result = numbers1 / numbers2;
            break;
            case 4:
            result = numbers1 * numbers2;
            break;
            case 5:
            result = numbers1 % numbers2;
            break;
            default :
            System.out.println("Salah Masukkan Pilihan Harap Baca Pilihan Di Menu");
        }
        System.out.print("Hasil:" + result);

    }
}
