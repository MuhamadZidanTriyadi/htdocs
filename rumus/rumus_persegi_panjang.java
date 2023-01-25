import java.util.Scanner;

class luaspersegipanjang {
    public static void main(String[] args ) {
        double panjang, lebar, luas;
        Scanner scan = new Scanner(System.in);

        System.out.println("Menghitung Luas Persegi Panjang");
        
        System.out.println("panjang= ");
        panjang = scan.nextDouble();

        System.out.println("lebar = ");
        lebar = scan.nextDouble();

        luas = panjang * lebar;
        System.out.println("luas = " + luas);

    }
}