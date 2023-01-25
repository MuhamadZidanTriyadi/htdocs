import java.util.Scanner;

class cobahitung {
    double perolehkeliling(double panjang, double lebar) {
        return 2 * (panjang + lebar);
    }
}
class kelilingkotak extends cobahitung {
    public static void main (String[] args) {
        double panjang, lebar, keliling;
        panjang = 20;
        lebar = 10.5;

    kelilingkotak kotak= new kelilingkotak();
    keliling = kotak.perolehkeliling(panjang, lebar) ;
    System.out.println("keliling = " + keliling) ;
    }
}
