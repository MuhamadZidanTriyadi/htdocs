import java.util.Scanner;

public class switch_case {
    public static void main(String[] args) {

        String lampu;
        Scanner scan = new Scanner(System.in);

        System.out.print("Inputkan warna lampu : ");
        lampu = scan.nextLine();

        switch(lampu){
            case "Merah":
            System.out.println("Lampu Merah, Berhenti !");
            break;
            case "Kuning":
            System.out.println("Lampu Kuning, harap hati-hati! ");
            break;
            case "Hijau":
            System.out.println("Lampu Hijau, Silahkan jalan!");
            break;
            default:
            System.out.println("Warna lampu Salah!");

        }
    }
}