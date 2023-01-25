import java.util.Scanner;
import java.util.Locale;

class LuasSegitiga {
    public static void main(String args[]) {

        Scanner input = new Scanner(System.in).useLocale(Locale.US);

        System.out.println("## Program Java Menghitung Luas Segitiga ##");
        System.out.println("===========================================");
        System.out.println();

        double a,t, luas;

        System.out.print("Input tinggi segitiga: ");
        a = input.nextDouble();

        System.out.print("input tinggi segitiga: ");
        t = input.nextDouble();

        luas = 0.5 * a * t;

        System.out.println("luas Segitiga : "+luas);
    }
}
