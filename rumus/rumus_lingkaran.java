import java.util.Scanner;

 class lingkaran {
public static void main(String[]args) {
Scanner input = new Scanner(System.in);

double Luas, phi = 3.14;
int r;

System.out.print("Masukan Jari-jari : ");
r = input.nextInt();

Luas = phi * r * r;

System.out.println("Luas Lingkaran :" + Luas);
  }
}
