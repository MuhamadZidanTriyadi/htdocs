import java.util.Scanner;

    public class Hari {
    public static void main(String[] args) {

        String Seragam;
        Scanner scan= new Scanner (System.in);

        System.out.print("Inputkan Seragam : ");
        Seragam= scan.nextLine();

        switch(Seragam) {
            case "Senin":
            System.out.println("Putih Celana Abu-Abu");
            break;
            case "Selasa":
            System.out.println("Putih Celana Hitam");
            break;
            case "Rabu":
            System.out.println("Pramuka");
            break;
            case "Kamis":
            System.out.println("Batik Celana Putih");
            break;
            case "Jumat":
            System.out.println("Koko Celana Hitam");
            break;
            default:
            System.out.println("Maaf, Hari Yang Anda Masukan Hari Libur");
        }
    }
}
