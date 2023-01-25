import java.util.Scanner;

public class if_else {
  public static void main(String args[]){

    byte nilai;
    Scanner input = new Scanner(System.in);

    System.out.print("Input Nilai Anda: ");
    nilai = input.nextByte();

    if (nilai >= 90 ) {
      System.out.println("A");
    }
    else if (nilai >= 80 && nilai < 89) {
      System.out.println("B");
    }
    else if (nilai >= 70 && nilai < 79) {
      System.out.println("C");
    }
    else if (nilai >= 60 && nilai < 69) {
      System.out.println("D");
    }
    else if (nilai < 60) {
      System.out.println("E");
    }
    else {
      System.out.println("Maaf, format nilai tidak sesuai");
    }
    
  }
}
