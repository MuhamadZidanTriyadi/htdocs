import java.util.Scanner;

class perulangan_kondisi_if {
    public static void main(String args[]) {

        int a,b;
        Scanner input = new Scanner(System.in);

        System.out.print("Input nilai variabel a: ");
        a = input.nextInt();

        System.out.print("Input nilai variabel b: ");
        b = input.nextInt();

        if(a > b) {
            System.out.println("Nilai variabel a lebih besar dari variabel b");            
        }

        if (a < b) {
            System.out.println("Nilai variabel a lebih kecil dari variabel b");
        }

        if (a == b) {
            System.out.println("Nilai variabel a sama dengan variabel b");
        }
    }
}