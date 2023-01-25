import java.util.Scanner;

public class nilai {
    public static void main (String args[]){
        
        String nama;
        int nh,nu,ua;
        double total;
        Scanner input = new Scanner(System.in);

        System.out.println("Masukkan Nama Anda: ");
        nama = input.nextLine();
        System.out.println("Masukkan Nilai Harian: ");
        nh = input.nextInt();
        System.out.println("Masukkan Nilai UTS: ");
        nu = input.nextInt();
        System.out.println("Masukkan Nilai UAS: ");
        ua = input.nextInt();
        total = (nh*0.4)+(nu*0.5)+(ua*0.1);
        

        if (total >= 85){  
            System.out.println("Predikat Anda : AMAT BAIK");
        }
        else if(total >= 75 && total < 85){
            System.out.println("Predikat Anda : BAIK");
        }
        else if(total >= 65 && total < 75){
            System.out.println("Predikat Anda : CUKUP");
        }
        else if(total >= 55 && total < 65){
            System.out.println("Predikat Anda : KURANG");
        }
        else if(total >= 0 && total <55){
            System.out.println("Predikat Anda : KURANG SEKALI");
        }
    else{
        System.out.println("Maaf, Format Nilai tidak Sesuai");
    }
    System.out.println("");
    System.out.println("Nilai Akhir: ");
    System.out.println(total = (nh*0.4)+(nu*0.5)+(ua*0.1));
    }
}