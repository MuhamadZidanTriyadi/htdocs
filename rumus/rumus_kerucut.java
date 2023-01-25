import java.util.Scanner;
class pbo
{
    int jari;
    int tinggi;
    double Lkerucut;

public double hitungluas(int r, int t) {
    jari= r;
    tinggi = t;

    Lkerucut= (3.14 * jari * jari * tinggi)/3;
    return Lkerucut; }

    public static void main(String[] args) {
        pbo obj = new pbo ();

    Scanner DataIn = new Scanner(System.in);
    System.out.print("Masukin Jari-jari : ");
    obj.jari = DataIn.nextInt ();

    System.out.print("Masukan Tinggi : ");
    obj.tinggi = DataIn.nextInt ();

    System.out.println();
    System.out.println("Luas Kerucut = "+obj.hitungluas(obj.jari,obj.tinggi) );
    }
}