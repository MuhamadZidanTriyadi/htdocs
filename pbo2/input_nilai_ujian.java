import java.util.Scanner;

class input_nilai_ujian {
    public static void main(String args[]){

        int a;
        Scanner input = new Scanner(System.in);

        System.out.print("Input nilai ujian: ");
        a = input.nextInt();

        if (a >= 75) {
            System.out.println("Selamar, anda lulus!");
        }
        else {
            System.out.println("Maaf, silahkan coba lagi tahun depan");
        }
    }
}

